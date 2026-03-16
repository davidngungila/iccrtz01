<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
});

// About Section
Route::prefix('about')->group(function () {
    Route::get('/', function () { return view('about.index'); });
    Route::get('/history', function () { return view('about.history'); });
    Route::get('/vision', function () { return view('about.vision'); });
    Route::get('/leadership', function () { return view('about.leadership'); });
    Route::get('/structure', function () { return view('about.structure'); });
    Route::get('/faith', function () { return view('about.faith'); });
});

// Students Ministry
Route::prefix('students')->group(function () {
    Route::get('/', function () { return view('students.index'); });
    Route::get('/join', function () { return view('students.join'); });
    Route::get('/campus', function () { return view('students.campus'); });
    Route::get('/prayer', function () { return view('students.prayer'); });
    Route::get('/leadership', function () { return view('students.leadership'); });
    Route::get('/resources', function () { return view('students.resources'); });
});

// Alumni Network
Route::prefix('alumni')->group(function () {
    Route::get('/', function () { return view('alumni.index'); });
    Route::get('/community', function () { return view('alumni.community'); });
    Route::get('/networking', function () { return view('alumni.networking'); });
    Route::get('/chapters', function () { return view('alumni.chapters'); });
    Route::get('/events', function () { return view('alumni.events'); });
    Route::get('/register', function () { return view('alumni.register'); });
});

// Events & Programs
Route::prefix('events')->group(function () {
    Route::get('/', function () { return view('events.index'); });
    Route::get('/upcoming', function () { return view('events.upcoming'); });
    Route::get('/conferences', function () { return view('events.conferences'); });
    Route::get('/retreats', function () { return view('events.retreats'); });
    Route::get('/seminars', function () { return view('events.seminars'); });
    Route::get('/campus', function () { return view('events.campus'); });
    Route::get('/register/{id}', function () { return view('events.register'); });
});

// Teachings & Resources
Route::prefix('teachings')->group(function () {
    Route::get('/', function () { return view('teachings.index'); });
    Route::get('/sermons', function () { return view('teachings.sermons'); });
    Route::get('/bible', function () { return view('teachings.bible'); });
    Route::get('/video', function () { return view('teachings.video'); });
    Route::get('/audio', function () { return view('teachings.audio'); });
    Route::get('/written', function () { return view('teachings.written'); });
});

// Media Center
Route::prefix('media')->group(function () {
    Route::get('/', function () { return view('media.index'); });
    Route::get('/photos', function () { return view('media.photos'); });
    Route::get('/videos', function () { return view('media.videos'); });
    Route::get('/podcasts', function () { return view('media.podcasts'); });
    Route::get('/testimonies', function () { return view('media.testimonies'); });
});

// News & Announcements
Route::prefix('news')->group(function () {
    Route::get('/', function () { return view('news.index'); });
    Route::get('/ministry', function () { return view('news.ministry'); });
    Route::get('/campus', function () { return view('news.campus'); });
    Route::get('/announcements', function () { return view('news.announcements'); });
});

// Community & Network
Route::prefix('community')->group(function () {
    Route::get('/', function () { return view('community.index'); });
    Route::get('/regional', function () { return view('community.regional'); });
    Route::get('/chapters', function () { return view('community.chapters'); });
    Route::get('/teams', function () { return view('community.teams'); });
});

// Projects & Outreach
Route::prefix('projects')->group(function () {
    Route::get('/', function () { return view('projects.index'); });
    Route::get('/evangelization', function () { return view('projects.evangelization'); });
    Route::get('/outreach', function () { return view('projects.outreach'); });
    Route::get('/charity', function () { return view('projects.charity'); });
});

// Donations & Support
Route::prefix('donate')->group(function () {
    Route::get('/', function () { return view('donate.index'); });
    Route::get('/options', function () { return view('donate.options'); });
    Route::get('/sponsorship', function () { return view('donate.sponsorship'); });
    Route::get('/transparency', function () { return view('donate.transparency'); });
});

// Members Portal
Route::prefix('portal')->group(function () {
    Route::get('/login', function () { return view('portal.login'); });
    Route::get('/dashboard', function () { return view('portal.dashboard'); });
    Route::get('/profile', function () { return view('portal.profile'); });
});

// Admin Dashboard
Route::prefix('admin')->group(function () {
    Route::get('/login', function () { return view('admin.login'); });
    Route::get('/dashboard', function () { return view('admin.dashboard'); });
    Route::get('/users', function () { return view('admin.users'); });
    Route::get('/events', function () { return view('admin.events'); });
    Route::get('/content', function () { return view('admin.content'); });
    Route::get('/donations', function () { return view('admin.donations'); });
    Route::get('/reports', function () { return view('admin.reports'); });
});

// Contact
Route::get('/contact', function () {
    return view('contact');
});
