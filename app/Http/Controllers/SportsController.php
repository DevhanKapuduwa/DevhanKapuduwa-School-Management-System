<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\SportsStatus;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class SportsController extends Controller
{
    public function index()
    {
        $sports = Sport::all();

        return view('homepage',compact('sports'));
    }

    public function create(Request $request)
    {
        $sport = new Sport();

        $statusvalidation = $request->validate([
            'status' => ['required', new Enum(SportsStatus::class)],
        ]);

        $sport->id = $request->input('id');
        $sport->name = $request->input('name');
        $sport->status = $statusvalidation['status'];
    }
    
}