<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $items = Item::all();

        return view('admin.item.index', compact('items'));
    }

    public function show($item)
    {
        $item = Item::find($item);

        return view('admin.item.show', compact('item'));
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function store(Request $request)
    {
        $item = new Item;

        $file = $request->item_image;
        $fileName = time() . $file->getClientOriginalName();
        $target_path = public_path('uploads/');
        $file->move($target_path, $fileName);

        $item->item_name = $request->input('item_name');
        $item->item_body = $request->input('item_body');
        $item->price = $request->input('price');
        $item->item_status = 1;
        $item->item_image = $fileName;

        
        $item->save();
        
        return redirect('admin/item');
    }

    public function edit($item)
    {
        $item = Item::find($item);

        return view('admin.item.edit', compact('item'));
    }

    public function update(Request $request, $item)
    {
        $file = $request->item_image;
        $fileName = time() . $file->getClientOriginalName();
        $target_path = public_path('uploads/');
        $file->move($target_path, $fileName);

        $item->item_name = $request->input('item_name');
        $item->item_body = $request->input('item_body');
        $item->price = $request->input('price');
        $item->item_status = 1;
        $item->item_image = $fileName;

        
        $item->save();

        return redirect()->route('admin.item.index');
    }
}
