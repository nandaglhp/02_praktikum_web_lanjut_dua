<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    Route::get('/' [PageController::class, 'index']);
    Route::get('/about' [Pagecontroller::class, 'about']);
    Route::get('/articles/{id}', [Pagecontroller::class, 'articles']);
}
