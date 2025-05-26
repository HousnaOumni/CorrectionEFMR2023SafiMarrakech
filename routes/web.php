<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EleveController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

##########   Q1   #################
// php artisan make:Model Eleve -m
// php artisan make:Model Club -m
// php artisan make:Model Activité -m

##########   Q4   #################
// php artisan make:seeder EleveSeeder
// php artisan make:seeder ClubSeeder
// php artisan make:seeder ActiviteSeeder

##########   Q5   #################
// php artisan migrate
// php artisan db:seed
// php artisan db:seed --class=ClubSeeder
// php artisan db:seed --class=EleveSeeder
// php artisan db:seed --class=ActiviteSeeder

##########   Q6   #################
// php artisan make:controller EleveController -r // --resource
// php artisan make:controller ClubController -r // --resource
// php artisan make:controller ActiviteController -r // --resource
Route::resource('eleves',EleveController::class);

/*Route::resources(['eleves' => EleveController::class,
                  'clubs' => EleveController::class,
                  'activites' => EleveController::class
]); */




