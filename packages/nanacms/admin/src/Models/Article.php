<?php

namespace Nanacms\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $fillable = [
    'title',
    'description',
    'auth',
    'img_path',
    'body',
  ];
}
