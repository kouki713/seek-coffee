<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Receipt;


class ReceiptController extends Controller
{
    public function index()
    {
        $receipts = Receipt::all();

        return view('admin.receipt.index', compact('receipts'));
    }

    public function store(Request $request)
    {
        $receipt = new Receipt();

        $receipt->item_id = $request->item_id;
        $receipt->num = $request->num;
        $receipt->save();

        $item = $receipt->item;

        $item->num = $item->num + $receipt->num;

        $item->save();

        return redirect()->route('admin.item.index');
    }

    public function show($item) 
    {
        $item = Item::find($item);

        return view('admin.receipt.show', compact('item'));
    }
}
