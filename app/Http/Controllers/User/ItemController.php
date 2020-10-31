<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('user.item.index', compact('items'));
    }

    public function show($id)
    {
        $item = Item::find($id);

        return view('user.item.show', conpact('item'));
    }
}
