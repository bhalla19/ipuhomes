<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage(){
        return view('index');
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function contactUsForm(){
        return view('contactUsForm');
    }

    public function colleges(){
        return view('colleges');
    }

    public function roomie(){
        return view('roomie');
    }
    public function tecniaPg(){
        return view('tecniaPg');
    }

    public function rukmaniPg(){
        return view('rukmaniPg');
    }

    public function roomieForm(){
        return view('roomieForm');
    }
    public function bediPG(){
        return view('bediPG');
    }

    public function contactForm(Request $request ){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phoneNo'=>'required',

        ]);
        // $request = Request::capture();
        $contact = new Student;
        $contact->name = $request['name'];
        $contact->phoneNo = $request['phoneNo'];
        $contact->email = $request['email'];
        $contact->message = $request['message'];
        $contact->save();
        return redirect('/');

    }
}
