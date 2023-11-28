<header id="header">
    <div class="header-category">
        <div class="header-icon">
            {{-- 메인 아이콘 영역 --}}
            <h1 class="title-img">
                <a href="{{ route('main') }}">
                    <img src="/img/bg_logo.png" alt="">
                </a>
            </h1>
        </div>
        <div class="sub-header-category">
        {{-- 로그인 --}}
            <div class="user-log">
                <a href="https://www.thehyundai.com/front/dpa/searchSpexSectItem.thd?sectId=201238&MainpageGroup=Category&GroupbannerName=babyculture">
                    <img src="/img/shopping.png" alt="">
                    MOKA SHOP</a>
                <button type="button" onclick="login_modal(); return false;">로그인</button>
                <button type="button">회원가입</button>
                <button type="button">나의 MOKA</button>
                <button type="button">한/영</button>
            </div>
            {{-- 카테고리 --}}
            <div class="gnb" id="gnb">
                    <ul>
                    <li class="item-01">관람</li>
                    <li class="item-02">전시
                            <ul>
                                <li><a href="#">예정 전시</a></li>
                                <li><a href="#">현재 전시</a></li>
                                <li><a href="#">지난 전시</a></li>
                            </ul>
                    </li>
                    <li class="item-03">소식</li>
                    <li class="item-04">다이어리</li>
                    <li class="item-05">소개</li>
                    <li class="item-06">교육</li>
                    <li class="item-07">MOKA 가든</li>
                </ul>
            </div>
        </div>
    </div>
</header>