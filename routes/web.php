<?php

Route::middleware(['web'])
    ->group(function () {
        Route::get('/locale/{locale}', function ($locale) {
            request()->session()->put('locale', $locale);

            return back();
        });
    });
