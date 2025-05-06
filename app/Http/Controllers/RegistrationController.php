<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
   public function store(Request $request)
   {
    //    dd($request->all());
        
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:25 |min:3',
            'username' => 'required|string|max:10 |min:3 |unique:users',
            'email' => 'required|string|email|max:25|unique:users',
            'phone' => 'required|string|max:11 |min:11',
    
        ]);
        // return [
        //     'name' => $request->input('name'),
        //     'username' => $request->input('username'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        // ];
    
       
    
        return(redirect()->route('register.get')->with('success', 'Registration successful!'));

   }
}
