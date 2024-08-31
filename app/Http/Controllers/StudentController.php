<?php

namespace App\Http\Controllers;

use App\Models\Students;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index(){

        $students= Students::all();
        return view ('student',compact('students'));

    }


    public function addStudent(Request $request){

      $request -> validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
        ]) ;
        
        Students::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
        ]);

        return redirect()->route('student')->with('Succefully added student');
        
    }

    public function deleteStudent($id){

        $student = Students::findOrFail($id);
        $student->delete();

        return redirect()->route('student')->with('Successfully deleted');
    }

    public function editStudent($id){

        $student = Students::findOrFail($id);
        return view ('edit_student',compact('student'));
        
    }

    public function updateStudent(Request $request,$id){
        $validatedData=$request -> validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'date_of_birth' => 'required',
            'address' => 'required',
        ]) ;

        $student = Students::findOrFail($id);
        
        $student->update([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'date_of_birth' => $validatedData['date_of_birth'],
            'address' => $validatedData['address'],
        ]);


        return redirect()->route('student')->with('success', 'student updated successfully');

    }
}
