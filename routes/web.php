<?php

use App\Http\Controllers\Admin\AdminAdvertisementController;
use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminDepositController;
use App\Http\Controllers\Admin\AdminGigController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminJobcontroller;
use App\Http\Controllers\Admin\AdminPaymentGetwayController;
use App\Http\Controllers\Admin\AdminPlanController;
use App\Http\Controllers\Admin\AdminResponsibilityAndStepController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\Admin\AdminSocialController;
use App\Http\Controllers\Admin\AdminSubCategoryController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminWithdrawController;
use App\Http\Controllers\Admin\AmdinAboutController;
use App\Http\Controllers\Both\BoothWalletController;
use App\Http\Controllers\Both\BoothWithdrawController;
use App\Http\Controllers\Both\BothAdvertisementController;
use App\Http\Controllers\Both\BothHomeController;
use App\Http\Controllers\Client\ClientHomeController;
use App\Http\Controllers\Client\ClientJobController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserGigController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserPlanController;
use App\Http\Controllers\User\UserWalletController;
use App\Http\Controllers\User\UserWithdrawController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/abount', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/categories', [FrontendController::class, 'categories'])->name('frontend.categories');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('frontend.privacy.policy');
Route::get('/trams-and-condition', [FrontendController::class, 'tramsAndCondition'])->name('frontend.trams.condition');
Route::get('/refund-policy', [FrontendController::class, 'refundPolicy'])->name('frontend.refund.policy');
Route::get('/support', [FrontendController::class, 'support'])->name('frontend.support');
Route::get('/q', [FrontendController::class, 'search'])->name('frontend.search.job');





Route::get('/changeRole', [FrontendController::class, 'changeRole'])->name('user.role.change')->middleware('auth');


