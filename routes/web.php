<?php

use App\Http\Livewire\Features\Auth\Pages\LoginPage;
use App\Http\Livewire\Features\Home\DashboardPage;
use App\Http\Livewire\Features\Properties\Expenses\AddExpenses;
use App\Http\Livewire\Features\Properties\Expenses\ListExpenses;
use App\Http\Livewire\Features\Properties\Pages\AddPropertyForm;
use App\Http\Livewire\Features\Properties\Pages\DevelopmentCost;
use App\Http\Livewire\Features\Properties\Pages\PropertiesList;
use App\Http\Livewire\Features\Properties\Pages\PropertyDetails;
use App\Http\Livewire\Features\Tenants\TenantDetails;
use App\Http\Livewire\Features\Tenants\TenantListPage;
use App\Http\Livewire\Features\Tenants\TenantPaymentHistoryPage;
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
    Route::get('/cost', DevelopmentCost::class)->name('properties-cost');
    Route::get('/add-cost', AddExpenses::class)->name('add-expenses-form');
    // Route::get('/form', AddPropertyForm::class)->name('add-property-form');

});
Route::group(['prefix' => 'tenant',], function () {
    Route::get('/list', TenantListPage::class)->name('tenant-list');
    Route::get('/payment-history', TenantPaymentHistoryPage::class)->name('tenant-payment-history');
    Route::get('/details', TenantDetails::class)->name('tenant-details');

});
