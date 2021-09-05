<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSSの呼び出し --}}
    <link rel="stylesheet" href="css/custom.css">

    <title>IveSen</title>
</head>

<body>
    <section class="first" id="first">
        <header id="header">
            <div class="title">
                <p class="title-name">イベ戦</p>
            </div>
        </header>
            <img class="top-contents" src="images/top_cloud.svg">
            <p class="secound-contents">
                同人イベントで<br>
                標的をGETせよ
            </p>
    </section>
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
    <section class="four">
        <div class="four-contents">
            <button href="" class="btn-start"><p class="start-text">はじめる</p></button>
        </div>
    </section>
</body>

</html>

<script>
    // ヘッダーの色をスクロールに応じて変える処理
    function changeColor(){
        var timing = 70;
        var scrollY = window.pageYOffset;
        var body = document.body;

        var trigger1 = document.getElementById('secound');
        var trigger2 = document.getElementById('third');

        var trigger1Y = trigger1.getBoundingClientRect().top;
        var trigger2Y = trigger2.getBoundingClientRect().top;

        if(0 >= trigger1Y - timing){
            body.classList.add('bg-is-pink');
        }else{
            body.classList.remove('bg-is-pink');
        }
    }
    window.addEventListener('scroll', changeColor);

    // 猫の足跡
    function changeCat(){
        var timing = 70;
        var scrollY = window.pageYOffset;
        var body = document.body;

        var trigger1 = document.getElementById('first');
        var trigger2 = document.getElementById('secound');

        var trigger1Y = trigger1.getBoundingClientRect().top;
        var trigger2Y = trigger2.getBoundingClientRect().top;

        if(trigger2Y - timing < 150){
            body.classList.add('in-cat');
        }else if(trigger2Y - timing < 300){
            body.classList.add('in-cat2');
        }else{
            body.classList.remove('in-cat');
            body.classList.remove('in-cat2');
        }
    }
    window.addEventListener('scroll', changeCat);
</script>
