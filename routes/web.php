<?php

use App\Http\Controllers\Chat\RoomController;
use App\Http\Controllers\InterfaceController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;


Route::controller(InterfaceController::class)->group(function () {
    Route::get('/', 'checkUrl');
    Route::post('/', 'checkUrl');
    Route::get('/ticket={last_activity}/{id}', 'index');
});

Route::controller(RoomController::class)->group(function () {
    Route::post('/check_ticket', 'checkTicket');
});

