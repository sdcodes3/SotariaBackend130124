<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\PlanandRateController;
use App\Http\Controllers\PrivacyandPolicyController;
use App\Http\Controllers\RenewalSubscriptionController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\UtilsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
Route::get('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
Route::get('/download/{id}', [UtilsController::class, 'downloadMedia'])->name('downloadMedia');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/delete-media/{id}', [UtilsController::class, 'deleteMedia'])->name('deleteMedia');
        Route::get('/', function () {
            return view('welcome');
        })->name('adminDashboard');
        Route::get('/', [Pagecontroller::class, 'index'])->name('pages.index');
        // Route::get('/customer', [Pagecontroller::class, 'customer'])->name('pages.customer');
        Route::get('/customer', [CustomerController::class, 'index'])->name('pages.customer');



        Route::get('/discount', [DiscountController::class, 'index'])->name('pages.discount');
        Route::get('/privacy', [PrivacyandPolicyController::class, 'index'])->name('pages.privacy');
        Route::get('/subadmin', [SubAdminController::class, 'index'])->name('pages.subadmin');
        Route::get('/renewal', [RenewalSubscriptionController::class, 'index'])->name('pages.renewal');
      
        /**
         * Customer Routes
         */
        Route::get('/customer', [CustomerController::class, 'index'])->name('pages.customer');
        Route::post('customer-create', [CustomerController::class, 'CustomerCreate'])->name('customer.create');
        // Route::put('/customer/{id}/customerupdate', [CustomerController::class, 'CustomerCreate'])->name('customer.update');
        Route::get('customer/edit/{id}', [CustomerController::class, 'CustomerEdit'])->name('customer.edit');
        Route::post('/customer-update', [CustomerController::class, 'CustomerUpdate'])->name('customer.update');
        Route::delete('delete-customer', [CustomerController::class, 'destoryCustomer'])->name('destoryCustomer');

        /**
         * Agent Routes
         */
        Route::get('/agentadd', [AgentController::class, 'index'])->name('pages.agent');
        Route::post('agent-create', [AgentController::class, 'AgentCreate'])->name('agent.create');
        Route::get('agent/edit/{id}', [AgentController::class, 'AgentEdit'])->name('agent.edit');
        Route::post('/agent-update', [AgentController::class, 'agentUpdate'])->name('agent.update');
        Route::delete('delete-agenr', [AgentController::class, 'destoryAgent'])->name('destoryAgent');

        /**
         * Insurance Routes
         */
        Route::get('/insurance', [InsuranceController::class, 'index'])->name('pages.insurance');
        Route::post('insurance-create', [InsuranceController::class, 'InsuranceCreate'])->name('insurance.create');
        Route::get('insurance/edit/{id}', [InsuranceController::class, 'InsuranceEdit'])->name('insurance.edit');
        Route::post('/insurance-update', [InsuranceController::class, 'InsuranceUpdate'])->name('insurance.update');
        Route::delete('delete-insurance', [InsuranceController::class, 'destoryInsurance'])->name('destoryInsurance');

        /**
         * Discount Routes
         */
        Route::post('discount-create', [DiscountController::class, 'DiscountCreate'])->name('discount.create');
        Route::delete('delete-discount', [DiscountController::class, 'destory'])->name('destoryCode');

        /**
         * Supervisor Routes
         */
        Route::get('/supervisor', [SupervisorController::class, 'index'])->name('pages.supervisor');
        Route::post('supervisor-create', [SupervisorController::class, 'SupervisorCreate'])->name('supervisor.create');
        Route::get('supervisor/edit/{id}', [SupervisorController::class, 'supervisorEdit'])->name('supervisor.edit');
        Route::post('/supervisor-update', [SupervisorController::class, 'supervisorUpdate'])->name('supervisor.update');
        Route::delete('delete-supervisor', [SupervisorController::class, 'destorysupervisor'])->name('destorysupervisor');


        /**
         * Subadmin Routes
         */
        Route::post('subadmin-create', [SubAdminController::class, 'SubAdminCreate'])->name('subadmin.create');
        Route::get('subadmin/edit/{id}', [SubAdminController::class, 'SubAdminEdit'])->name('subadmin.edit');
        Route::post('/subadmin-update', [SubAdminController::class, 'subadminUpdate'])->name('subadminUpdate.update');
        Route::delete('delete-subadmin', [SubAdminController::class, 'destorySubadmin'])->name('destorySubadmin');
        /**
         * Privacy Routes
         */

        Route::get('privacy-form', [PrivacyandPolicyController::class, 'privacyForm'])->name('privacy.form');
        Route::post('privacy-store', [PrivacyandPolicyController::class, 'privacyStore'])->name('privacy.store');

        /**
         * Plan Routes
         */
        Route::get('/planandrate', [PlanandRateController::class, 'index'])->name('pages.plan');
        Route::post('plan-create', [PlanandRateController::class, 'PlanCreate'])->name('plan.create');
        Route::get('plan/edit/{id}', [PlanandRateController::class, 'PlanEdit'])->name('plan.edit');
        Route::post('/plan-update', [PlanandRateController::class, 'PlanUpdate'])->name('plan.update');
        Route::delete('delete-plan', [PlanandRateController::class, 'destoryPlan'])->name('destoryPlan');
    });
});

