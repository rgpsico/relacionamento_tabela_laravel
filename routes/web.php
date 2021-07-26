<?php

use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\OneToManyController;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\PolymorphicsController;
use Illuminate\Support\Facades\Route;


Route::get('one-to-one', [OneToOneController::class,'oneToOne']);
Route::get('one-to-one-inverse', [OneToOneController::class,'oneToOneInverse']);
Route::get('one-to-one-insert', [OneToOneController::class,'oneToOneInsert']);


Route::get('one-to-many', [OneToManyController::class,'oneToMany']);
Route::get('many-to-one', [OneToManyController::class,'manyToOne']);
Route::get('one-to-many-two', [OneToManyController::class,'oneToManyTwo']);
Route::get('one-to-many-insert', [OneToManyController::class,'oneToManyInsert']);
Route::get('one-to-many-insert-two', [OneToManyController::class,'oneToManyInsertTwo']);


Route::get('one-to-many-through', [OneToManyController::class,'hasManyThrough']);



Route::get('many-to-many', [ManyToManyController::class,'manyToMany']);
Route::get('many-to-many-inverse', [ManyToManyController::class,'manyToManyInverse']);
Route::get('many-to-many-insert', [ManyToManyController::class,'manyToManyInsert']);


Route::get('polymorphics', [PolymorphicsController::class,'polymorphic']);

Route::get('polymorphics-insert', [PolymorphicsController::class,'polymorphicInsert']);


Route::get('/', function () {
    return view('welcome');
});
