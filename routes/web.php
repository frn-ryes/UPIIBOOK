<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\QuestionController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Mail\InteresadoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/dashboard', [DashboardController::class,'home'])->middleware(['auth'])->middleware('verified') -> name('dashboard'); 
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

/* RUTAS PARA ITEMS */
Route::get('items', [ItemController::class,'index'])->middleware(['auth'])->middleware('verified') -> name('items.index'); 

//Route::get('items', [ItemController::class,'search'])->middleware(['auth'])->middleware('verified') -> name('items.search'); 
/*
Route::get('items/create', [ItemController::class,'create'])->middleware(['auth']) -> name('items.create');

Route::post('items', [ItemController::class,'store'])->middleware(['auth']) -> name('items.store');
*/
Route::get('items/{item}', [ItemController::class,'show'])->middleware(['auth']) -> middleware('verified') -> name('items.show');
/*
Route::get('items/{item}/edit', [ItemController::class,'edit'])->middleware(['auth']) -> name('items.edit');

Route::put('items/{item}', [ItemController::class,'update'])->middleware(['auth']) -> name('items.update');
*/
Route::get('items/{item}/report', [ItemController::class,'report'])->middleware(['auth']) -> middleware('verified') -> name('items.report');


/* RUTAS PARA EVENTOS */
Route::get('events', [EventController::class,'index'])->middleware(['auth'])->middleware('verified') -> name('events.index'); 

/* RUTAS PARA CURSOS */
Route::get('courses', [CourseController::class,'index'])->middleware(['auth'])->middleware('verified') -> name('courses.index'); 

/* RUTAS PARA PREGUNTAS */
Route::get('questions', [QuestionController::class,'index'])->middleware(['auth'])->middleware('verified') -> name('questions.index'); 

/* RUTAS PARA MIS POSTS */
Route::get('myposts', [MyPostController::class,'index'])->middleware(['auth']) -> middleware('verified') -> name('myposts.index');

Route::get('myposts/create', [MyPostController::class,'create'])->middleware(['auth']) -> middleware('verified') -> name('myposts.create');

Route::post('myposts', [MyPostController::class,'store'])->middleware(['auth']) -> middleware('verified')  -> name('myposts.store');

Route::get('myposts/{item}', [MyPostController::class,'show'])->middleware(['auth']) -> middleware('verified') -> name('myposts.show');

Route::get('myposts/{item}/edit', [MyPostController::class,'edit'])->middleware(['auth']) -> middleware('verified') -> name('myposts.edit');

Route::put('myposts/{item}', [MyPostController::class,'update'])->middleware(['auth']) -> middleware('verified') -> name('myposts.update');

Route::get('items/{item}/interesado', [ItemController::class,'interesado'])->middleware(['auth']) -> middleware('verified') -> name('items.contacto1');

/*
// RUTA PARA MANDAR EMAILS;
Route::get('items/{item}/interesado', function () {
    $correo = new InteresadoMailable;
    $destinatario = $item;
    //Mail::to($destinatario)->send($correo);

    return $destinatario;
     //Mail::to($request->user())->send(new MailableClass);
})->middleware('auth')->name('items.contacto');
*/
require __DIR__.'/auth.php';
