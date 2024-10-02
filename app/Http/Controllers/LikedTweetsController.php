<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use Auth;

class LikedTweetsController extends Controller
{
    //
    public function index()
    {
        // 現在ログインしているユーザーを取得
        $user = Auth::user();
        
        // ユーザーが「いいね」したツイートを取得
        $likedTweets = $user->likes()->get();
        
        // ビューにデータを渡す
        return view('tweets.liked', compact('likedTweets'));
    }
}
