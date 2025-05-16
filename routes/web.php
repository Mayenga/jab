<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faqs', function () {
    return view('pages/faqs');
});

Route::get('/contacts', function () {
    return view('pages/contacts');
});

Route::get('/historical-background', function () {
    return view('pages/historical-background');
});

Route::get('/vision-mission-mandate', function () {
    return view('pages/visionmissionMandate');
});

Route::get('/roles-functions-and-power-of-the-board', function () {
    return view('pages/rolesFunctionsPowerOfTheBoard');
});

Route::get('/core-values', function () {
    return view('pages/coreValues');
});

Route::get('/strategic-plan', function () {
    return view('pages/strategicPlan');
});

Route::get('/board-members', function () {
    return view('pages/boardMembers');
});

Route::get('/news', function () {
    return view('pages/news');
});

Route::get('/events', function () {
    return view('pages/events');
});

Route::get('/research', function () {
    return view('pages/research');
});

Route::get('/statistics', function () {
    return view('pages/statistics');
});

Route::get('/gallery', function () {
    return view('pages/gallery');
});

Route::get('/reports', function () {
    return view('pages/reports');
});

Route::get('/laws-acts', function () {
    return view('pages/lawsActs');
});

Route::get('/regulations', function () {
    return view('pages/regulations');
});

Route::get('/code-of-ethics', function () {
    return view('pages/codeOfEthics');
});

Route::get('/policies', function () {
    return view('pages/policies');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
