{{-- 로그인 팝업 --}}
@extends('layout.layout')

@section('title', 'login')

@section('main')

<div class="login-modal">
    <div style="text-align: center; width: 450px; height:100% display:grid;">
        <h3 class="hpoint-font"> H.Point 통합회원 </h3>
        @include('layout.error')
        <form action="{{ route('login.post') }}" method="post">
            @csrf
            <div style=
            "font-size : 1.2rem;">
                <label for="email">아이디</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="password">비밀번호</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button style=
            "border: 0;
            background-color: transparent;
            cursor: pointer;
            font-weight: bolder;
            display:inline-block;
            width: 100px;
            height: 100px;
            border: 1px solid border: 1px solid #4c4c4c;
            background-color:rgb(135, 225, 135);
            font-size: 1.2rem;
            ">확인</button>
        </form>
        <h3 style="border-bottom: 2px solid #171A19;">현대백화점 회원</h3>
        <h4>현대백화점 회원은 H.Point 통합회원 전환 후
            <br>
            홈페이지를 이용해주세요
        </h4>
        <span>현대백화점 계정 조회 정보 : 이름, 생년월일, 연락처, CI</span>
        <a href="https://www.ehyundai.com/newPortal/member/HD/HD001000_M.do">H.Point 통합회원 전환하기</a>
        <hr>
        <div class="loginfooter" style="background-color: rgb(232, 232, 232, 1); ">
            현대어린이책미술관은 현대백화점 소속으로,
            <br>
            H.point 통합회원가입을 통해 서비스를 이용하실 수 있습니다.
            
            <br>
            아직 회원이 아니신가요?
            <a href="http://www.ehyundai.com/newPortal/member/HD/joinFront.do">H.Point 통합회원가입</a>
            <br>
            아이디, 비밀번호를 찾으세요?
            <a href="https://www.h-point.co.kr/cu/config/findCustId.nhd">아이디/비밀번호찾기</a>
        </div>
    </div>
</div>

@endsection