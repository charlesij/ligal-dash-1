<?php

use Illuminate\Support\Facades\Route;

function goToPage($page) {
    return function () use ($page) {
        return view($page);
    };
}
/** Dashboards */
Route::get('/', function() {
    return redirect('/sales');
});

Route::get('/sales', goToPage('dashboard.sales'))->name('sales');
Route::get('/analytics', goToPage('dashboard.analytics'))->name('analytics');
Route::get('/ecommerce', goToPage('dashboard.ecommerce'))->name('ecommerce');
Route::get('/crm', goToPage('dashboard.crm'))->name('crm');
Route::get('/crypto', goToPage('dashboard.crypto'))->name('crypto');
Route::get('/nft', goToPage('dashboard.nft'))->name('nft');
Route::get('/projects', goToPage('dashboard.projects'))->name('projects');
Route::get('/jobs', goToPage('dashboard.jobs'))->name('jobs');
Route::get('/hrm', goToPage('dashboard.hrm'))->name('hrm');
Route::get('/courses', goToPage('dashboard.courses'))->name('courses');
Route::get('/stocks', goToPage('dashboard.stocks'))->name('stocks');
Route::get('/medical', goToPage('dashboard.medical'))->name('medical');
Route::get('/pos-system', goToPage('dashboard.pos-system'))->name('pos-system');
Route::get('/podcast', goToPage('dashboard.podcast'))->name('podcast');
Route::get('/school', goToPage('dashboard.school'))->name('school');
Route::get('/social-media', goToPage('dashboard.social-media'))->name('social-media');

/** Web Apps */
Route::get('/web-apps/full-calendar', goToPage('web-apps.full-calendar'));
