商品追加
@extends('layouts.admin.app')
@section('content')

<form method="POST" action="{{ route('admin.item.store') }}" enctype='multipart/form-data'>
@csrf
商品名
<input type="text" name="item_name" class="form-control">
商品説明
<input type="text-field" name="item_body" class="form-control">
価格
<input type="number" name="price" class="form-control">
在庫
<input type="number" name="num" class="form-control">
画像
<input type="file" name="item_image" class="form-control">
複数
<input type="file" name="file[]" class="form-control" multiple>

<input type="submit" class="btn btn-info" value="登録">
</form>

@endsection