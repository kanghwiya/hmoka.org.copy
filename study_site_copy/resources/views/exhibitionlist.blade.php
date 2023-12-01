@extends('layout.layout')


@section('title', 'exhibitionlist')

@section('main')

<div class="exhibition-category">
    <div class="present" onclick="presentexhibition(); return false" name="present">
        현재 전시
    </div>
    <div class="past">
        과거전시
    </div>
    <div class="future">
        예정 전시
    </div>
</div>
<div id="exhibitionCategory">
    <h3 id="h3"></h3>
        <div class="exhibition-list">
            <input type="hidden" value="{{$data}}" id="exhibitionShow">
            @forelse ($data as $item)
                {{-- <a href="{{ route('board.show', ['board' => $item->board_id])}}">
                    <div style="background-image: url({{$item->image}}); width:300px; height:300px; background-size:cover;"></div>
                    <span>{{$item->exhibition_start}} ~ {{$item->exhibition_end}}</span>
                </a>
                <a href="{{ route('board.show', ['board' => $item->board_id])}}">
                    <span>{{$item->title}}</span>
                    <span>{{$item->content}}</span>
                </a> --}}
            @empty
                
            @endforelse
        </div>
</div>


@endsection