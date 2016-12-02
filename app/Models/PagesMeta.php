<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class PagesMeta extends Model
{
    protected $table = 'page_metas';

    protected $fillable = ['meta', 'value', 'page_id'];
    
    public function site_page() 
    {
        return $this->belongsTo('App\Models\SitePages');
    }
}
