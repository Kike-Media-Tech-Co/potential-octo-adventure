<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMail;
use App\Mail\UserMail;

class ContactController extends Controller
{
        public function contact(){
                return view('contact');
        }

    public function contactPost(Request $request){
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        'phone' => 'required',
                        'message' => 'required'
                ]);
        
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $message = $request->get('message');


        $admin_mail = "bhamiji09@gmail.com";

        //Mail the Admin
        Mail::to($admin_mail)->send(new AdminMail( $name, $phone, $email, $message ));

        //Mail the User
        Mail::to($email)->send( new UserMail($name));

        return back()->with('success', 'Message sent successfully');

    }
}
