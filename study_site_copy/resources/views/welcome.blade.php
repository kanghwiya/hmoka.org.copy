{{-- https://www.hmoka.org/main/index.do

보드 : 제목, 전시 시작일, 전시 종료일, 이미지, 전시개요, 주의사항
, 전시 장소, 관람시간, 관람 나이, 금액, 전시연계교육(링크), MOKA VR TOUR
카테고리 : 관람, 전시(지난 전시, 현재전시, 예정 전시), 소식, 소개, 교육, 다이어리 MOKA가든
유저 : 이름, 아이디, 비밀번호, 비밀번호 확인
즐겨찾기 저장 테이블 : 즐겨찾기 pk, 유저pk불러오기, 보드pk불러오기, create,update,delete

카테고리별 불러오기 : controller에서 제어하기 / or board 셀렉트에서 제어 --}}

{{-- 1. Git에서 소스코드 내려받기

2. 터미널에서 vendor를 내려받을 라라벨 프로젝트로 이동

3. 터미널에서 composer install
	>> vendor를 다운로드

4. .env 파일을 생성
	>> .env.example 복사해서 쓰면 됨

5. 터미널에서 php artisan key:generate
	>> .env 파일에 APPKEY를 생성

6. 그 외 설정들 셋팅 --}}


{{-- 

새 라라벨 프로젝트 설치
composer create-project laravel/laravel='9' laravel_vue

vue 설치
npm install

compile 기능. 매번 확인해줘야 함.
npm run dev

뷰 설치
npm install --save-dev vue

모듈 설치
npm install --``save-dev vue-loader

자동 compile 기능
npm run watch --}}

