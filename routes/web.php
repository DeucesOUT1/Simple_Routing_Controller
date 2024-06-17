<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/about_me', [AboutMeController::class, 'aboutMeFunc'])->name('about.me');
Route::get('/skills', [SkillsController::class, 'skillsFunc'])->name('skills');
Route::get('/hobbies', [HobbiesController::class, 'hobbiesFunc'])->name('hobbies');
