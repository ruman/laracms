<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class SitePages extends Model
{

    protected $table = 'site_pages';

    protected $fillable = ['title', 'slug', 'summary', 'content', 'user_id'];

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

    public function page_meta(){
        return $this->hasMany('App\Models\PagesMeta', 'page_id');
    }

}
