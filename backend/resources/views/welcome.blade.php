@extends('layout.app')

@section('content')
<head>
    @push('css')
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <section class="secound" id="secound">
        <div class="secound-text-contents">
            <h2 class="secound-title">
                イベ戦とは...？
            </h2>
            <div class="secound-text">
                <p class="st-1">イベントで目的の商品を手に入れるため、</p>
                <p class="st-2">同じ目的の人同士が結託するサイトです。</p>
                <p class="st-3">行列でコーナーを巡りきれなかった...</p>
                <p class="st-4">そんなお悩みを解決します！</p>
                <p class="st-5">商品ゲットのためだけでもよし。</p>
                <p class="st-6">趣味友として今後も繋がるもよし。</p>
                <p class="st-7">是非、本サイトで戦略をたて</p>
                <p class="st-8">勝ちましょう！</p>
                <p class="st-9">＊全て<span class="st-10">無料</span>です</p>
            </div>
            <img class="cat_foot_img" src="../images/cat_foot.svg" alt="">
            <img class="cat_foot_img2" src="../images/cat_foot.svg" alt="">
            <img class="back_cloud_img1" src="../images/back_cloud1.svg" alt="">
            <img class="back_cloud_img2" src="../images/back_cloud2.svg" alt="">
        </div>
    </section>
    <section class="third" id="third">
        <div class="third-contents">
            <h2 class="third-title">
                つかい方
            </h2>
            <div class="card">
                <div class="card-text">
                    <p class="t-t1">募集する・探す</p>
                    <p class="down-mark">↓</p>
                    <p class="t-t2">共戦希望がくる・だす</p>
                    <p class="down-mark">↓</p>
                    <p class="t-t3">ごめんね・よろしく</p>
                    <p class="down-mark">↓</p>
                    <p class="t-t4">トークへ<br>（よろしく の場合）</p>
                </div>
            </div>
            <img class="penguin_img1" src="../images/penguin.png" alt="">
            <img class="penguin_img2" src="../images/penguin.png" alt="">
            <img class="bard_img" src="../images/bard.png" alt="">
        </div>
    </section>
    <section class="four" id="four">
        <div class="four-contents">
            <button href="" class="btn-start"><p class="start-text">はじめる</p></button>
            <img class="b-cat" src="../images/black_cat.png" alt="">
        </div>
    </section>
    <section class="last" id="last">
        <div class="last-contents">
            <p class="signature">Copyright ©︎ 2021 Kyosuke Tajima</p>
        </div>
    </section>
    <script type="text/javascript" src="../../js/welcome.js"></script>
</body>
</html>
@endsection