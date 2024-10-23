<?php

use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\SocialNetworkController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\EducationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource('/students',StudentController::class )->middleware('auth:sanctum');
Route::resource('/experiences', ExperienceController::class)->middleware('auth:sanctum');
Route::resource('/projects',ProjectController::class )->middleware('auth:sanctum');
Route::resource('/education',EducationController::class )->middleware('auth:sanctum');
Route::resource('/skills',SkillController::class)->middleware('auth:sanctum');
Route::resource('/social_networks',SocialNetworkController::class )->middleware('auth:sanctum');
Route::resource('/languages',LanguageController::class )->middleware('auth:sanctum');
