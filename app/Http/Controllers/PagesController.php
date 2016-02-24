<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
            $name = "Md.Shamim <script>alert('hack');</script>";
            return view('pages.about')->with('name',$name);
            /*
            $firstName = "Md.Shamim";
            $lastName = "Miah";
            $peoples = [
                    'Md.Shamim Miah' , 'Md.Alamin Miah' ,'Md.Arifur Rahman'
            ];
            return view('pages.about',compact('firstName','lastName','peoples'));
            */
	}
	
	public function contact(){
            return view('pages.contact');
	}
}
