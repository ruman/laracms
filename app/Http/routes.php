<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// ===============================================
// Login =================================
// ===============================================
Route::get('login', function () {
    return redirect('/auth/login');
});
// Route::post('login', function () {
//     return redirect('/auth/login');
// });
Route::get('logout', function () {
    return redirect('/auth/logout');
});
Route::get('register', function () {
    return redirect('/auth/register');
});
Route::get('reset', function () {
    return redirect('/password/email');
});

Route::group(array('prefix'=> 'auth'), function(){

    Route::get('login', array('uses' => 'Auth\AuthController@getLogin'));
    Route::post('login', array('uses' => 'Auth\AuthController@postLogin'));

    Route::get('logout', array('uses' => 'Auth\AuthController@getLogout'));

    Route::get('register', array('uses' => 'Auth\AuthController@getregister'));
    Route::post('register', array('uses' => 'Auth\AuthController@postregister'));

});

// ===============================================
// ADMIN SECTION =================================
// ===============================================
Route::group(['middleware' => ['auth']], function () {
    Route::group(array('prefix' => 'admin', 'as' => 'admin::'), function()
    {
        // main page for the admin section (app/views/admin/dashboard.blade.php)
        Route::get('/', [
            'as'        => 'dashboard',
            'uses'      =>  'Backend\AdminController@getIndex'
        ]);

        // Route::controller('pages', 'Backend\SitePagesController');

        // subpage for the posts found at /admin/posts (app/views/admin/posts.blade.php)
        // Route::resource('backend/pages', 'Backend\PagesController');

        Route::get('pages', [
            'as'        => 'pages',
            'uses'      =>  'Backend\SitePagesController@getIndex'
        ]);

        // Route::controller('pages', 'Backend\SitePagesController',[
        //     '/'         => 'pages.getIndex',
        //     'create'    => 'pages.create',
        //     'edit'      => 'pages.edit',
        //     'update'    => 'pages.update',
        //     'put'       => 'pages.put',
        //     'delete'    => 'pages.delete'
        // ]);

        // subpage to create a post found at /admin/posts/create (app/views/admin/posts-create.blade.php)
        Route::get('pages/create', [
            'as'        => 'createpage',
            'uses'      =>  'Backend\SitePagesController@create'
        ]);

        // process the create page form
        Route::post('pages/create', ['uses' =>  'Backend\SitePagesController@store']);


        Route::get('pages/edit/{id}', [
            'as'        => 'editpage',
            'uses'      =>  'Backend\SitePagesController@edit'
        ])->where('id', '[0-9]+');

        // process the page edit
        Route::put('pages/edit/{id}', ['uses' =>  'Backend\SitePagesController@update']);
        Route::delete('pages/delete/{id}', ['uses' =>  'Backend\SitePagesController@delete']);

        // Route::put('pages/edit/{id}', function(){
        //     var_dump('href');
        // });

    });
});




Route::get('/', function () {
    return View::make('welcome');
});

// Route::get('about', function () {
//     return View::make('pages.common');
// });
// Route::group(array('prefix' => 'admin', 'as' => 'admin::'), function()
// {

// });
Route::get('/{page?}', 'PagesController@getIndex');
Route::get('/{page?}/{id}', 'PagesController@childpage');



// ===============================================
// 404 ===========================================
// ===============================================

// App::missing(function($exception)
// {

//     // shows an error page (app/views/error.blade.php)
//     // returns a page not found error
//     return Response::view('errors.404', array(), 404);
// });

Route::controller('pages', 'PagesController');
