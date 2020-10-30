@extends('layouts.admin.app')
@section('content')

商品一覧

@foreach ($items as $item)
 
<img src="../../uploads/{{ $item->item_image }}" width="200px" height="200px">
<p>{{ $item->item_name }}</p>
<p>{{ $item->price }}</p>
<p>{!! nl2br(e($item->item_body)) !!}</p>
@endforeach

@endsection