<?php

use App\Http\Controllers\SeedController;
use App\Http\Livewire\Features\Auth\Pages\LoginPage;
use App\Http\Livewire\Features\Home\DashboardPage;
use App\Http\Livewire\Features\Induction\PolicyPage;
use App\Http\Livewire\Features\Induction\SignOffSheetPage;
use App\Http\Livewire\Features\Induction\SoftHandBookPage;
use App\Http\Livewire\Features\PersonalDevelopment\TrainingHubPage;
use App\Http\Livewire\Features\Properties\Expenses\AddExpenses;
use App\Http\Livewire\Features\Properties\Expenses\ListExpenses;
use App\Http\Livewire\Features\Properties\Pages\AddPropertyForm;
use App\Http\Livewire\Features\Properties\Pages\DevelopmentCost;
use App\Http\Livewire\Features\Properties\Pages\PropertiesList;
use App\Http\Livewire\Features\Properties\Pages\PropertyDetails;
use App\Http\Livewire\Features\Tenants\TenantDetails;
use App\Http\Livewire\Features\Tenants\TenantListPage;
use App\Http\Livewire\Features\Tenants\TenantPaymentHistoryPage;
use App\Http\Livewire\Features\YoungPeople\DetailPage;
use App\Http\Livewire\Features\YoungPeople\ListPage;
use App\Http\Livewire\Features\YpSupport\CreateIncidentForm;
use App\Http\Livewire\Features\YpSupport\CreateInteractionForm;
use App\Http\Livewire\Features\YpSupport\CreateKeySessionForm;
use App\Http\Livewire\Features\YpSupport\IncidentDetailPage;
use App\Http\Livewire\Features\YpSupport\IncidentMgtPage;
use App\Http\Livewire\Features\YpSupport\KeySessionDetail;
use App\Http\Livewire\Features\YpSupport\KeyWorkSessionPage;
use App\Http\Livewire\Features\YpSupport\MeaningFulDetailPage;
use App\Http\Livewire\Features\YpSupport\MeaningFulPage;
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
Route::get("/seed",[SeedController::class, "seedAllData"]);
Route::get('/', LoginPage::class)->name('login');
Route::get('/', LoginPage::class)->name('login');
Route::get('/login', LoginPage::class)->name('login');
Route::get('/home', DashboardPage::class)->name('home');


Route::group(['prefix'=>'yp-support',], function (){
    Route::get('/meaningful-interaction', MeaningFulPage::class)->name('meaningful-page');
    Route::get('/meaningful-details/{slug}', MeaningFulDetailPage::class)->name('meaningful-detail-page');
    Route::get('/meaningful-form', CreateInteractionForm::class)->name('meaningful-form-page');
    Route::get('/incident-mgt', IncidentMgtPage::class)->name('incident-mgt-page');
    Route::get('/create-incident', CreateIncidentForm::class)->name('create-incident');
    Route::get('/incident-detail/{slug}', IncidentDetailPage::class)->name('incident-detail-page');
    Route::get('/key-work-session', KeyWorkSessionPage::class)->name('key-work-page');
    Route::get('/create-key-work-session', CreateKeySessionForm::class)->name('create-key-work-page');
    Route::get('/key-work-session-details', KeySessionDetail::class)->name('key-work-detail');

});
Route::group(['prefix' => 'induction',], function () {
    Route::get('/soft-book', SoftHandBookPage::class)->name('soft-book-page');
    Route::get('/sign-off', SignOffSheetPage::class)->name('sign-off-page');
    Route::get('/policies', PolicyPage::class)->name('policy-page');

});
Route::group(['prefix' => 'personal-dev',], function () {
    Route::get('/training-hub', TrainingHubPage::class)->name('training-hub-page');

});
Route::group(['prefix' => 'young-people',], function () {
    Route::get('/list', ListPage::class)->name('young-list-page');
    Route::get('/details', DetailPage::class)->name('young-detail-page');

});
