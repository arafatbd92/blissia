<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\PastEventController;
use App\Http\Controllers\Backend\LatestUpdateController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\MediaCategoryController;
use App\Http\Controllers\Backend\PhotoGalleryController;
use App\Http\Controllers\Backend\VideoGalleryController;
use App\Http\Controllers\Backend\ContactController as BackendContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\MediaGalleryController;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home.index');

// Contact Routes
Route::get('/contact', [FrontendContactController::class, 'index'])->name('frontend.contact.index');
Route::get('/contact/satkhira-campus', [FrontendContactController::class, 'satkhiraCampus'])->name('frontend.contact.satkhira');
Route::get('/contact/debhata-campus', [FrontendContactController::class, 'debhataCampus'])->name('frontend.contact.debhata');
Route::post('/contact/submit', [FrontendContactController::class, 'submitForm'])->name('frontend.contact.submit');

// Video Gallery Routes
Route::get('/video-gallery', [MediaGalleryController::class, 'videoGalleryIndex'])->name('frontend.videogallery.index');
Route::get('/video-gallery/category/{categoryId}', [MediaGalleryController::class, 'videoGalleryByCategory'])->name('frontend.videogallery.category');
Route::get('/video-gallery/all', [MediaGalleryController::class, 'videoGalleryAll'])->name('frontend.videogallery.all');

// Photo Gallery Routes
Route::get('/photo-gallery', [MediaGalleryController::class, 'photoGalleryIndex'])->name('frontend.photogallery.index');
Route::get('/photo-gallery/category/{categoryId}', [MediaGalleryController::class, 'photoGalleryByCategory'])->name('frontend.photogallery.category');
Route::get('/photo-gallery/all', [MediaGalleryController::class, 'photoGalleryAll'])->name('frontend.photogallery.all');



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// Backend Routes
Route::prefix('backend')->name('backend.')->group(function () {
    // Authenticated routes
    Route::middleware('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        
        // Slider Management Routes
        Route::resource('slider', SliderController::class);
        
        // Past Event Management Routes
        Route::resource('pastevent', PastEventController::class);
        
        // Latest Update Management Routes
        Route::resource('latestupdate', LatestUpdateController::class);
        
        // Page Management Routes
        Route::resource('page', PageController::class);
        Route::post('page/{page}/remove-image', [PageController::class, 'removeImage'])->name('page.remove-image');
        Route::post('page/{page}/remove-pdf', [PageController::class, 'removePdf'])->name('page.remove-pdf');
        
        // Media Category Management Routes
        Route::resource('mediacategory', MediaCategoryController::class);

        // Photo Gallery Management Routes
        Route::resource('photogallery', PhotoGalleryController::class);
        
        // Video Gallery Management Routes
        Route::resource('videogallery', VideoGalleryController::class);
        
        // Contact Management Routes
        Route::resource('contact', BackendContactController::class);
        Route::post('contact/{id}/mark-read', [BackendContactController::class, 'markAsRead'])->name('contact.mark-read');
        Route::post('contact/{id}/mark-unread', [BackendContactController::class, 'markAsUnread'])->name('contact.mark-unread');
    });
});

// Dashboard route
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Main login routes (without backend prefix)
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
});

require __DIR__.'/auth.php';
