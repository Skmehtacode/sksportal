<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('homepages/home');
    }

    public function apply(Request $req){

        if ($req->method() == "POST"){
            $data = $req->validate([
                'name'=>'required',
                'contact'=>'required',
                'email'=>'required',
                'father_name'=>'required',
                'address'=>'required',
                'city'=>'required',
                'state'=>'required',
                'education'=>'required',
                'dob'=>'required',
                'doj'=>'required',
            ]);

            Student::create($data);
            
            return redirect()->route('homepage'); 
        }

        return view('homepages/apply');
    }

    public function contact(){
        return view('homepages/contact');
    }

    public function courses(){
        return view('homepages/courses');
    }

    public function onlinepayment(){
        return view('homepages/onlinepayment');
    }
}
