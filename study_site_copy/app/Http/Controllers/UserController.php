<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    //로그인 페이지 불러오기
    public function loginget() {
        return view('login');
    }

    // 로그인
    public function loginpost(Request $request) {
        $result = User::where('email', $request->email)->first();

        if(!$result || !(Hash::check($request->password, $result->password))) {
            $errorMsg = '아이디와 비밀번호를 다시 확인해 주세요.';
            return redirect()->route('login')->withErrors($errorMsg);
        }
        
    // 유저 권한 확인
    Auth::login($result);

    if(Auth::check()) {
        session($result->only('email'));
    } else {
        $errorMsg = "인증 에러가 발생했습니다.
        010-1111-1111로 문의 바랍니다.";
        return view('login')->withErrors($errorMsg);
    }
        return redirect()->route('main');
    }

    // 회원가입 페이지 불러오기
    public function registrationget() {
        return view('regist');
    }

    // 
    public function registrationpost(Request $request) {
        $data = $request->only('name', 'email', 'password');

        // 비밀번호 암호화
        $data['password'] = Hash::make($data['password']);

        // 받아온 회원 정보를 DB에 저장 (엘로퀀트)
        $result = User::create($data);
        
        return redirect()->route('main');
    }

    // 로그아웃
    public function logoutget() {
        Session::flush(); //세션 파기
        Auth::logout(); //로그아웃

        return redirect()->route('main');
    }
}
