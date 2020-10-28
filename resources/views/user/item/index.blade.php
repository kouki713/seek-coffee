商品一覧
@extends('layouts.user.app')
@section('content')

@foreach ($items as $item)
 ~
<img src="../../uploads/{{ $item->item_image }}" width="200px" height="200px">
 ~
@endforeach

@endsection