<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // public function index()
    // {
    //     $students = Student::all();

    //     return view('homepage',compact('students'));
    // }

    public function index()
    {
    $students = Student::with('classroom')->get();

    return view('homepage', compact('students'));
    }   

    public function create(Request $request)
    {
        $student = new Student();

        $student->name = $request->input('name');
        $student->classroom_id = $request->input('classroom_id');
        $student->gender = $request->input('gender');
        $student->personal_phone = $request->input('personal_phone');
        $student->address = $request->input('address');
        $student->mother_name = $request->input('mother_name');
        $student->mother_phone = $request->input('mother_phone');
        $student->father_name = $request->input('father_name');
        $student->father_phone = $request->input('father_phone');
        $student->land_phone = $request->input('land_phone');

        
        $student->save();

        return redirect('/');
       
    }

    public function delete($id)
    {
        Student::destroy($id);

        return redirect('/');
    }
    
    public function view($id)
    {
        $studentitem = Student::where('id',$id)->first();
 
        $subjects = Subject::pluck('name');
        
        return view('studentview',compact(['subjects','studentitem']));

    }

    public function retrieve($id)
    {
        $student = Student::find($id);

        return view('studentupdate',compact('student'));
    }

    public function update($id,Request $request)
    {
        $student = Student::find($id);

        $student->name = $request->input('name');
        $student->classroom_id = $request->input('classroom_id');
        $student->gender = $request->input('gender');
        $student->personal_phone = $request->input('personal_phone');
        $student->address = $request->input('address');
        $student->mother_name = $request->input('mother_name');
        $student->mother_phone = $request->input('mother_phone');
        $student->father_name = $request->input('father_name');
        $student->father_phone = $request->input('father_phone');
        $student->land_phone = $request->input('land_phone');

        $student->update();

        return redirect('/');
    }

    public function extract()
    {
        $classes = Classroom::all()->pluck('id');
        return view('createstudent',compact('classes'));
    }

    
    public function addSubject(Request $request, $studentId)
    {
        $subjectId = $request->subject_id;

        $student = Student::find($studentId);

        $subjects = $student->subjects ?? [];

        

        if (!in_array($subjectId, $subjects)) {
            $subjects[] = $subjectId;
            $student->subjects = $subjects;
            $student->save();
        }

        return redirect()->back()->with('success', 'Subject added');
    }

    public function removeSubject(Request $request, $studentId)
    {
        $subjectId = $request->subject_id;

        
        
        $student = Student::find($studentId);

        $subjects = $student->subjects ?? [];

        $subjects = array_filter($subjects, fn($id) => $id != $subjectId);

        $student->subjects = array_values($subjects);
        $student->save();

        return redirect()->back()->with('success', 'Subject removed');
    }

}