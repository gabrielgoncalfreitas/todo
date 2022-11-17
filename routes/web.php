<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::prefix('todos')->group(function () {
    Route::get('/', [TodosController::class, 'index'])->name('todos.index');
    Route::get('/view/{id}', [TodosController::class, 'view'])->name('todos.view');
    Route::get('/complete/{id}/{returnToView}', [TodosController::class, 'complete'])->name('todos.complete');
    Route::get('/incomplete/{id}/{returnToView}', [TodosController::class, 'incomplete'])->name('todos.incomplete');
    Route::get('/delete/{id}', [TodosController::class, 'delete'])->name('todos.delete');
    Route::get('/create', [TodosController::class, 'create'])->name('todos.create');
    Route::post('/create', [TodosController::class, 'store'])->name('todos.store');
    Route::get('/edit/{id}', [TodosController::class, 'edit'])->name('todos.edit');
    Route::post('/edit/{id}', [TodosController::class, 'update'])->name('todos.update');
});
