<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/a', function () {
    $crawler = Goutte::request('GET', 'https://www.muabannhadat.vn/tin-tuc/');
    $crawler->filter('span._title')->each(function ($node) {
        echo $node->text() . "</br>";
    });
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/', 'ViewController@index');

Route::get('/ct', function () {
    return view('project_detail');
});

// Route::post('/login',[
//     'as' => 'login',
//     'uses' => 'PageController@postLogin'

// ]);
// Route::get('/signin', [
//     'as' => 'signin',
//     'uses' => 'PageController@getSignin'
// ]);
// Route::post('/signin',[
//     'as' => 'signin',
//     'uses' => 'PageController@postSignin'

// ]);
// Route::get('/logout',[
//     'as' => 'logout',
//     'uses' => 'PageController@postLogout'
// ]);

Route::get('/project', function () {
    return view('project');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact-us', 'ContactController@index');


Route::get('/post', function () {
    return view('post');
});
Route::get('mua-ban-cho-thue/{type}','ViewController@getDetail');
Route::get('{slug}.html','ViewController@getDetail');
Route::get('chi-tiet-bat-dong-san/{id}','ViewController@DetailBDS');
Route::get('/search',[
    'as' => 'search',
    'uses' => 'ViewController@search'
]);
// Tin Tức
Route::get('news','NewController@index');
Route::get('detail-new/{id}','NewController@detail');
// End Tin Tức
Route::resource('contactus', 'ContactController');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', [
//     'as' => 'login',
//     'uses' => 'HomeController@index'
// ])->name('home');
Route::get('/profile', function () {
    return view('profile');
});
Route::get('getbuytype', 'Admin\AjaxController@getbuytype');
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return view('admin.dasboard');
        });
        // Vai trò người dùng
        Route::get('/role-register', [
            'as' => 'role-register',
            'uses' => 'Admin\RoleController@index'
        ]);
        Route::get('/role-register/{id}', 'Admin\RoleController@edit');
        Route::put('/role-register/update/{id}', 'Admin\RoleController@update');
        Route::delete('/role-register/delete/{id}', 'Admin\RoleController@destroy');
        Route::post('/create-user', 'Admin\CreateUserController@create');
        // danh mục
        Route::resource('category', 'Admin\CategoryController');
        // Loại BDS
        Route::resource('typeBDS', 'Admin\BDSTypeController');
        // Thêm BDS
        Route::resource('buy', 'Admin\BuyController');
        Route::post('updatebds/{id}', 'Admin\BuyController@update');
        Route::get('aboutus','AboutController@index1');
        Route::get('aboutus/create','AboutController@create');
        Route::post('aboutus/store','AboutController@store');

    });
});




     //Route::get('/category','Admin\CategoryController@index');
    // Route::post('/category/create','Admin\CategoryController@store');
    // Route::get('/category/{id}','Admin\CategoryController@edit');
    // Route::put('/category/update/{id}','Admin\CategoryController@update');
