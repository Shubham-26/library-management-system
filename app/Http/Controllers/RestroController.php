<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Books;
use App\users;
use Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Mail\WelcomeMail;
use App\Mail\BookAddMail;
use App\Mail\BookDeleteMail;
use Illuminate\Support\Facades\Mail;

class RestroController extends Controller
{
    //
    function index()
    {
       

         $fetches      = Books::all();
         return view('home',['fetches'=>$fetches]);
    	
    }
    function list()
    {
    	$data = Books::all();
    	return view('list',["data"=>$data]);
    }
     function add(Request $req)
    {
    	


    	//return $req->input();
    	$book = new Books;

        if($req->hasFile('file'))
        {
            $file = $req->file('file');
            $extension= $file->getClientOriginalExtension();
            $fileNameWithExt = $req ->file('file')->getClientOriginalName();
            $filename= pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            $filenameTOstore=$filename.'_'.time().'.'.$extension;
           
            $path = $req->file('file')->move('books/',$filenameTOstore);
            $book->file =$filenameTOstore;
        }else
        {
            return $req;
            $book->file="null";
        }

        $book->title = $req->input('title');
    	$book->description = $req->input('description');
    	$book->price = $req->input('price');
    	$book->user = Session::get('user');
    	
    	$book->save();

        $name = Session::get('user');
        $email = DB::table('users')->where('name', $name)->value('email');
        Mail::to($email)->send(new BookAddMail());

    	//flash session for success message
    	$req->session()->flash('status','Book submitted Successfully');
    	return redirect('list');

    }
    function delete($id)
    {
    	Books::find($id)->delete();

        $name = Session::get('user');
        $email = DB::table('users')->where('name', $name)->value('email');
        Mail::to($email)->send(new BookDeleteMail());

    	Session::flash('status','Book Deleted Successfully');
    	return redirect('list');
    }
    function edit($id)
    {
    	$data= Books::find($id);
    	return view('edit',['data'=>$data]);
    }

    function update(Request $req)
    {
    	$book = Books::find($req->input('id'));
    	$book->title = $req->input('title');
    	$book->description = $req->input('description');
    	$book->price = $req->input('price');
    	
    	$book->save();

    	//flash session for success message
    	$req->session()->flash('status',' Details Update Successfully');
    	return redirect('list');

    }

    function register(Request $req)
    {

        

        $user = new users;
        if($req->hasFile('image'))
        {
            $file = $req->file('image');
            $extension= $file->getClientOriginalExtension();
            $fileNameWithExt = $req ->file('image')->getClientOriginalName();
            $filename= pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            $filenameTOstore=$filename.'_'.time().'.'.$extension;
           
            $path = $req->file('image')->move('profile/',$filenameTOstore);
            $user->avatar =$filenameTOstore;
        }else
        {
            return $req;
            $user->avatar="null";
        }
    	
    	
    	$user->name = $req->input('username');
    	$user->email = $req->input('email');
    	$user->password = Crypt::encrypt($req->input('password'));
    	//$user->password = $req->input('password');
    	
    	$user->save();

    	//flash session for success message
    	$req->session()->flash('user',$req->input('username'));

        $email = $req->input('email');
        Mail::to($email)->send(new welcomeMail());
    	return redirect('/');

    }
    function login(Request $req)
    {
    	$user= users::where("name",$req->input('username'))->get();
    	if( Crypt::decrypt($user[0]->password)==$req->input('password'))
    	{
    		$req->session()->put('user',$user[0]->name);
    		return redirect('/');
    	}
    }
    function logout(Request $req)
    {
    	
    	$req->session()->flush();
    	return redirect('login');
    }
    

}
