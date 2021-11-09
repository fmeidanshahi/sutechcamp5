<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PostController@index')->name('home');
Route::get('/uploads/{folder}/')->name('uploads');


// front
Route::prefix('posts')->group( function (){

   Route::get('/', 'PostController@index');
   Route::get('/{post:slug}', 'PostController@single')->name('posts.single');
   Route::post('/{post}/rate', 'PostController@newRate')->name('rate.newRate');
   Route::post('/{post}/support', 'PostController@supportTheAuthor')->name('post.supportTheAuthor');

});

Route::post('/subscribe', 'SubscribeController@new')->name('subs.new');
Route::post('/comment/new', 'CommentController@new')->name('comment.new');


 

//Route::prefix('posts')->group( function (){
//Route::prefix('posts')->namespace('\App\Http\Controllers')->group( function (){
//   Route::get('/', ['\App\Http\Controllers\PostController', 'index']);
//   Route::get('/', 'PostController@index'); // v5, v6
//    Route::get('/{slug}', ['\App\Http\Controllers\PostController', 'single']);


// Panel
Route::group(['prefix'=>'panel', 'namespace'=>'Admin'] ,function (){
    

    /*Route::get('/', function () {
//        $articles = DB::table('articles')->get();
//        $articles = DB::table('articles')->find(2);
//        $articles = DB::table('articles')->where('slug', $slug)->first();
        /*foreach ( range(1, 10) as $item){
            $articles = DB::table('posts')->insert([
                'title'=> "Article Title $item",
                'slug'=> "article-$item",
                'body'=>"محتوای مقاله آموزشی $item"
            ]);
        }*/
        /*$articles = DB::table('posts')->insert([
            'title'=> 'سومین آموزش',
            'slug'=> '3',
            'body'=>'محتوای سوم'
        ]);
        dd($articles);*
//        return view('panel.index');
    });*/


    Route::get('/', function (){
        return view('panel.index');
    })->name('panel.index')->middleware('AdminAuth');

    Route::get('/users', function () {
        return view('panel.index');
    });
    Route::get('/users/new', function () {
        return 'Add new User';
    });
    

    Route::prefix('posts')->group(function (){

        //        Route::get('/', 'PostController@index')->name('panel.posts')->middleware('auth');
        Route::get('/', 'PostController@index')->name('panel.posts')->middleware('AdminAuth');
        Route::get('/new', 'PostController@new')->name('panel.posts.new')->middleware('AuthorAuth');
        Route::post('/new', 'PostController@add')->middleware('AuthorAuth');
        Route::get('/{id}/edit', 'PostController@edit')->name('panel.posts.edit')->middleware('AuthorAuth');
        Route::post('/{id}/edit', 'PostController@update')->middleware('AuthorAuth');
        Route::get('/{id}/delete', 'PostController@delete')->name('panel.posts.delete')->middleware('AdminAuth');
    });

    Route::group(['prefix'=>'users', 'middleware'=>'AdminAuth'] ,function (){
        Route::get('/', 'UserController@index')->name('panel.users');
        Route::get('/new', 'UserController@new')->name('panel.users.new');
        Route::post('/new', 'UserController@add');
        Route::get('/{id}/edit', 'UserController@edit')->name('panel.users.edit');
        Route::post('/{id}/edit', 'UserController@update');
        Route::get('/{user}/delete', 'UserController@delete')->name('panel.users.delete');
    });

});




Route::get('/dump', function (){
    
    $names = ['امید', 'غزل', 'ایمان', 'نگار'];
    $mails = ['omid', 'ghazal', 'eiman', 'negar'];
    $wallets = [25000, 37000, 15000, 11000];
    $roles = [1, 2, 3, 1];
    foreach ( range(0,3) as $i ){
        DB::table('users')->insert([
            'name' => $names[$i],
            'email' => "$mails[$i]@local.com",
            'wallet' => $wallets[$i],
            'role' => $roles[$i],
            'password' => '123',
            'bio' => "بیوگرافی کوتاه $names[$i]"
        ]);
    }

    foreach ( range(1, 10) as $i ){
        DB::table('posts')->insert([
            'title' => "مقاله شماره $i",
            'slug' => "article-$i",
            'content' => "متن آزمایشی $i برای نوشته‌های $i سایت",
            'user_id' => rand(1,3),
            'category_id' => rand(1,3),
            'type' => rand(1,2),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    dd('Done!');
});

Auth::routes();

Route::get('/{id}', 'PostController@profile')->name('profile');

Route::get('/test', function (){
    //    $result = Auth::attempt(['email'=>'farnaz@gmail.com', 'password'=>'12345678']);
    
    //    dd($result);
    //    dd(Auth::check());
    
    //    dd(auth()->user());
    
    
        // @auth
        /*if (Auth::check()){
            Auth::user()->name;
        }*/
    
    //    dd(auth()->user()->subscribes()->first()->expired_at);
    });

