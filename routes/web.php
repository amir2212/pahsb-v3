<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PahsbContactController;

Route::get('/', fn () => view('pahsb.home'))->name('pahsb.home');

Route::get('/about/{section}', function (string $section) {
    abort_unless(in_array($section, ['overview','board-of-directors','vision-mission','puncak-alam-township'], true), 404);
    if ($section === 'overview') { return view('pahsb.overview'); }
    if ($section === 'board-of-directors') { return view('pahsb.board'); }
    if ($section === 'vision-mission') { return view('pahsb.vision-mission'); }
    if ($section === 'puncak-alam-township') { return view('pahsb.township'); }
    return view('pahsb.page', ['section' => $section]);
})->name('pahsb.about');

Route::get('/projects', fn () => view('pahsb.projects-v4'))->name('pahsb.projects');
Route::get('/news', fn () => view('pahsb.news-v5'))->name('pahsb.news');
Route::get('/contact/enquiry', [PahsbContactController::class, 'enquiry'])->name('pahsb.enquiry');
Route::get('/contact/registration', [PahsbContactController::class, 'registration'])->name('pahsb.registration');

Route::post('/contact/enquiry', [PahsbContactController::class, 'storeEnquiry'])->middleware('throttle:5,1')->name('pahsb.enquiry.store');

Route::post('/contact/registration', [PahsbContactController::class, 'storeRegistration'])->middleware('throttle:5,1')->name('pahsb.registration.store');
