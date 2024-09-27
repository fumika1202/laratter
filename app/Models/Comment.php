<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

  protected $fillable = ['comment', 'tweet_id', 'user_id'];

  // 🔽 多対1の関係
  public function tweet()
  {
    return $this->belongsTo(Tweet::class);
  }

  // 🔽 多対1の関係
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  //自分が追加した分
      public function likes()
    {
        return $this->belongsToMany(User::class, 'comment_user'); // 中間テーブルの指定
    }
}
