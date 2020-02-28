<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    /**
     * 複数代入する属性
     * 
     * @var array
     */
    protected $fillable = [
      'title',
      'user_id',
      'date',
      'content',
      'thumbnail_img'
    ];
}
