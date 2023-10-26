<?php

use App\Models\trainer;
use App\Models\session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profilecontroller;
use App\Http\Controllers\user\Trainercontroller;
use App\Models\User;

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

Route::get('/', function () {
    $trainer=trainer::paginate(3);
    $trainee=count(User::all());
    $sessions=count(Session::all());
    return view('welcome',compact("trainer","trainee","sessions"));
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/trainer_register', [App\Http\Controllers\Trainercontroller::class, 'index'])->name('trainer');

Route::get('/trainee_register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegisterationForm'])->name('trainee');

Route::get('/user/profile', [App\Http\Controllers\Profilecontroller::class, 'index'])->name('profile')->middleware('auth');

Route::post('/trainer_register', [App\Http\Controllers\Trainercontroller::class, 'create'])->name('trainerstore');

Route::get('/trainerprofile/{trainer}',function(trainer $trainer){
    return view('user.trainerprofile',compact('trainer'));
})->name("trainer");

Route::get('/trainercard',function(){
    if (auth()->user()){
    $trainer=trainer::Where('type_of_disapility',auth()->user()['type_of_disapility'])->get();
    }
    
    else{
        $trainer=trainer::all();
    }
    return view('user.trainercard',compact('trainer'));
});

Route::get('/userlogin',function(){
if(auth()->user()){
    return redirect("/");
}
else{
    return view('user.userlogin'); 
}});

Route::get('/payment',function(){
    return view('user.payment');
});
Route::get('/book/{date}',[App\Http\Controllers\Trainercontroller::class, 'book'])->name('book');
Route::get('/session/{session}',[App\Http\Controllers\Trainercontroller::class, 'sessiondel'])->name('sessiondel');
Route::post('/userlogin',[App\Http\Controllers\Trainercontroller::class, 'login'])->name('login');
Route::get('/mylogout',[App\Http\Controllers\Trainercontroller::class, 'logout'])->name('logout');

Route::get('/contactus',function(){
    return view('user.contactus');
});

Route::get('/aboutus',function(){
    return view('user.aboutus');
});





