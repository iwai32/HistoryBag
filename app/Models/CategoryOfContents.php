<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryOfContents extends Model
{
    /**
     * 複数代入する属性
     * 
     * @var array
     */
    protected $fillable = [
      'content_id',
      'category_id',
      'record_id'
    ];
}
