<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    protected $table = 'article';
    protected $primaryKey = 'id';

    protected $fillable = [
        'categories_id', 'title', 'slug', 'short_description', 'content', 'image', 'thumbnail'
    ];

    protected $hidden = [

    ];
}
