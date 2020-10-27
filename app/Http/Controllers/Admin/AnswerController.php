<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        return view('admin.answer.index');
    }

    public function store()
    {
        
    }

    public function edit()
    {
        return view('admin.answer.edit');
    }

    public function update()
    {
       
    }

    public function destroy()
    {
       
    }
}
