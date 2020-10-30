@extends('layouts.user.app')
@section('content')

<div class="item-show">
    <div class="item-image">
        <div class="image"></div>
    </div>
    <div class="item-content">
        <div class="header">
            <h1 class="title">
                SEED BLEND(深煎り)
            </h1>
            <p class="price">
                ¥2,000
                <span>税込</span>
            </p>
            <a href="#">送料はこちら</a>
        </div>
        <form class="show-form">
            <button>カートへ入れて、注文へ</button>
            <div class="num-form">
                <p>数量選択</p>
                <select name="num">
                    <option value="">選択して下さい</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <p>個</p>
            </div>
        </form>
        <div class="show-body">
            <div class="text">
                <p>※お一人様５個までとなります。</p>
                <br>
                Rブレンドよりコクと深みが強いのが特徴のSEEDブレンド。<br>
                <br>
                ミルクと合わせることにより甘さが際立ち、チョコレートのような風味へ変化します。<br>
                ダークチョコレートやナッツの風味を感じるグアテマラ ワイカン、ブラジル シティオ・ダ・トーレの焙煎度合いを深煎りに調整しブレンドしました。<br>
                <br>
                飲み頃は到着後1週間から1ヶ月が目安になります。<br>
                <br>
                重さ：各220g（袋含）<br>
                賞味期限：焙煎日から2ヶ月ほど<br>
                <br>
                ※写真はイメージです。
                </div>
        </div>
    </div>
</div>

@endsection