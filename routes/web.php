<?php

use App\Models\Department;
use App\Models\Division;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\SecondsMiddleware;
use App\Http\Middleware\ThirdMiddleware;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/department/{divisionId}', function($divisionId) {
    $division = Division::find($divisionId);
    if(!$division) abort(404);
    $departments = $division->departments;
    return view('department',['division' => $division, 'departments' => $departments]);
})->name('department.list');

Route::get('/team/{departmentId}', function($departmentId) {
    $department = Department::find($departmentId);
    if(!$department) abort(404);
    $teams = $department->teams;
    return view('team',['department' => $department, 'teams' => $teams]);
})->name('team.list');

Route::get('/user/{teamId}', function($teamId) {
    $team = Team::find($teamId);
    if(!$team) abort(404);
    $users = $team->users;
    return view('user',['team' => $team, 'users' => $users]);
})->name('user.list');

Route::get('/posts/userId', function($userId) {
    $user = User::find($userId);

    return view('posts', ['posts' => $user->posts()]);
})->name('posts.list');

Route::middleware([
    SecondsMiddleware::class
])->group(function() {
    Route::get('/page',[PageController::class, 'index'])
        ->name('page');
    Route::get('/blog',[BlogController::class, 'index'])
        ->middleware(ThirdMiddleware::class)
        ->name('blog');
});
