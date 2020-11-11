<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemImage;

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
        // dd($request->file('file'));
        $item = new Item;

        $file = $request->item_image;
        $fileName = time() . $file->getClientOriginalName();
        $target_path = public_path('uploads/');
        $file->move($target_path, $fileName);

        $item->item_name = $request->input('item_name');
        $item->item_body = $request->input('item_body');
        $item->price = $request->input('price');
        $item->num = $request->input('num');
        $item->item_status = 1;
        $item->item_image = $fileName;

        
        $item->save();

        $files = $request->file('file');

        foreach($files as $file){
            $item_image = new ItemImage;
            $item_image->item_id = $item->id;

            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);

            $item_image->item_image = $fileName;

            $item_image->save();

	    // $file_name = $file->getClientOriginalName();

	    // $file->storeAS('',$file_name);

        }
        $item_imas = ItemImage::all();
        dd($item_imas);
        
        return redirect('admin/item');
    }

    public function edit($item)
    {
        $item = Item::find($item);

        return view('admin.item.edit', compact('item'));
    }

    public function update(Request $request, $item)
    {
        $item = Item::find($item);

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

    public function status_update($item)
    {
        $item = Item::find($item);

        if ($item->item_status == 1) {
            $item->item_status = 2;
            $item->save();
        }
        elseif ($item->item_status == 2) {
            $item->item_status = 1;
            $item->save();
        }
        
        return back();
    }

}
