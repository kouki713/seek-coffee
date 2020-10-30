@extends('layouts.app')
@section('content')

<div class="top" id="top">
    <div class="background"></div>
    <div class="top-content">
        <div class="title">
            SEEK COFFEE
        </div>
        <div class="body">
            ささやかな一杯で、幸せな一生に
        </div>
        <div class="text">
        We make every cup of coffee with 
        love and make your heart warm.<br>
        coffee stand is the place where 
        you can share a coffee time with 
        your loved ones.
        </div>
    </div>
</div>

<div class="menber" id="menber">
    <div class="menber-content">
        <div class="title">
            SEEK COFFEEへようこそ。
        </div>
        <div class="body">
            「仲間と共に多くの人に幸せを届けて、仲間と共に幸せになれたらいいな。」<br>
            そんな想いを詰め込んだ場所を作りました。<br>
            ささやかな一杯で幸せをお届けします。
        </div>
        <div class="profile">
            <div class="profile-image"></div>
            <div class="profile-text">
                マイケル / 店長
            </div>
        </div>
    </div>
</div>

<div class="menu" id="menu1">
    <div class="background"></div>
    <div class="menu-content">
        <div class="title">
            MENU
        </div>
        <div class="body">
            <div class="body-box">
                <div class="body-box-text">
                    <div class="box-menu">Americano</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥500</div>
                </div>
                <div class="body-box-text">
                    <div class="box-menu">Cold brew</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥500</div>
                </div>
                <div class="body-box-text">
                    <div class="box-menu">Cappuccino</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥500</div>
                </div>
                <div class="body-box-text">
                    <div class="box-menu">Ice latte</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥500</div>
                </div>
                <div class="body-box-text">
                    <div class="box-menu">Hojicha latte</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥500</div>
                </div>
            </div>
            <div class="body-box">
                <div class="body-box-text">
                    <div class="box-menu">Matcha latte</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥500</div>
                </div>
                <div class="body-box-text">
                    <div class="box-menu">Lemonade</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥500</div>
                </div>
                <div class="body-box-text">
                    <div class="box-menu">Lemon squash</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥500</div>
                </div>
                <div class="body-box-text">
                    <div class="box-menu">Wa kocha soda</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥500</div>
                </div>
                <div class="body-box-text">
                    <div class="box-menu">Pound cake</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥300</div>
                </div>
            </div>
            <div class="body-box">
                <div class="body-box-text">
                    <div class="box-menu">Rマグボトル ※</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥2,000</div>   
                </div>
                <div class="body-box-text">
                    <div class="box-menu">Rブレンド（豆or粉）</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥2,000</div>    
                </div>
                <div class="body-box-text">
                    <div class="box-menu">OKAZAKIブレンド（豆or粉）</div>
                    <div class="box-space">…</div>
                    <div class="box-prace">¥2,000</div>   
                </div>
            </div>
        </div>
        <div class="text">
            ※店頭で購入の場合、ボトルに好きなドリンクサービスさせて頂きます。
        </div>
    </div>

</div>

<div class="store" id="store">
    <div class="background"></div>
    <div class="store-content">
        <h2 class="title">ONLINE STORE</h2>
        <p class="body">
            オンラインでもコーヒー豆をご注文いただけます。
        </p>
        <a href="{{ route('home.index') }}" target="_blank" class="store-btn">
            ONLINE STORE
        </a>
        <div class="info">
            <a href="#" class="line">LINEに登録</a>
            <p class="info-text">
                販売開始のお知らせや新商品の情報を配信します
            </p>
        </div>
    </div>

</div>

<div class="shop" id="shop">  
    <div class="background"></div>
    <div class="shop-content">
        <div class="title">
            SHOP
        </div>
        <div class="body">
            <div class="body-content">
                <p class="body-content-title">Open</p>
                <p class="body-content-text">10:00-20:00</p>
            </div>
            <div class="body-content">
                <p class="body-content-title">Holiday</p>
                <p class="body-content-text">Tuesday</p>
            </div>
            <div class="body-content">
                <p class="body-content-title">Address</p>
                <p class="body-content-text">東京都墨田区押上１丁目１−２</p>
            </div>
        </div>
        <div class="text">
            当店は混雑を回避するため、完全予約制です。<br>
            下記サイトより予約の上、ご来店ください。
        </div>
        <div class="mini-text">
            ※ご予約が無い方の入店/購入はできません。
        </div>
        <a href="#" class="shop-btn">来店を予約する</a>
    </div>
</div>
@endsection

