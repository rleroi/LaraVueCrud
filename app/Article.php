<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['subject', 'author', 'category_id', 'body'];

    public function category() {
    	return $this->belongsTo('App\Category');
    }
}
