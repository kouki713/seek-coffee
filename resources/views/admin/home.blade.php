@extends('layouts.admin.app')

@section('content')
<div class="home-header">
    <h1>ホーム</h1>
</div>
<div class="home-main">
    <div class="body1">
        <div class="order">
            <div class="header">
                <p>注文状況</p>
            </div>
            <div class="body">
                <div class="title">本日の注文</div>
                <div class="num">2</div>
                <a href="#">
                    <span>></span>
                </a>
            </div>
            <div class="body">
                <div class="title">受付前</div>
                <div class="num">3</div>
                <a href="#">
                    <span>></span>
                </a>
            </div>
            <div class="body">
                <div class="title">受付済み</div>
                <div class="num">2</div>
                <a href="#">
                    <span>></span>
                </a>
            </div>
            <div class="body">
                <div class="title">発送手配待ち</div>
                <div class="num">1</div>
                <a href="#">
                    <span>></span>
                </a>
            </div>
        </div>
        <div class="contact">
            <div class="header">
                <p>お問い合わせ状況</p>
            </div>
            <div class="body">
                <div class="title">本日のお問い合わせ</div>
                <div class="num">2</div>
                <a href="#">
                    <span>></span>
                </a>
            </div>
            <div class="body">
                <div class="title">未回答</div>
                <div class="num">2</div>
                <a href="#">
                    <span>></span>
                </a>
            </div>
        </div>
    </div>
    <div class="body2">
        <div class="sales">
            <div class="header">
                <p>売り上げ状況</p>
            </div>
            <div class="body">
                <div class="main">
                    <div class="num">
                        <p>¥ 89,000<span>/</span>2<span>件</span></p>
                    </div>
                    <p>今月の売り上げ / 売り上げ件数</p>
                </div>
                <div class="sub">
                    <div class="contents">
                        <div class="num">
                            <p>¥ 24,000<span>/</span>5<span>件</span></p>
                        </div>
                        <p>昨日の売り上げ / 売り上げ件数</p>
                    </div>
                    <div class="contents">
                        <div class="num">
                            <p>¥ 19,000<span>/</span>4<span>件</span></p>
                        </div>
                        <p>今日の売り上げ / 売り上げ件数</p>
                    </div>
                </div>
            </div>  
        </div>
        <div class="home-receipt">
            <div class="header">
                <p>ショップ状況</p>
            </div>
            <div class="body">
                <div class="body-content">
                    <i class="fas fa-tags">
                        <i class="fas fa-slash"></i>
                    </i>
                    <div class="main">
                        <div class="num">1</div>    
                        <div class="title">在庫切れ商品</div>
                    </div>
                    <a href="#">
                        <span>></span>
                    </a>
                </div>
                <div class="body-content">
                    <i class="fas fa-users"></i>
                    <div class="main">
                        <div class="num">25</div>    
                        <div class="title">会員数</div>
                    </div>
                    <a href="#">
                        <span>></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
