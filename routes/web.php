<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\User;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/* testting routes
Route::get('/', 'HomeController@home');
Route::get('/sign', 'HomeController@sign');
Route::get('/StartupDash', 'HomeController@StartupDash');
Route::get('/StartupProfile', 'HomeController@StartupProfile');
Route::get('/create', 'HomeController@create');
*/

Route::post('/search', function () {
   $q = Input::get('q') ;
    dd($q);
});
Route::get('/','PagesController@index');
Route::get('/StartupSettings', 'PagesController@StartupSettings');
Route::get('/Membership', 'PagesController@Membership');
Route::get('/About', 'PagesController@About');
Route::get('/projects', 'PostsController@projects');
Route::get('/Setup', function () {
    return view('pages.SetupAccount');
});
Route::get('/Setup/2', function () {
    return view('pages.SetupAccount2');
});


//Testing routes for investor register
//Route::get('/investorRegister', 'PagesController@investorRegister');
//Route::view('/investorRegister', 'investorRegister');

Auth::routes();
// auth for admin, startup, investor dashboard
Route::group(['middleware' => ['auth']], function(){

    Route::group(['middleware' => ['admin']], function(){
        Route::get('/admin', 'PagesController@admin')->name('admin');
    });
    Route::group(['middleware' => ['startup']], function(){
        Route::get('/startup', 'PagesController@startup')->name('startup');
    });
    Route::group(['middleware' => ['investor']], function(){
        Route::get('/investor', 'PagesController@investor')->name('investor');
    });

});
// Route for CRUD
Route::resource('role', 'RoleController');
Route::resource('posts', 'PostsController');
Route::resource('detail', 'DetailsController');

// Route for startup dashboard
Route::get('/dashboard', 'DashboardController@index');

//Route to Investor Dashboard
Route::get('/InvestorDashboard', function () {
    return view('InvestorDashboard');
});

//Route to Investor Profile
Route::get('/InvestorProfile', 'PagesController@InvestorProfile');

