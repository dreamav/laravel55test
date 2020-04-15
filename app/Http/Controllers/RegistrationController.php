<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('sessions.registration');
    }
    public function store()
    {
    	// Validate request
    	$this->validate(request(),[
    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required'
    	]);
    	// Create and save user
    	$user = User::create(request(['name','email','password']));
    	// Sign in user
    	auth()->login($user);
    	// Redirect to homepage
    	return redirect()->route('posts');
    }
}
