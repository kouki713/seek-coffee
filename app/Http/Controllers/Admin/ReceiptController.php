<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index()
    {
        return view('admin.receipt.index');
    }

    public function store()
    {
    
    }
}
