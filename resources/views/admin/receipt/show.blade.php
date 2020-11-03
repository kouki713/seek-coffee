@extends('layouts.admin.app')
@section('content')

<div class="receipt-show">
    <div class="receipt-new">
        <form method="POST" action="{{route('admin.receipt.store')}}">
            @csrf
            <div class="header">
               <h2>入庫入力</h2> 
            </div>
            <p>{{ $item->item_name }}</p>
            <p><span>在庫：</span>{{ $item->num }}</p>
            <p>入庫数：<input type="number" name="num"></p>
            <input type="hidden" name="item_id" value="{{ $item->id }}">
            <div class="receipt-btn">
                <input type="submit" value="送信する">
            </div>   
        </form>
    </div>
    <div class="receipt-index">
        <div class="header">
            <h2>[{{ $item->item_name }}]入庫履歴</h2>
        </div>
        <table>
            <tr>
                <th>
                    <p>登録日</p>
                </th>
                <th>
                    <p>個数</p>
                </th>
            </tr>
            @foreach ($item->receipts as $receipt)
            <tr>
                <td>
                    <p>{{ $receipt->created_at }}</p>
                </td>
                <td>
                    <p>{{ $receipt->num }}</p>
                </td>
            </tr>
            @endforeach
        </table>
        
    </div>
</div>

@endsection