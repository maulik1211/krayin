<?php

use Illuminate\Support\Facades\Route;
use Webkul\Admin\Http\Controllers\Task\TaskController;

Route::controller(TaskController::class)->prefix('tasks')->group(function () {
    Route::get('', 'index')->name('admin.tasks.index');

    Route::get('get', 'get')->name('admin.tasks.get');

    Route::post('create', 'store')->name('admin.tasks.store');

    Route::get('edit/{id}', 'edit')->name('admin.tasks.edit');

    Route::put('edit/{id}', 'update')->name('admin.tasks.update');

    Route::get('download/{id}', 'download')->name('admin.tasks.file_download');

    Route::delete('{id}', 'destroy')->name('admin.tasks.delete');

    Route::post('mass-update', 'massUpdate')->name('admin.tasks.mass_update');

    Route::post('mass-destroy', 'massDestroy')->name('admin.tasks.mass_delete');
});
