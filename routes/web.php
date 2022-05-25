<?php

use App\Models\{Campus, Category, University};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{university}/{campus:slug}/categories/{category}', function (University $university, Campus $campus, Category $category) {
    return $category;
});
