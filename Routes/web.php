<?php

Route::prefix('epanel/features')->as('epanel.')->middleware(['auth', 'check.permission:Tautan'])->group(function() 
{
    Route::resources([
        'tautan' => 'TautanController'
    ]);
});