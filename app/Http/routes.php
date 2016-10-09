<?php
Route::get('/', function () {
    return redirect('watches');
});
Route::resource('watches', 'WatchController');

