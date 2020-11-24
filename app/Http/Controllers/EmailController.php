<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contactme;
use App\Mail\Contact1;

class EmailController extends Controller
{
    public function create(){
        return view('contact');
    }



    public function store(){
        request()->validate(['email'=>'required|email']);
        $email=request('email');

        // Mail::raw('plain text message', function ($message) {
        //    $message->to (request('email'))
        //    ->subject('hello abhimantyu singh');
        // });

        Mail::to(request('email'))
        ->send(new Contact1());

        return redirect('/contact')->with('msg','Email sent!');
            // $user = User::all();
            // foreach($user as $currUser){
            //     $currUser->userAddress;
            // }
    }
}
