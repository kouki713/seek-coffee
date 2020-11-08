FAQ 編集
@extends('layouts.admin.app')
@section('content')
<div class="answer">
    <div class="answer-header">
        <p>FAQ編集</p>
    </div>
    <div class="answer-content">
    <form method="POST" action="{{ route('admin.answer.update', ['answer'=>$answer]) }}">
        @csrf
        @method('put')
        <p>タイトル</p>
        <input type="text" name="title" class="form-control" value="{{ $answer->title }}">
        <p>内容</p>
        <textarea type="text" name="body" class="form-control" rows="3">{!! nl2br(e($answer->body)) !!}</textarea>
        <div class="answer-update-btn">
            <input type="submit" value="登録">
        </div>
        </form>
        <div class="answer-delete-btn">
            <form method="POST" action="{{route('admin.answer.destroy', ['answer' => $answer ]) }}">
                @csrf
                @method('delete')
                <input type="submit" value="削除する">
            </form>
        </div>
    </div>
</div>
@endsection