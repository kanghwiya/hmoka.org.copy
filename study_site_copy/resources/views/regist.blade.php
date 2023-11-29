@extends('layout.layout')


@section('title', 'regist')

@section('main')

<div class="login-modal">
    <div style="text-align: center; width: 450px; height:100% display:grid;">
        <h3 class="hpoint-font"> H.Point 통합회원 </h3>
        <form action="{{ route('regist.post') }}" method="post" id="frm">
            @csrf
            <div style=
            "font-size : 1.2rem;">
                <label for="name">이름</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">이메일</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="password">비밀번호</label>
                <input type="password" id="password" name="password" required>
                <br>
                <label for="passwordchk">비밀번호 확인</label>
                <input type="password" id="passwordchk" name="passwordchk" required>
            </div>
            <button
            type="button"
                style=
                "border: 0;
                background-color: transparent;
                cursor: pointer;
                font-weight: bolder;
                display:inline-block;
                width: 100px;
                height: 50px;
                border: 1px solid border: 1px solid #4c4c4c;
                background-color:rgb(135, 225, 135);
                font-size: 1.2rem;"
                onclick="document.getElementById('frm').submit(); window.close(); return false;">가입하기</button>
            <button type="button" onclick="window.close(); return false;"
                style=
                "border: 0;
                background-color: transparent;
                cursor: pointer;
                font-weight: bolder;
                display:inline-block;
                width: 100px;
                height: 50px;
                border: 1px solid border: 1px solid #4c4c4c;
                background-color: #c4c4c4;
                font-size: 1.2rem;
            ">취소</button>
        </form>
    </div>
</div>
@endsection