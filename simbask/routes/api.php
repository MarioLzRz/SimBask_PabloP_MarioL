<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CoachController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RefereeController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;

Route::apiResource('coaches', CoachController::class);
Route::apiResource('games', GameController::class);
Route::apiResource('leagues', LeagueController::class);
Route::apiResource('players', PlayerController::class);
Route::apiResource('referees', RefereeController::class);
Route::apiResource('stadiums', StadiumController::class);
Route::apiResource('teams', TeamController::class);
Route::apiResource('users', UserController::class);




