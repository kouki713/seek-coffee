@extends('layouts.admin.app')
@section('content')

<div class="receipt">
    <div class="receipt-index">
        <h2>入庫履歴一覧</h2>
        <table>
            <tr>
                <th>入庫日時</th>
                <th>入庫商品</th>
                <th>入庫個数</th>
            </tr>
            @foreach ($receipts as $receipt)
            <tr>
                <td>{{ $receipt->created_at->format('Y年m月d日H時i分') }}</td>
                <td class="title">
                    <img src="../../uploads/{{ $receipt->item->item_image }}" style="width:100px; height:60px;">
                    <a href="{{ route('admin.item.show', ['item' => $receipt->item]) }}">
                        {{ $receipt->item->item_name }}
                    </a>
                </td>
    
                <td>{{ $receipt->num }}個</td>
            </tr>
        @endforeach
        </table>
    </div>
</div>
@endsection