@extends('layout.layout')

@section('title', 'detail')

@section('main')
    {{-- 즐겨찾기 --}}
    <button type="button" onclick="favorite(); return false;">즐겨찾기 등록</button>
    <input type="hidden" value="{{$data[0]->board_id}}" id="boardId">
    <input type="hidden" value="{{$data[0]->user_id}}" id="userId">
    <div class="detail-page">
        <div class="detail-title">
            <div class="detail-img">
                <div class="detail-title-t">{{$data[0]->title}}</div>
                <div class="detail-title-d">{{$data[0]->exhibition_start}} ~ {{$data[0]->exhibition_end}}</div>
                <div class="detail-title-i" style="background-image: url({{$data[0]->image}}); width:100%;"></div>
            </div>
        </div>

        <div class="detail-content">
            <div class="detail-content-open">전시개요</div>
            <div>{{$data[0]->content}}</div>
        </div>

        <div class="detail-caution">
            <div>{{$data[0]->caution}}</div>
        </div>

        <div class="detail-info">
            <div class="detail-info-sec">
                <a href="#">
                    <div class="detail-info-0">단체안내</div>
                </a>
                <div class="detail-info-1">{{$data[0]->location}}</div>
                <div class="detail-info-2">{{$data[0]->opentime}} - {{$data[0]->closetime}}</div>
                <div class="detail-info-3">{{$data[0]->admission_fee}}</div>
                <a href="https://www.hmoka.org/programs/exhibition/list.do?st_cd=480">
                    <div class="detail-info-4">전시연계교육</div>
                </a>
            </div>
        </div>
        <div class="sns-btn">
            <button type="button" class="sns-modal" id="sns_open_btn">SNS</button>
        </div>

        {{-- 최상단으로 가는 버튼 --}}
        <div>
            <button type="button" class="go-top-btn" id="go-top-btn"><img src="/img/upbtn.png" alt=""></button>
        </div>
    </div>

@endsection