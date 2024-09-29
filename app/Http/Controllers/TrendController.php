<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TrendController extends Controller
{

    public function show()
{
    $tweets = Tweet::with(['comments', 'likes']) // likes を追加
        ->withCount('likes') // いいね数を取得
        ->orderBy('likes_count', 'desc')->take(5)// いいね数でソート
        ->get();

    return view('tweets.trend', compact('tweets'));
}

}
