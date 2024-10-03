<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Support\Facades\DB; 

class TrendController extends Controller
{
    public function show()
   {
    $tweets = DB::table('tweets')
        ->select('tweets.id', 'tweets.tweet', 'tweets.user_id', 'users.name as user_name', DB::raw('COUNT(tweet_user.user_id) as likes_count'))
        ->leftJoin('tweet_user', 'tweets.id', '=', 'tweet_user.tweet_id')
        ->leftJoin('users', 'tweets.user_id', '=', 'users.id') 
        ->groupBy('tweets.id', 'tweets.tweet', 'tweets.user_id', 'users.name') 
        ->orderBy('likes_count', 'desc')
        ->limit(5)
        ->get();

    return view('tweets.trend', compact('tweets'));
    }
}

