<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TrendController extends Controller
{  
            public function show(Trend $trend)
    {   
        // コメントを取得し、いいね数でソート
        $comments = $trend->comments()
            ->withCount('likes') // likesの数を取得
            ->orderBy('likes_count', 'desc') // いいね数でソート
            ->get();

        return view('trends.show', compact('trend', 'comments'));
    }



}
