<?php

use App\Http\Livewire\Features\Auth\Pages\LoginPage;
use App\Http\Livewire\Features\Home\DashboardPage;
use App\Http\Livewire\Features\Properties\Pages\AddPropertyForm;
use App\Http\Livewire\Features\Properties\Pages\PropertiesList;
use App\Http\Livewire\Features\Properties\Pages\PropertyDetails;
use Illuminate\Support\Facades\Route;

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

Route::get('/', LoginPage::class)->name('login');
Route::get('/login', LoginPage::class)->name('login');
Route::get('/home', DashboardPage::class)->name('home');


Route::group(['prefix'=>'properties',], function (){
    Route::get('/list', PropertiesList::class)->name('properties-list');
    Route::get('/details', PropertyDetails::class)->name('property-detail');
    Route::get('/form', AddPropertyForm::class)->name('add-property-form');

});
