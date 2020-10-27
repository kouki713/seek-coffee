<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('admin.item.index');
    }

    public function show()
    {
        return view('admin.item.show');
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function store()
    {
        
    }

    public function edit()
    {
        return view('admin.item.edit');
    }

    public function update()
    {
        
    }
}
