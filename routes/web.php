<?php

use App\Http\Controllers\BasicInfoController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\SaveStudentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeamModelController;
use App\Http\Controllers\TypePaymentController;
use App\Http\Controllers\TypeRoomController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', [FrontendController::class, 'index'])->name('frontend.index');
// frontend controller
Route::get('/rom-detail/{id}', [FrontendController::class, 'roomDetail'])->name('frontend.room_detail');
Route::get('about-us/', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('contact-us/', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('our-partners/', [FrontendController::class, 'partners'])->name('frontend.partners');
Route::get('visit-our-rooms/', [FrontendController::class, 'room_page'])->name('frontend.rooms');
Route::get('changeRoomState/{room}',[RoomsController::class, 'change_room_state'])->name('change_room_state');
Route::get('changeComplainState/{complain}',[ComplainController::class, 'change_complain_state'])->name('change_complain_state');
// backend
Route::get('login/', [LoginController::class, 'loginView'])->name('login');
Route::post('/authentification-utilisateur', [LoginController::class, 'defLogUser'])->name('def_log_user');
Route::resource('students', StudentController::class);

Route::middleware(['auth', 'CheckStatus'])->group(function (){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('list-students', [SaveStudentController::class, 'list_students'])->name('list_students');
    Route::get('detail-of-my-room/{id}', [SaveStudentController::class, 'detail_myRoom'])->name('detail_myRoom');

    Route::post('save-student/{id}', [SaveStudentController::class, 'save_student'])->name('save_student');
    Route::get('change_contact_state/{id}',[ContactController::class, 'change_contact_state'])->name('change_contact_state');
    Route::get('/edit_logo/{id}', [BasicInfoController::class, 'editLogo'])->name('logo.edit');
    Route::put('/update_photo/{id}', [BasicInfoController::class, 'updateLogo'])->name('logo.update');
    Route::post('save-logo/',[BasicInfoController::class, 'save_logo'])->name('save_logo');
    Route::get('user/My-Profile',[UserController::class, 'profilUser'])->name('myProfile');
    Route::get('changeState/{user}',[UserController::class, 'change_state'])->name('state.update');
    Route::put('/update_profile/{id}/', [UserController::class, 'updateProfile'])->name('update.profile');
     //  UpdateUserPassword
     Route::get('/update-my-password/{id}',[UserController::class, 'GetUserConnectedPassword'])->name('update.password');
     Route::put('/UpdateUserPassword/{id}/', [UserController::class, 'UpdateUserPassword'])->name('updatePasswordConnectedUser');
    // Room available
    Route::get('list-rooms-available',[RoomsController::class, 'availableRoom'])->name('availableRoom');
    // Room booked
    Route::get('list-rooms-already-booked',[RoomsController::class, 'bookedRoom'])->name('bookedRoom');
    Route::post('/update_password/{id}/', [UserController::class, 'update_password'])->name('user.update_password');
    
    // Resources 
    Route::resource('rates', RateController::class);
    Route::resource('teams', TeamModelController::class);
    Route::resource('partners', PartnersController::class);
    Route::resource('universities', UniversityController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('complains', ComplainController::class);
    Route::resource('basic_information', BasicInfoController::class);
    Route::resource('type_payment', TypePaymentController::class);
    Route::resource('type-room', TypeRoomController::class);
    Route::resource('rooms', RoomsController::class);
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});


