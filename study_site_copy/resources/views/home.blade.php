@extends('layout.layout')

@section('title', 'home')

@section('main')
<main>
    <div class="main-content">
            <div class="grid-first-line">
                <a class="block1" href="{{ route('board.show', ['board' => $data[0]->board_id])}}">
                    <div style="background-image: url({{$data[0]->image}}); background-size: cover; cursor: pointer;"></div>
                </a>
                <a class="block2" href="{{ route('board.show', ['board' => $data[1]->board_id])}}">
                    <div style="background-image: url({{$data[1]->image}}); background-size: cover;"></div>
                </a>
                <a class="block3" href="{{ route('board.show', ['board' => $data[2]->board_id])}}">
                    <div style="background-image: url({{$data[2]->image}}); background-size: cover;"></div>
                </a>
            </div>
            <div class="grid-second-line">
                <a class="block4" href="{{ route('board.show', ['board' => $data[3]->board_id])}}">
                    <div style="background-image: url({{$data[3]->image}}); background-size: cover;"></div>
                </a>
                <a class="block5" href="{{ route('board.show', ['board' => $data[4]->board_id])}}">
                    <div style="background-image: url({{$data[4]->image}}); background-size: cover;"></div>
                </a>
            </div>
            <div class="grid-last-line">
                <a class="block6" href="{{ route('board.show', ['board' => $data[5]->board_id])}}">
                    <div style="background-image: url({{$data[5]->image}}); background-size: cover;"></div>
                </a>
                <a class="block7" href="{{ route('board.show', ['board' => $data[6]->board_id])}}">
                    <div style="background-image: url({{$data[6]->image}}); background-size: cover;"></div>
                </a>
            </div>

        {{-- 모달 버튼 --}}
        <div class="sns-btn">
            <button type="button" class="sns-modal" id="sns_open_btn">SNS</button>
        </div>

        {{-- 최상단으로 가는 버튼 --}}
        <div>
            <button type="button" class="go-top-btn" id="go-top-btn"><img src="/img/upbtn.png" alt=""></button>
        </div>
    </div>


</main>
@endsection