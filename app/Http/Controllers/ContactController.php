<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    public function store(Request $request){
        $email = $request->email;
        Mail::to($email)->send(new WelcomeEmail($email));
        return view('contact', compact('email'));
    }
}