Route::get('/reboot', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    // composer dump-autoload
    dd('Done');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function(){
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('admin.index');
    Route::get('/user-list', [AdminHomeController::class, 'userList'])->name('admin.users');
    Route::get('/user/{id}/delete', [AdminHomeController::class, 'deleteUser'])->name('admin.user.delete');
    Route::get('/privacy-policy/{id}/edit', [AdminHomeController::class, 'privacyPolicy'])->name('admin.privacy.policy');
    Route::get('/trams/and/condition/{id}/edit', [AdminHomeController::class, 'privacyPolicy'])->name('admin.trams.comdition');
    Route::get('/refund-policy/{id}/edit', [AdminHomeController::class, 'privacyPolicy'])->name('admin.refund.policy');
    Route::get('/support/{id}/edit', [AdminHomeController::class, 'privacyPolicy'])->name('admin.support.edit');
    Route::post('/page/{id}/edit', [AdminHomeController::class, 'pageUpdate'])->name('admin.page.update');

    // Admin Setting Routes
    Route::get('/site-setting', [AdminSettingController::class, 'siteSetting'])->name('admin.setting.site');
    Route::post('/site-setting', [AdminSettingController::class, 'siteSettingUpdate'])->name('admin.setting.siteUpdate');
    Route::get('/general-setting', [AdminSettingController::class, 'generalSetting'])->name('admin.setting.general');
    Route::post('/general-setting', [AdminSettingController::class, 'generalSettingUpdate'])->name('admin.setting.generalUpdate');
    Route::get('/security-setting', [AdminSettingController::class, 'securitySetting'])->name('admin.setting.security');
    Route::post('/security-setting', [AdminSettingController::class, 'securitySettingUpdate'])->name('admin.setting.securityUpdate');
    Route::get('/site-meta-setting', [AdminSettingController::class, 'siteMetaSetting'])->name('admin.setting.siteMeta');
    Route::post('/site-meta-setting', [AdminSettingController::class, 'siteMetaSettingUpdate'])->name('admin.setting.siteMetaUpdate');
    Route::get('/refer-commission', [AdminSettingController::class, 'referCommission'])->name('admin.refer.commission');
    Route::post('/refer-commission', [AdminSettingController::class, 'referCommissionUpdate'])->name('admin.refer.commission.update');
    Route::get('/custom', [AdminSettingController::class, 'custom'])->name('admin.setting.custom');
    Route::post('/custom', [AdminSettingController::class, 'customUpdate'])->name('admin.setting.customUpdate');

    Route::get('/about/edit', [AmdinAboutController::class, 'index'])->name('admin.about.edit');
    Route::post('/about/update', [AmdinAboutController::class, 'update'])->name('admin.about.update');


    Route::get('/banner/edit', [AdminBannerController::class, 'edit'])->name('admin.banner.edit');
    Route::post('/banner/update', [AdminBannerController::class, 'update'])->name('admin.banner.update');

    Route::get('/responsibility-step/change/', [AdminResponsibilityAndStepController::class, 'change'])->name('admin.responsibility.step');
    Route::post('/responsibility-step/update/responsibility', [AdminResponsibilityAndStepController::class, 'updateResponsibility'])->name('admin.responsibility.update');


    // Admin Category Routes
    Route::resource('category', AdminCategoryController::class);
    Route::resource('subcategory', AdminSubCategoryController::class);
    Route::resource('getway', AdminPaymentGetwayController::class);
    Route::resource('skill', AdminSkillController::class);
    Route::resource('testimonials', AdminTestimonialController::class);
    Route::resource('plan', AdminPlanController::class);
    Route::resource('social', AdminSocialController::class);

    Route::get('/pening/gig', [AdminGigController::class, 'pending'])->name('admin.gig.pending');
    Route::get('/approved/gig', [AdminGigController::class, 'approved'])->name('admin.gig.approved');
    Route::get('/rejected/gig', [AdminGigController::class, 'rejected'])->name('admin.gig.rejected');
    Route::get('/approved/{id}/gig', [AdminGigController::class, 'approvedStatus'])->name('admin.gig.approvedStatus');
    Route::get('/rejected/{id}/gig', [AdminGigController::class, 'rejectedStatus'])->name('admin.gig.rejectedStatus');
    Route::get('/delete/{id}/gig', [AdminGigController::class, 'delete'])->name('admin.gig.delete');

    Route::get('/pening/deposit', [AdminDepositController::class, 'pending'])->name('admin.deposit.pending');
    Route::get('/approved/deposit', [AdminDepositController::class, 'approved'])->name('admin.deposit.approved');
    Route::get('/rejected/deposit', [AdminDepositController::class, 'rejected'])->name('admin.deposit.rejected');
    Route::get('/approved/{id}/deposit', [AdminDepositController::class, 'approvedStatus'])->name('admin.deposit.approvedStatus');
    Route::get('/rejected/{id}/deposit', [AdminDepositController::class, 'rejectedStatus'])->name('admin.deposit.rejectedStatus');
    Route::get('/delete/{id}/deposit', [AdminDepositController::class, 'delete'])->name('admin.deposit.delete');


    Route::get('/pening/withdraw', [AdminWithdrawController::class, 'pending'])->name('admin.withdraw.pending');
    Route::get('/approved/withdraw', [AdminWithdrawController::class, 'approved'])->name('admin.withdraw.approved');
    Route::get('/rejected/withdraw', [AdminWithdrawController::class, 'rejected'])->name('admin.withdraw.rejected');
    Route::get('/approved/{id}/withdraw', [AdminWithdrawController::class, 'approvedStatus'])->name('admin.withdraw.approvedStatus');
    Route::get('/rejected/{id}/withdraw', [AdminWithdrawController::class, 'rejectedStatus'])->name('admin.withdraw.rejectedStatus');
    Route::get('/delete/{id}/withdraw', [AdminWithdrawController::class, 'delete'])->name('admin.withdraw.delete');


    Route::get('/pening/job', [AdminJobcontroller::class, 'pending'])->name('admin.job.pending');
    Route::get('/approved/job', [AdminJobcontroller::class, 'approved'])->name('admin.job.approved');
    Route::get('/rejected/job', [AdminJobcontroller::class, 'rejected'])->name('admin.job.rejected');
    Route::get('/approved/{id}/job', [AdminJobcontroller::class, 'approvedStatus'])->name('admin.job.approvedStatus');
    Route::get('/rejected/{id}/job', [AdminJobcontroller::class, 'rejectedStatus'])->name('admin.job.rejectedStatus');
    Route::get('/delete/{id}/job', [AdminJobcontroller::class, 'delete'])->name('admin.job.delete');


    Route::get('/pening/advertisement', [AdminAdvertisementController::class, 'pending'])->name('admin.advertisement.pending');
    Route::get('/approved/advertisement', [AdminAdvertisementController::class, 'approved'])->name('admin.advertisement.approved');
    Route::get('/rejected/advertisement', [AdminAdvertisementController::class, 'rejected'])->name('admin.advertisement.rejected');
    Route::get('/approved/{id}/advertisement', [AdminAdvertisementController::class, 'approvedStatus'])->name('admin.advertisement.approvedStatus');
    Route::get('/rejected/{id}/advertisement', [AdminAdvertisementController::class, 'rejectedStatus'])->name('admin.advertisement.rejectedStatus');
    Route::get('/delete/{id}/advertisement', [AdminAdvertisementController::class, 'delete'])->name('admin.advertisement.delete');



});
Route::group(['middleware' => ['auth', 'is_blocked']], function(){
    Route::get('/dashboard', [BothHomeController::class, 'index'])->name('both.index');
    Route::get('/gig', [BothHomeController::class, 'gig'])->name('both.gig');
    Route::get('/gig/{id}/details', [BothHomeController::class, 'gigDetails'])->name('both.gig.details');
    Route::get('/edit-profile', [BothHomeController::class, 'editProfile'])->name('both.editProfile');
    Route::post('/update-profile', [BothHomeController::class, 'updateProfile'])->name('both.updateProfile');
    Route::get('/change-password', [BothHomeController::class, 'changePassword'])->name('both.changePassword');
    Route::post('/update-password', [BothHomeController::class, 'updatePassword'])->name('both.updatePassword');
    Route::get('/refer', [BothHomeController::class, 'refer'])->name('both.refer');

    Route::resource('advertisement', BothAdvertisementController::class);
    Route::get('/delete/{id}/advertisement', [BothAdvertisementController::class, 'delete'])->name('both.advertisement.delete');

    Route::post('/send/message', [BothHomeController::class, 'sendMessage'])->name('message.send');
    Route::get('/message', [BothHomeController::class, 'readMessage'])->name('message.inbox');
    Route::get('/message/{msgId}/reply', [BothHomeController::class, 'replyMessage'])->name('both.message.chat');



    Route::get('/wallets', [BoothWalletController::class, 'index'])->name('both.wallet.index');
    Route::get('/main-balance', [BoothWalletController::class, 'mainBalance'])->name('both.main.balance');
    Route::post('/deposit/{id}', [BoothWalletController::class, 'submitBalance'])->name('both.main.submit');
    Route::get('/deposit-balance', [BoothWalletController::class, 'depositBalance'])->name('both.deposit.balance');
    Route::post('/deposit-balance/store', [BoothWalletController::class, 'depositBalanceStore'])->name('both.deposit.balanceStore');


    Route::get('/earning-balance', [BoothWithdrawController::class, 'earningBalance'])->name('both.withdraw.balance');
    Route::post('/transfer-balance-main', [BoothWithdrawController::class, 'transferMainBalace'])->name('both.transfer.mainBalance');
    Route::post('/withdraw/{id}', [BoothWithdrawController::class, 'withdraw'])->name('both.earningBalance.withdraw');

});



