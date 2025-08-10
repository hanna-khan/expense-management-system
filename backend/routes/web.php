<?php

use App\Http\Controllers\ExpenseController;
use App\Models\Expense;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/expenses/list', [ExpenseController::class, 'getAllExpenses']);


// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
