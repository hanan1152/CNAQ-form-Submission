<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function submit(StudentRequest $request){

        $students = new Student();
        $students->id= $request->input('id');
        $students->name= $request->input('name');
        $students->email= $request->input('email');
        $students->subject= $request->input('subject');
        $students->feedback= $request->input('feedback');

        $students->save();

       // return view('studentForm');
        return redirect()->route('home')->with('status' , 'Message was received');
      // return $request->input('name');

       // return view('message', ['httpRequest' => $request]);

    }


    public function index(){
        $students = Student::all();
        return view('studentIndex', ['students' => $students]);
       }
}
