@extends('layout.layout')

@section('title', 'home')

@section('main')
<main>
    <br>
    어쩌고저쩌고
    <br>


    
    {{-- 모달 버튼 --}}
    <div class="sns-btn">
        <button type="button" class="sns-modal" id="sns_open_btn">SNS</button>
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