<?php

use App\Http\Livewire\{
    ShowReviews,
    ShowBranches,
    ShowGallery,
    ShowEnterprise,
    ShowMessages,
};
use App\Http\controllers\{PageController};
use Illuminate\Support\Facades\Route;
use App\Models\Branch;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/reviews', ShowReviews::class)->name('reviews');
    Route::get('/negocios/{type}', ShowBranches::class)->name('branches.edit');
    Route::get('/negocios', function (){
        return view('branches',['branches' => Branch::get()]);
    })->name('branches');
    Route::view('/galerias', 'galleries')->name('galleries');
    Route::view('/clientes', 'clients')->name('clients');
    Route::get('/vimalca', ShowEnterprise::class)->name('vimalca');
    Route::get('/mensajes', ShowMessages::class)->name('messages');
    Route::get('dashboard',function(){
        return redirect()->route('reviews');
    });
});

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/nosotros', [PageController::class, 'about'])->name('about');
Route::get('/empresas/{branch}', [PageController::class, 'branch'])->name('branch');
Route::view('/contactanos', 'page.contact')->name('contact');

require __DIR__.'/auth.php';
