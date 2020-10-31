@extends('layouts.user.app')
@section('content')

<div class="content-header">
    <div class="header-nav">
        <a href="#">HOME</a>
        <span>/</span>
        <p>FAQ</p>
    </div>
    <h1 class="title">FAQ</h1>
</div>
<div class="answer">
    @foreach ($answers as $answer)
        <div class="content">
            <div class="title">
                <h2>{{ $answer->title }}</h2>
                <a href="#">⬇︎</a>
            </div>
            <div class="body">
                <p>{!! nl2br(e($answer->body)) !!}</p>
            </div>
        </div>
    @endforeach
</div>

@endsection