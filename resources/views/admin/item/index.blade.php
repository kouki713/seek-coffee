@extends('layouts.admin.app')
@section('content')

商品一覧

@foreach ($items as $item)
 ~
<img src="../../uploads/{{ $item->item_image }}" width="200px" height="200px">
 ~
@endforeach

@endsection