<?php

namespace Nanacms\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = [
    'title',
    'description',
    'link',
    'img_path',
  ];
}
