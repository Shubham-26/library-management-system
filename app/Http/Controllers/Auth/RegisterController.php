<?php

namespace App\Http\Controllers\Auth;

use ...
use .....
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    .
    ...
    ....
    protected function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        Mail::to($data['email'])->send(new WelcomeMail($user));

        return $user;
    }
}
