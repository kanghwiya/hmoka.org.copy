<header id="header">
    <div class="header-category">
            {{-- 메인 아이콘 영역 --}}
        <div class="header-icon">
            <h1 class="title-img">
                <a href="{{ route('main.get') }}">
                    <img src="/img/bg_logo.png" alt="">
                </a>
            </h1>
        </div>
        {{-- <div class="sub-header-category"> --}}
        {{-- 로그인 --}}
        <div class="user-shop">
            <a href="https://www.thehyundai.com/front/dpa/searchSpexSectItem.thd?sectId=201238&MainpageGroup=Category&GroupbannerName=babyculture">
                <img src="/img/shopping.png" alt="">
                MOKA SHOP</a>
        </div>
        <div class="user-login">
        @guest
            <a href="{{ route('login') }}">로그인</a>
            <a href="{{ route('regist') }}">회원가입</a>
        @endguest
        @auth
            <a href="{{ route('logout') }}">로그아웃</a>
        @endauth
            <a href="{{ route('favorite') }}">나의 MOKA</a>
            <button type="button">한/영</button>
        </div>
        {{-- 카테고리 --}}
        <div class="gnb" id="gnb">
                <ul>
                <li class="item-01">&nbsp;관람</li>
                <li class="item-02">&nbsp; 전시
                    <ul>
                        <li><a href="{{ route('exhibitionlist') }}">예정 전시</a></li>
                        <li><a href="{{ route('exhibitionlist') }}">현재 전시</a></li>
                        <li><a href="{{ route('exhibitionlist') }}">지난 전시</a></li>
                    </ul>
                </li>
                <li class="item-03">&nbsp; 소식</li>
                <li class="item-04">&nbsp; 다이어리</li>
                <li class="item-05">&nbsp; 소개</li>
                <li class="item-06">&nbsp; 교육</li>
                <li class="item-07">&nbsp; MOKA 가든</li>
            </ul>
        </div>
    </div>
</header>