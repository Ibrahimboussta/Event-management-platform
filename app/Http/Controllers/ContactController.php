<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class ContactController extends Controller
{
    //
    public function index(){
        return view('Contact.contact');
    }

    public function store(Request $request){

        request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
        ]);

        Contact::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
            
        ]);

        return back();
    }
}
