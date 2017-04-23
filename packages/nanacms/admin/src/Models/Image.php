<?php
namespace Nanacms\Admin\Models;

use Illuminate\Database\Eloquent\Model;
class Image extends Model
{
    protected $table="images";
    protected $fillable=['path'];
    public $timestamps=false;//不希望model自动维护create_at public_at字段
}
