<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin/dashboard");
    }

    public function approveStudent($id){
        $std = Student::find($id);
        $std->status = "1";
        $std->save();
        return redirect()->route("admin.manage.student.active");

    }

    public function passoutStudent($id){
        $std = Student::find($id);
        $std->status = "2";
        $std->save();
        return redirect()->route("admin.manage.student.passout");
    }
}
