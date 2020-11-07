@extends('layouts.admin.app')
@section('content')
<div class="contact-show">
    <div class="inner">
        <div class="inner-content">
            <h2>お問い合わせ詳細</h2>
            <p>お問い合わせ日時：{{ $contact->created_at }}</p>
            @if ( $contact->contact_status == 1 )
                <p>回答日時：<span style="color:red;">未回答</span></p>
            @else
                <p>回答日時：{{ $contact->updated_at }}</p>
            @endif
            <p>名前：{{ $contact->name }}</p>
            <p>メールアドレス：
                <a href="mailto:{{ $contact->email }}?subject=お問い合わせに関するご回答&amp;body={{ $contact->name }}%20様%0d%0aお問い合わせ頂いた件につきまして回答させていただきます。%0d%0a%0d%0a件名：{{ $contact->title }}%0d%0a%0d%0a内容：{{ $contact->body }}%0d%0a%0d%0a回答：">
                    {{ $contact->email }}
                </a>
            </p>
        </div>
        <div class="inner-content2">
            <p>件名：{{ $contact->title }}</p>
            <p>内容</p>
            <p>{{ $contact->body }}</p>
        </div>       
    </div>
    @if ( $contact->contact_status == 1 )
        <div class="inner-btn">
            <form method="POST" action="{{route('admin.contact.update', ['contact' => $contact ]) }}">
                @csrf
                @method('put')
                <input type="submit" value="回答済みへ">
            </form>
        </div>
    @endif
</div>
@endsection