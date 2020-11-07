@extends('layouts.admin.app')
@section('content')


<div class="contact">

</div>
<div class="contact-main">
    <div class="contact-content">
        <p>未回答　（<span>{{$contacts->count()}}</span>件）</p>
        <table>
            <tr>
                <th>お問い合わせ日時</th>
                <th>名前</th>
                <th>件名</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->title }}</td>
                    <td style="color:red;">未回答</td>
                    <td><a href="{{ route('admin.contact.show', ['contact' => $contact]) }}">詳細 →</a></td>
                </tr>    
            @endforeach
        </table>
    </div>
    <div class="contact-content contact-content2">
        <p>回答済</p>
        <table>
            <tr>
                <th>回答日時</th>
                <th>名前</th>
                <th>件名</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($contacts2 as $contact2)
                <tr>
                    <td>{{ $contact2->updated_at }}</td>
                    <td>{{ $contact2->name }}</td>
                    <td>{{ $contact2->title }}</td>
                    <td>回答済</td>
                    <td><a href="{{ route('admin.contact.show', ['contact' => $contact2]) }}">詳細 →</a></td>
                </tr>        
            @endforeach
        </table>
    </div>
</div>

@endsection