<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::all();

        return view('user.answer.index', compact('answers'));
    }
}
