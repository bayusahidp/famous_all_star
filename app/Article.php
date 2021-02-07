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
        'id_categories', 'title', 'slug', 'short_description', 'content', 'image'
    ];

    protected $hidden = [

    ];
}
