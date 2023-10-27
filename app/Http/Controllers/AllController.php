<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AllController extends Controller
{
    public function login() {
        return view('login');
    }

    public function login_on(Request $post) {

        $sorgu=['user_name'=>'bail|required',
                'password'=>'bail|required'
        ];
        $mesaj=['user_name.required'=>'username daxil etmediniz',
                'password.required'=>'parol daxil etmediniz'
        ];
        $post->validate($sorgu,$mesaj);

        if(!Auth::attempt(['user_name'=>$post->user_name, 'password'=>$post->password])){
            return redirect()->route('login')->with('message','Daxil etdiyiniz Username ve ya Parol sehvdir, Yeniden cehd edin');
        }
    }

    public function index_on() {
        return view('index');
    }

    public function terifler() {
        return view('terifler');
        
    }












}
