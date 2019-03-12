<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Gallery;
use App\Join;
use App\Party;
use App\Serv;
use App\User;
use Illuminate\Http\Request;

class CelebController extends Controller
{
    //
    public function index(){

        $works = Serv::all();
//        $parties = Party::with('users')->get();
        $parties = Party::all();
        $peoples = User::all();

        return view("fpart.service",compact('works','parties','peoples'));

    }

    public function reg(){

        return view('fpart.jform');
    }


    public function jn(Request $request){

        Join::create($request->all());
        return redirect()->back()->with('message', "You have joined successfully.");

    }

    public function gl(){

        $gals = Gallery::all();

        return view('fpart.gallery',compact('gals'));

    }

    public function cont(){


        return view('fpart.contact');

    }
    public function cs(Request $request){
        Contact::create($request->all());
        return redirect()->back()->with('message', "Your message have sent successfully.");


    }


}
