<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::all();

        return view('admin.answer.index', compact('answers'));
    }

    public function store()
    {
        
    }

    public function edit($answer)
    {
        $answer = Answer::find($answer);

        return view('admin.answer.edit', compact('answer'));
    }

    public function update(Request $request, $answer)
    {
       
    }

    public function destroy()
    {
       
    }
}
