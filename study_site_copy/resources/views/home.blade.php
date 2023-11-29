@extends('layout.layout')

@section('title', 'home')

@section('main')
<main>
    <div class="main-content">
        <div class="grid-first-line">
            <div class="block1">1</div>
            <div class="block2">2</div>
            <div class="block3">3</div>
        </div>
        <div class="grid-second-line">
            <div class="block4">4</div>
            <div class="block5">5</div>
        </div>
        <div class="grid-last-line">
            <div class="block6">6</div>
            <div class="block7">7</div>
        </div>

        {{-- 모달 버튼 --}}
        <div class="sns-btn">
            <button type="button" class="sns-modal" id="sns_open_btn">SNS</button>
        </div>

        {{-- 최상단으로 가는 버튼 --}}
        <div class="go-top">
            <button type="button" class="go-top-btn" id="go-top-btn">ㅗ</button>
        </div>
    </div>


    {{-- 모달 --}}
    <div id="modal">
        <div class="modal-content">
            <button type="button" class="button-sns-x" id="sns_close_btn">X</button>
            <div> <img src="/img/sns_title.png" alt=""></div>
            <a href="https://www.youtube.com/@hmoka3700" target="_blank">
                <img src="/img/sns_txt01.png" alt="">
            </a>
            <br>
            <a href="https://www.instagram.com/hmoka3700/" target="_blank">
                <img src="/img/sns_txt02.png" alt="">
            </a>
            <br>
            <a href="https://post.naver.com/my.nhn?memberNo=33150240" target="_blank">
                <img src="/img/sns_txt03.png" alt="">
            </a>
            <br>
            <a href="#">
                <img src="/img/sns_txt04.png" alt="">
            </a>
            <br>
            <a href="https://www.spatial.io/s/MOKA-ARTROOM-638460762c816c0001bf2482?share=7328469175120662422" target="_blank">
                <img src="/img/sns_txt05.png" alt="">
            </a>
            <br>
            <a href="https://hmoka-vacance.org/?lang=ko" target="_blank">
                <img src="/img/sns_txt06.png" alt="">
            </a>
        </div>
    </div>

</main>
@endsection