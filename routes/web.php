<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\InviteController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/invite', [InviteController::class, 'showInviteForm']);

Route::get('/verify-invite', [InviteController::class, 'showInviteForm'])->name('invite.form');
Route::post('/verify-invite', [InviteController::class, 'verifyInviteCode']);

Route::post('/select-gift/{inviteCode}', [InviteController::class, 'selectGift']);
Route::get('/thank-you', function () {
    return Inertia::render('Invite/ThankYou');
})->name('thank-you');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
