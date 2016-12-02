<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

Class AdminController extends BaseController
{
	function __construct()
	{

	}

	function getIndex()
	{
		return view('backend.dashboard');
	}
}