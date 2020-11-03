@extends('layouts.admin.app')
@section('content')

<div class="contact-header">
    お問い合わせ一覧
</div>
<div class="item-index">
    <table>
        <tr>
            <th>
                <p>商品名</p>
            </th>
            <th>
                <p>価格</p>
            </th>
            <th>
                <p>在庫</p>
            </th>
            <th>
                <p>販売ステータス</p>
            </th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td class="title">
                    <img src="../../uploads/{{ $item->item_image }}" style="width:130px; height:80px;">
                    <a href="{{ route('admin.item.show', ['item' => $item]) }}">
                        {{ $item->item_name }}
                    </a>
                </td>
                <td>¥{{ number_format($item->price) }}</td>
                <td>{{ $item->num }}</td>
                <td>
                    @if ($item->num < 5)
                        <p style="color:red;">SOLD OUT</p>
                    @else
                        @if ($item->item_status == 1)
                            <p>販売中</p>
                        @elseif ($item->item_status == 2)
                            <p style="color:tomato;">販売停止中</p>
                        @endif
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection