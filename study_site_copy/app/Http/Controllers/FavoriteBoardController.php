<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\FavoriteBoard;

class FavoriteBoardController extends Controller
{

    //보드 즐겨찾기

    public function userfavoritepost(Request $request) {
        Log::debug("userfavoritepost Start", $request->all());
        // if(Auth::check()) {
            $board_id = $request->board_id;
            $user_id = $request->user_id;
            
            //DB 쿼리 결과는 성공시 true를 반환한다.
            $result = DB::table('favorite_boards')->insert(
                ['board_id' => $board_id, 'user_id' => $user_id]
            );
            Log::debug("userfavoritepost end", $result->all());
            return response()->json(array('msg'=> $result), 200); //이게 뭐지..
        // } else {
        //     return redirect()->route('login');
        // }
    }
    
    public function favoriteget() {
        
        $result = DB::table('favorite_boards')
            ->join('boards', 'favorite_boards.board_id', '=', 'boards.user_id')
            ->select('boards.image', 'boards.title', 'boards.exhibition_start', 'boards.exhibition_end')
            ->where('favorite_boards.user_id','=', 1)
            ->get();

        return view('mypage');
        // $result = FavoriteBoard::where('user_id', $id)->get();

        
    }

}
