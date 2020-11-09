@extends('layouts.admin.app')
@section('content')

<div class="answer">
    <div class="answer-header">
        <p>FAQ一覧</p>
    </div>
    @foreach ($answers as $answer)
        <div class="answer-content">
            <div class="title">
                <h2>{{ $answer->title }}</h2>
                <i class="fas fa-minus close-btn"></i>
                <i class="fas fa-angle-down open-btn"></i>

            </div>
            <div class="answer-modal">
                <div class="body">
                    <p>{!! nl2br(e($answer->body)) !!}</p>
                </div>
                <div class="answer-btn">
                    <a href="{{ route('admin.answer.edit', ['answer'=>$answer]) }}">編集する</a>
                </div>
            </div>
            
        </div>
    @endforeach
    <div class="answer-header">
        <p>FAQを追加</p>
    </div>
    <div class="answer-content">
    <form method="POST" action="{{ route('admin.answer.store') }}">
        @csrf
        <p>タイトル</p>
        <input type="text" name="title" class="form-control">
        <p>内容</p>
        <textarea type="text" name="body" class="form-control" rows="3"></textarea>
        <div class="answer-new-btn">
            <input type="submit" value="登録">
        </div>
        </form>

    </div>
</div>
@endsection