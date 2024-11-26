<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/leads', [LeadsController::class, 'showLeadsPage']);
Route::get('/leads/export/pdf', [LeadsController::class, 'exportPdf'])->name('leads.export.pdf');
