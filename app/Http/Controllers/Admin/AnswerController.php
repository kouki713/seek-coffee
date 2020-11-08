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

    public function store(Request $request)
    {
        $answer = new Answer;
        
        $answer->title = $request->title;
        $answer->body = $request->body;

        $answer->save();

        return back();
    }

    public function edit($answer)
    {
        $answer = Answer::find($answer);

        return view('admin.answer.edit', compact('answer'));
    }

    public function update(Request $request, $answer)
    {
       $answer = Answer::find($answer);

       $answer->title = $request->title;
       $answer->body = $request->body;

       $answer->save();
       return redirect()->route('admin.answer.index');
    }

    public function destroy($answer)
    {
        $answer = Answer::find($answer);

        $answer->delete();

        return redirect()->route('admin.answer.index');
    }
}
