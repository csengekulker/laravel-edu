<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class StudentController extends Controller
{
    public function newStudent() {
        return view('new_student');
    }

    public function submitStudent ( Request $request) {
        print_r( $request );

    }

    public function getStudent() {

        $student = School::with( "students ")->get();

        foreach( $students as $student ) {

            foreach( $student->stud as $stu ) {
                
                echo "<pre>";
                print_r($stu->name);
            }
        }
    }
}
