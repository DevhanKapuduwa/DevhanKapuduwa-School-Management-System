<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();

        return view('homepage',compact('subjects'));
    }

    public function create(Request $request)
    {
        $subject = new Subject();

        $subject->name = $request->input('name');
        $subject->save();

        return redirect('/');
       
    }

    public function delete($id)
    {
        Subject::destroy($id);

        return redirect('/');
    }
    
    public function view($id)
    {
        $subjectitem = Subject::where('id',$id)->first();

        return view('subjectview',compact('subjectitem'));
    }

    public function retrieve($id)
    {
        $subject = Subject::find($id);

        return view('subjectupdate',compact('subject'));
    }

    public function update($id,Request $request)
    {
        $subject = Subject::find($id);

        $subject->name = $request->input('name');

        $subject->update();

        return redirect('/');
    }
}