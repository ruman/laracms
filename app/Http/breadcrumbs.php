<?php

/*
|--------------------------------------------------------------------------
| Breadcrumbs Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the breadcrumbs for an application.
| It's a breeze. Simply tell Laravel the view it should respond to
| and give it the controller to call when that URI is requested.
|
| http://laravel-breadcrumbs.davejamesmiller.com/en/latest/start.html
|
*/

// DASHBOARD
Breadcrumbs::register('dashboard', function($breadcrumbs)
{
	$breadcrumbs->push(Lang::get('sidebar-nav.link_title_dashboard'), '/dashboard', ['icon' => Lang::get('sidebar-nav.link_icon_dashboard')]);
});

// DASHBOARD > Pages
Breadcrumbs::register('admin::pages', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(Lang::get('sidebar-nav.link_title_pages'), '/admin/pages', ['icon' => Lang::get('sidebar-nav.link_icon_pages')]);
});

Breadcrumbs::register('admin::createpage', function($breadcrumbs)
{
    $breadcrumbs->parent('admin::pages');
    $breadcrumbs->push(Lang::get('backend.pages.createnew'), '/pages/create', ['icon' => Lang::get('sidebar-nav.link_icon_pages')]);
});

Breadcrumbs::register('admin::editpage', function($breadcrumbs)
{
    $breadcrumbs->parent('admin::pages');
    $breadcrumbs->push(Lang::get('backend.pages.createnew'), '/pages/edit', ['icon' => Lang::get('sidebar-nav.link_icon_pages')]);
});