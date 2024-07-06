<?php

use App\Livewire\Home;
use App\Livewire\ManageTool;
use App\Livewire\SubmitNewTool;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/submit-new-tool', SubmitNewTool::class)->name('submit-new-tool');

Route::middleware('auth')->group(function () {
    Route::get('/manage-tool/{tool}', ManageTool::class)->name('manage-tool');
});
