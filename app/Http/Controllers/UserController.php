<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user = [
        'name' => 'Wendi',
        'email' => 'wendikardian@gmail.com',

    ];
    public function index()
    {
        return view('profile')->with('user', $this->user);
    }

    public function editProfile(){
        return view('editProfile')->with('user', $this->user);
    }
}
