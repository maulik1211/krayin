<?php

Route::group([
        'prefix'        => 'admin/task',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'Webkul\Task\Http\Controllers\TaskController@index')->name('admin.task.index');

});