// User Routes
Route::group(['prefix' => 'workers', 'middleware' => ['auth', 'is_user', 'is_blocked']], function(){
    Route::get('/group-jobs', [UserHomeController::class, 'groupJobs'])->name('user.groupJobs');
    Route::get('/job/{id}/details', [UserHomeController::class, 'jobDetails'])->name('user.job.details');
    Route::post('/job/{id}/submit', [FrontendController::class, 'submitJob'])->name('user.job.submit');
    Route::get('/my-task', [UserHomeController::class, 'index'])->name('user.task.index');




    Route::get('/profile/verify', [UserHomeController::class, 'verify'])->name('user.verify.profile');
    Route::post('/profile/verify', [UserHomeController::class, 'verifySubmit'])->name('user.profile.verify.submit');
    Route::get('/plan', [UserPlanController::class, 'index'])->name('user.plan.index');

    Route::resource('gig', UserGigController::class);
    Route::get('/pending-gigs', [UserGigController::class, 'pending'])->name('user.gig.pending');
    Route::get('/active-gigs', [UserGigController::class, 'active'])->name('user.gig.active');
    Route::get('/rejected-gigs', [UserGigController::class, 'rejected'])->name('user.gig.rejected');
    Route::get('/gig/{id}/details', [UserGigController::class, 'gigDetails'])->name('user.gig.details');

});



Route::group(['prefix' => 'buyer', 'middleware' => ['auth', 'is_client', 'is_blocked']], function(){
    Route::get('/dashboard', [ClientHomeController::class, 'index'])->name('client.index');
    Route::resource('job', ClientJobController::class);
    Route::get('/job/{id}/proves', [ClientJobController::class, 'prove'])->name('client.job.proves');
    Route::get('/job/{id}/approved-proves', [ClientJobController::class, 'jobSubmitApproved'])->name('client.approved.jobSubmit');
    Route::post('/get-sub-category', [ClientJobController::class, 'getSubcategory'])->name('client.getSubcategory');
    Route::post('/get-country', [ClientJobController::class, 'getCountry'])->name('client.getCountry');



});
