<?php

use App\Http\Controllers\Api\AnnouncementController;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\BranchController;
use App\Http\Controllers\Api\ClassRoomController;
use App\Http\Controllers\Api\LessonContent\LessonContentController;
use App\Http\Controllers\Api\Lessons\LessonController;
use App\Http\Controllers\Api\Lessons\LessonAnnouncementController;
use App\Http\Controllers\Api\Users\StaffController;
use App\Http\Controllers\Api\Users\StudentController;
use App\Http\Controllers\Api\Users\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logOut']);

    Route::resource('/class-rooms', ClassRoomController::class);
    Route::resource('/branches', BranchController::class);
    Route::resource('/announcements', AnnouncementController::class);

    Route::resource('/staffs', StaffController::class);
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/stdeunts', StudentController::class);

    Route::resource('/lessons', LessonController::class);
    Route::resource('/lesson-announcements', LessonAnnouncementController::class);

    Route::resource('/lesson-contents', LessonContentController::class);


    Route::get('/user-lessons',[LessonController::class,'LessonsByUserId']);
    Route::get('/branch_id',[ApiController::class,'branchId']);

    

});