<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;

class mailController extends Controller
{
   public function send(ContactRequest $request){


    $data = array(
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'message'=>$request->message,

    );

     Mail::to('khedmationline@gmail.com')->send(new sendMail($data));
     toast('send email successfully','success');
     return back();
   }
}
