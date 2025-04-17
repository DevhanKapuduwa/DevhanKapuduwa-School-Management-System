<?php

namespace App\Http\Controllers;

use App\ClassRoomStatus;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Enum;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Classroom::with('students')->get();
        // dd($classes);

        return view('homepage', compact('classes'));
    }

    public function create(Request $request)
    {

        $statusvalidation = $request->validate([
            'status' => ['required', new Enum(ClassRoomStatus::class)],
        ]);

        $class = new Classroom();

        $class->name = $request->input('name');
        $class->teacherName = $request->input('teacherName');
        $class->status = $statusvalidation['status'];

        $class->save();

        return redirect('/');
    }

    public function delete($id)
    {
        Classroom::destroy($id);

        return redirect('/');
    }

    public function view($id)
    {
        $classitem = Classroom::where('id', $id)->first();

        return view('classview', compact('classitem'));
    }

    public function retrieve($id)
    {
        $class = Classroom::find($id);

        return view('classupdate', compact('class'));
    }

    public function update($id, Request $request)
    {
        $class = Classroom::find($id);

        $class->name = $request->input('name');
        $class->teacherName = $request->input('teacherName');
        $class->status = $request->input('status');

        $class->update();

        return redirect('/');
    }
}