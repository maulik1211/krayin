<?php

Route::group([
        'prefix'        => 'admin/category',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'Webkul\Category\Http\Controllers\CategoryController@index')->name('admin.category.index');

});

Route::controller(\Webkul\Category\Http\Controllers\LeadController::class)->prefix('leads')->group(function () {
    Route::get('', 'Webkul\Category\Http\Controllers\LeadController@index')->name('admin.cleads.index');
});

