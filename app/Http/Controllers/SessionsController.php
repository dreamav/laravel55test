<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
    	return view('sessions.create');
    }
    public function store()
    {
    	// Attempt to auth user
    	if(!auth()->attempt(request(['email','password']))){
    		// If not, redirect back
    		return back();
    	}
    	// sign them in
    	// Redirect to home page
    	return redirect()->route('posts');
    }
    public function destroy()
    {
    	auth()->logout();
    	return redirect()->route('posts');
    }
}
