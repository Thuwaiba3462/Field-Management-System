<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
public function show(){

    $data=Student::all();

    return view('Report', compact('data'));

}
   
}
