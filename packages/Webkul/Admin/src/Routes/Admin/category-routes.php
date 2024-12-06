<?php

use Illuminate\Support\Facades\Route;
use Webkul\Admin\Http\Controllers\Task\TaskController;

Route::controller(\Webkul\Category\Http\Controllers\CategoryController::class)->prefix('category')->group(function () {
    Route::get('', 'index')->name('admin.category.index');
});
