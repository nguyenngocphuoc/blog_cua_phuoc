<?php

Route::get('/', 'FrontController@index')->name('home');
// Route::get('/page/category/{slug}', 'FrontController@pageCategory')->name('page.category');
Route::get('/page/news/{slug}', 'FrontController@pageNews')->name('page.news');
Route::get('/page/rework/{slug}', 'FrontController@pageReworks')->name('page.reworks');
Route::get('/page', 'FrontController@pageArchive')->name('page');
Route::get('/page/search', 'ReWorkController@postSearch')->name('page.search');
Route::get('/page/category/{slug}', 'FrontController@pageArchiveCategory')->name('page.archive_category');


// AUTHENTICATION
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate')->name('login');
Route::post('/logout', 'LoginController@logout')->name('logout');
Route::get('/reset-password', 'ResetPasswordController@ressetForm')->name('reset.password');
Route::post('/reset-password', 'ResetPasswordController@checkExist')->name('reset.password');



Route::get('/contact', 'InfoSubmitController@register')->name('contact');
// Route::post('/register', 'RegisterController@registration')->name('register');
Route::post('/contact', 'InfoSubmitController@registration')->name('contact');

// SOCIAL LOGIN
Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

// 404
Route::get('/nopermission', function(){ return back(); })->name('nopermission');

// ONLY ADMIN
Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => ['auth','roles'], 'roles' => ['admin']], function(){

    Route::resource('users','UsersController');

    Route::resource('settings','SettingController')->only(['index','store']);
    Route::get('settings/breakingnews','SettingController@breakingNews')->name('settings.breakingnews');
    Route::post('settings/breakingnews/store','SettingController@storeBreakingNews')->name('settings.breakingnews.store');

    Route::resource('advertisements','AdvertisementController')->only(['index','store']);

    Route::resource('menus','MenuController');
    Route::post('menuitems-json','MenuController@getMenuItems')->name('menuitems.json');
    Route::post('menuitemsdetails-json','MenuController@getMenuItemsDetails')->name('menuitemsdetails.json');

});

// BOTH EDITOR AND ADMIN
Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth','roles'],'roles'=>['editor','admin']], function(){

    Route::resource('group-category','GroupCategoryController');
    Route::resource('category','CategoryController');
    Route::resource('news','NewsController');
    Route::resource('reworks','ReWorkController');
    Route::resource('info-submit','InfoSubmitController');
    
});

// USER, EDITOR AND ADMIN
Route::group(['middleware'=>['auth','roles'],'roles'=>['user','editor','admin']], function(){

    Route::get('/dashboard', function(){ return view('backend.dashboard'); })->name('dashboard');

    Route::get('profile','ProfileController@profile')->name('profile');
    Route::post('profile','ProfileController@profileUpdate')->name('profile.update');
    Route::post('changepassword','ProfileController@changePassword')->name('profile.changepassword');
});
