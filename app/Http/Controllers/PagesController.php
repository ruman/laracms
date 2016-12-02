<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\SitePages as sitepages;
use App\Models\PagesMeta as pagemeta;


class PagesController extends BaseController {

	protected $pages;
	protected $pagemeta;

	public function __construct(sitepages $pages, pagemeta $pagemeta){
		$this->pages = $pages;
		$this->pagemeta = $pagemeta;
	}

	public function getIndex($page)
	{
		$page = $this->pages->where('slug', '=', $page)->firstOrFail();
		// var_dump($page);
		return view('frontend.common', compact('page'));
	}

	public function create(){
		return view('backend.pages.create');
	}

}