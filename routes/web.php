<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Contact\ShowContacts;
use App\Livewire\Contact\CreateContact;
use App\Livewire\Contact\ShowContact;
use App\Livewire\Contact\EditContact;
use App\Livewire\User\CreateUser;
use App\Livewire\User\LoginUser;
use App\Http\Middleware\EnsureUserIsAuthenticated;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', ShowContacts::class)->name('index');
Route::get('/register', CreateUser::class)->name('account.create');
Route::get('/login', LoginUser::class)->name('account.login');
Route::middleware([EnsureUserIsAuthenticated::class])->group(function () {
    Route::get('/contacts/{contact}', ShowContact::class)->name('contact');
    Route::get('/contact/create', CreateContact::class)->name('contact.create');
    Route::get('/contacts/{contact}/edit', EditContact::class)->name('contact.edit');
});
Route::fallback(function() {
    return view('errors.404');
});