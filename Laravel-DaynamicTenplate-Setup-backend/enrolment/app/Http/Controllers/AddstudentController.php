<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddstudentController extends Controller
{
    public function addstudent() {
        return view('admin.addstudent');
    }
}
