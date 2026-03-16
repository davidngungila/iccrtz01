@extends('layouts.app')

@section('title', 'Home - Inter-Colleges Catholic Charismatic Renewal Tanzania')
@section('description', 'Welcome to Inter-Colleges Catholic Charismatic Renewal Tanzania - Uniting Catholic students in colleges and higher education institutions through the Holy Spirit – Unity, Love, Evangelization.')

@section('content')
<!-- Professional Hero Section with Advanced Slider -->
<section class="relative h-screen overflow-hidden">
    <div class="heroSwiper h-full w-full relative">
        <div class="swiper-wrapper relative h-full">
            <!-- Slide 1: Faith & Prayer -->
            <div class="swiper-slide absolute inset-0 flex items-center opacity-100 transition-all duration-1000" data-slide="0">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Students praying together" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 via-blue-900/60 to-transparent"></div>
                </div>
                <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                    <div class="max-w-3xl slide-content">
                        <span class="inline-block px-4 py-1.5 bg-yellow-400/20 text-yellow-400 rounded-full text-xs font-black tracking-widest uppercase mb-6 border border-yellow-400/30 font-accent">Spiritual Growth</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-display text-white mb-8 leading-none tracking-tight">
                            Nurture Your <span class="text-gradient-primary animate-text-glow">Faith Journey</span>
                        </h1>
                        <p class="text-xl text-blue-100 mb-12 leading-relaxed body-text-relaxed">
                            Join our vibrant community of Catholic students experiencing spiritual growth, 
                            prayer fellowship, and deepening relationship with God across Tanzania's universities.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <a href="/students/join" class="w-full sm:w-auto px-10 py-4 bg-yellow-400 text-blue-900 font-black rounded-full hover:bg-yellow-300 shadow-xl shadow-yellow-400/30 transition-all text-center transform hover:scale-105 btn-text-accent">
                                Join Our Community
                            </a>
                            <a href="/about" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group font-heading">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Leadership Development -->
            <div class="swiper-slide absolute inset-0 flex items-center opacity-0 transition-all duration-1000" data-slide="1">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="University graduation" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 via-blue-900/60 to-transparent"></div>
                </div>
                <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                    <div class="max-w-3xl slide-content">
                        <span class="inline-block px-4 py-1.5 bg-yellow-400/20 text-yellow-400 rounded-full text-xs font-black tracking-widest uppercase mb-6 border border-yellow-400/30 font-accent">Leadership Excellence</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-display text-white mb-8 leading-none tracking-tight">
                            Build Tomorrow's <span class="text-gradient-primary animate-text-glow">Christian Leaders</span>
                        </h1>
                        <p class="text-xl text-blue-100 mb-12 leading-relaxed body-text-relaxed">
                            Our comprehensive leadership programs equip students with the skills, values, and 
                            spiritual foundation needed to become transformative leaders in their communities.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <a href="/students/leadership" class="w-full sm:w-auto px-10 py-4 bg-yellow-400 text-blue-900 font-black rounded-full hover:bg-yellow-300 shadow-xl shadow-yellow-400/30 transition-all text-center transform hover:scale-105 btn-text-accent">
                                Leadership Programs
                            </a>
                            <a href="/alumni" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group font-heading">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Alumni Network
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Service & Outreach -->
            <div class="swiper-slide absolute inset-0 flex items-center opacity-0 transition-all duration-1000" data-slide="2">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Community service" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 via-blue-900/60 to-transparent"></div>
                </div>
                <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                    <div class="max-w-3xl slide-content">
                        <span class="inline-block px-4 py-1.5 bg-yellow-400/20 text-yellow-400 rounded-full text-xs font-black tracking-widest uppercase mb-6 border border-yellow-400/30 font-accent">Service in Action</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-display text-white mb-8 leading-none tracking-tight">
                            Transform Through <span class="text-gradient-primary animate-text-glow">Service & Love</span>
                        </h1>
                        <p class="text-xl text-blue-100 mb-12 leading-relaxed body-text-relaxed">
                            Experience the joy of serving others through our outreach programs, community service 
                            projects, and mission trips that make a real difference in people's lives.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <a href="/projects" class="w-full sm:w-auto px-10 py-4 bg-yellow-400 text-blue-900 font-black rounded-full hover:bg-yellow-300 shadow-xl shadow-yellow-400/30 transition-all text-center transform hover:scale-105 btn-text-accent">
                                Our Projects
                            </a>
                            <a href="/donate" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group font-heading">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Support Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Academic Excellence -->
            <div class="swiper-slide absolute inset-0 flex items-center opacity-0 transition-all duration-1000" data-slide="3">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Students studying together" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 via-blue-900/60 to-transparent"></div>
                </div>
                <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                    <div class="max-w-3xl slide-content">
                        <span class="inline-block px-4 py-1.5 bg-yellow-400/20 text-yellow-400 rounded-full text-xs font-black tracking-widest uppercase mb-6 border border-yellow-400/30 font-accent">Academic Success</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-display text-white mb-8 leading-none tracking-tight">
                            Excel in <span class="text-gradient-primary animate-text-glow">Studies & Faith</span>
                        </h1>
                        <p class="text-xl text-blue-100 mb-12 leading-relaxed body-text-relaxed">
                            Balance your academic journey with strong spiritual roots. Access mentorship, 
                            study resources, and prayer support to excel in both your studies and faith life.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <a href="/students/resources" class="w-full sm:w-auto px-10 py-4 bg-yellow-400 text-blue-900 font-black rounded-full hover:bg-yellow-300 shadow-xl shadow-yellow-400/30 transition-all text-center transform hover:scale-105 btn-text-accent">
                                Student Resources
                            </a>
                            <a href="/contact" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group font-heading">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Get in Touch
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 5: Community & Fellowship -->
            <div class="swiper-slide absolute inset-0 flex items-center opacity-0 transition-all duration-1000" data-slide="4">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Community gathering" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 via-blue-900/60 to-transparent"></div>
                </div>
                <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                    <div class="max-w-3xl slide-content">
                        <span class="inline-block px-4 py-1.5 bg-yellow-400/20 text-yellow-400 rounded-full text-xs font-black tracking-widest uppercase mb-6 border border-yellow-400/30 font-accent">Christian Fellowship</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-display text-white mb-8 leading-none tracking-tight">
                            Find Your <span class="text-gradient-primary animate-text-glow">Spiritual Family</span>
                        </h1>
                        <p class="text-xl text-blue-100 mb-12 leading-relaxed body-text-relaxed">
                            Build lasting friendships with fellow Catholic students who share your values and faith. 
                            Experience true Christian community and support throughout your university journey.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <a href="/students/campus" class="w-full sm:w-auto px-10 py-4 bg-yellow-400 text-blue-900 font-black rounded-full hover:bg-yellow-300 shadow-xl shadow-yellow-400/30 transition-all text-center transform hover:scale-105 btn-text-accent">
                                Find Your Chapter
                            </a>
                            <a href="/events" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group font-heading">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Upcoming Events
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 6: Alumni Success -->
            <div class="swiper-slide absolute inset-0 flex items-center opacity-0 transition-all duration-1000" data-slide="5">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1515378791036-0648a815d674?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Professional success" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 via-blue-900/60 to-transparent"></div>
                </div>
                <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                    <div class="max-w-3xl slide-content">
                        <span class="inline-block px-4 py-1.5 bg-yellow-400/20 text-yellow-400 rounded-full text-xs font-black tracking-widest uppercase mb-6 border border-yellow-400/30 font-accent">Professional Network</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-display text-white mb-8 leading-none tracking-tight">
                            Join Our <span class="text-gradient-primary animate-text-glow">Alumni Success</span>
                        </h1>
                        <p class="text-xl text-blue-100 mb-12 leading-relaxed body-text-relaxed">
                            Connect with thousands of successful graduates making impact in their professions 
                            and communities while living out their Catholic faith with integrity and purpose.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <a href="/alumni/register" class="w-full sm:w-auto px-10 py-4 bg-yellow-400 text-blue-900 font-black rounded-full hover:bg-yellow-300 shadow-xl shadow-yellow-400/30 transition-all text-center transform hover:scale-105 btn-text-accent">
                                Join Alumni Network
                            </a>
                            <a href="/alumni/stories" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group font-heading">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Success Stories
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <div class="absolute bottom-10 right-10 z-20 flex gap-4">
            <button class="swiper-prev w-14 h-14 rounded-full border border-white/20 bg-white/10 text-white flex items-center justify-center hover:bg-yellow-400 hover:border-yellow-400 hover:text-blue-900 transition-all backdrop-blur-md" onclick="changeSlide(-1)">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button class="swiper-next w-14 h-14 rounded-full border border-white/20 bg-white/10 text-white flex items-center justify-center hover:bg-yellow-400 hover:border-yellow-400 hover:text-blue-900 transition-all backdrop-blur-md" onclick="changeSlide(1)">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <!-- Pagination Dots -->
        <div class="absolute bottom-10 left-6 z-20 flex gap-3">
            <button class="swiper-pagination-bullet w-3 h-3 rounded-full bg-white transition-all duration-300 hover:bg-yellow-400" data-dot="0" onclick="goToSlide(0)"></button>
            <button class="swiper-pagination-bullet w-3 h-3 rounded-full bg-white/50 transition-all duration-300 hover:bg-yellow-400" data-dot="1" onclick="goToSlide(1)"></button>
            <button class="swiper-pagination-bullet w-3 h-3 rounded-full bg-white/50 transition-all duration-300 hover:bg-yellow-400" data-dot="2" onclick="goToSlide(2)"></button>
            <button class="swiper-pagination-bullet w-3 h-3 rounded-full bg-white/50 transition-all duration-300 hover:bg-yellow-400" data-dot="3" onclick="goToSlide(3)"></button>
            <button class="swiper-pagination-bullet w-3 h-3 rounded-full bg-white/50 transition-all duration-300 hover:bg-yellow-400" data-dot="4" onclick="goToSlide(4)"></button>
            <button class="swiper-pagination-bullet w-3 h-3 rounded-full bg-white/50 transition-all duration-300 hover:bg-yellow-400" data-dot="5" onclick="goToSlide(5)"></button>
        </div>
    </div>
</section>

<!-- Advanced Welcome Section -->
<section class="py-20 bg-gradient-to-br from-white via-blue-50/30 to-white relative overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-10 w-64 h-64 bg-blue-900 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-yellow-400 rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="w-full relative z-10">
        <!-- Full Width Welcome Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 min-h-screen">
            <!-- Left Side - Coordinator Image & Info -->
            <div class="relative bg-white">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%231e3a8a" fill-opacity="0.4"%3E%3Cpath d="M0 40L40 0H20L0 20M40 40V20L20 40"/%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <!-- Coordinator Image -->
                <div class="relative h-full min-h-[600px]">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" 
                         alt="National Coordinator" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/60 to-gray-900/30"></div>
                    
                    <!-- Coordinator Info Overlay -->
                    <div class="absolute bottom-0 left-0 right-0 p-8 lg:p-12 text-white">
                        <div class="max-w-md">
                            <!-- Badge -->
                            <div class="inline-block px-4 py-2 bg-yellow-400 text-blue-900 rounded-full text-xs font-black tracking-widest uppercase mb-6 font-accent">
                                National Leadership
                            </div>
                            
                            <!-- Name & Title -->
                            <h3 class="font-black text-3xl lg:text-4xl font-heading mb-2 tracking-tight">Rev. Dr. Joseph Mwangi</h3>
                            <p class="text-gray-100 text-lg font-body mb-6">National Coordinator</p>
                            
                            <!-- Credentials -->
                            <div class="flex flex-wrap gap-3 mb-8">
                                <span class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold font-body">30+ Years Service</span>
                                <span class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold font-body">PhD Theology</span>
                                <span class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold font-body">Spiritual Director</span>
                            </div>
                            
                            <!-- Contact Info -->
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-100">
                                    <svg class="w-5 h-5 mr-3 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="font-body">coordinator@iccrtz.org</span>
                                </div>
                                <div class="flex items-center text-gray-100">
                                    <svg class="w-5 h-5 mr-3 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span class="font-body">+255 712 345 678</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Welcome Message -->
            <div class="bg-white p-8 lg:p-16 flex flex-col justify-center">
                <div class="max-w-3xl mx-auto w-full">
                    <!-- Section Header -->
                    <div class="mb-12">
                        <span class="inline-block px-6 py-3 bg-blue-900/10 text-blue-900 rounded-full text-sm font-black tracking-widest uppercase mb-6 border border-blue-900/20 font-accent">
                            Welcome Message
                        </span>
                        <h2 class="text-3xl lg:text-4xl font-display text-blue-900 mb-6 leading-tight tracking-tight">
                            Greetings from Our <span class="text-gradient-primary">National Coordinator</span>
                        </h2>
                        <div class="w-24 h-1 bg-gradient-to-r from-blue-900 to-yellow-400 rounded-full"></div>
                    </div>
                    
                    <!-- Welcome Message -->
                    <div class="space-y-8">
                        <!-- Greeting -->
                        <div>
                            <p class="text-2xl font-serif text-blue-900 italic leading-relaxed mb-4">
                                "Dear brothers and sisters in Christ,"
                            </p>
                            <div class="w-16 h-0.5 bg-gradient-to-r from-yellow-400 to-transparent rounded-full"></div>
                        </div>
                        
                        <!-- Main Message -->
                        <div class="space-y-6 body-text-relaxed text-gray-700 leading-relaxed">
                            <p class="drop-cap text-lg">
                                Welcome to the <span class="font-semibold text-blue-900">Catholic Charismatic Tanzania Universities Fellowship</span> – 
                                a vibrant community where faith meets academic excellence, and spiritual growth transforms lives.
                            </p>
                            
                            <p class="text-lg">
                                For over three decades, ICCRTZ has been at the forefront of nurturing Catholic students and alumni, 
                                creating spaces where <span class="text-gradient-primary font-semibold">faith flourishes</span>, 
                                <span class="text-blue-600 font-semibold">leadership emerges</span>, and 
                                <span class="text-yellow-600 font-semibold">service becomes second nature</span>.
                            </p>
                            
                            <p class="text-lg">
                                Our mission extends beyond university campuses – we're building a generation of Catholic leaders 
                                who will transform Tanzania through their professional excellence, unwavering faith, and 
                                commitment to serving others.
                            </p>
                        </div>
                        
                        <!-- Key Values -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-8">
                            <div class="text-center group">
                                <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-2xl">⛪</span>
                                </div>
                                <h4 class="font-bold text-blue-900 font-heading mb-2">Faith</h4>
                                <p class="text-sm text-gray-600 font-body">Deep spiritual foundation</p>
                            </div>
                            <div class="text-center group">
                                <div class="w-16 h-16 mx-auto mb-4 bg-yellow-100 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-2xl">🎓</span>
                                </div>
                                <h4 class="font-bold text-blue-900 font-heading mb-2">Excellence</h4>
                                <p class="text-sm text-gray-600 font-body">Academic & professional</p>
                            </div>
                            <div class="text-center group">
                                <div class="w-16 h-16 mx-auto mb-4 bg-green-100 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-2xl">🤝</span>
                                </div>
                                <h4 class="font-bold text-blue-900 font-heading mb-2">Service</h4>
                                <p class="text-sm text-gray-600 font-body">Community transformation</p>
                            </div>
                        </div>
                        
                        <!-- Call to Action -->
                        <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-2xl p-8 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-black text-xl font-heading mb-2">Join Our Journey</h4>
                                    <p class="text-blue-100 font-body">Become part of something greater than yourself</p>
                                </div>
                                <div class="flex space-x-4">
                                    <a href="/join" class="group inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 font-black rounded-full hover:bg-yellow-300 transition-all transform hover:scale-105 btn-text-accent">
                                        Join ICCRTZ
                                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                    <a href="/about" class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur-sm text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all font-heading">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Signature & Bible Verse -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-600 font-body italic mb-2">In His Service,</p>
                                    <p class="font-black text-blue-900 font-heading">Rev. Dr. Joseph Mwangi</p>
                                    <p class="text-sm text-gray-600 font-body">National Coordinator, ICCRTZ</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs text-gray-500 font-body mb-1">Matthew 28:19</p>
                                    <p class="text-xs text-gray-500 italic font-body">"Go and make disciples..."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                    <!-- Advanced About the Fellowship Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%231e3a8a" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-block px-6 py-3 bg-blue-900/10 text-blue-900 rounded-full text-sm font-black tracking-widest uppercase mb-6 border border-blue-900/20 font-accent">
                    About ICCRTZ
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-display text-blue-900 mb-6 leading-tight tracking-tight">
                    About the <span class="text-gradient-primary">Fellowship</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-900 to-yellow-400 mx-auto rounded-full"></div>
            </div>
            
            <!-- Mission & Vision Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Mission Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-32 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Our Mission" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
                    </div>
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 -mt-8 relative z-10">
                            <span class="text-blue-900 text-2xl">🎯</span>
                        </div>
                        <h3 class="text-xl font-black font-heading mb-3 text-blue-900">Our Mission</h3>
                        <p class="text-gray-600 body-text-relaxed leading-relaxed text-sm">
                            To empower university students and alumni to grow in their Catholic faith, develop leadership skills, and serve their communities with excellence and compassion.
                        </p>
                    </div>
                </div>
                
                <!-- Vision Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-32 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Our Vision" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-yellow-600/80 to-transparent"></div>
                    </div>
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4 -mt-8 relative z-10">
                            <span class="text-yellow-600 text-2xl">👁️</span>
                        </div>
                        <h3 class="text-xl font-black font-heading mb-3 text-blue-900">Our Vision</h3>
                        <p class="text-gray-600 body-text-relaxed leading-relaxed text-sm">
                            A transformed Tanzania led by Catholic charismatic leaders who are spiritually grounded, intellectually equipped, and socially responsible.
                        </p>
                    </div>
                </div>
                
                <!-- Values Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-32 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Our Values" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-600/80 to-transparent"></div>
                    </div>
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 -mt-8 relative z-10">
                            <span class="text-green-600 text-2xl">💎</span>
                        </div>
                        <h3 class="text-xl font-black font-heading mb-3 text-blue-900">Our Values</h3>
                        <p class="text-gray-600 body-text-relaxed leading-relaxed text-sm">
                            Faith, Integrity, Service, Excellence, Unity, and Compassion guide all our activities and relationships.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Additional Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h3 class="text-3xl font-bold text-blue-900 font-heading leading-tight">
                        Building <span class="text-gradient-primary">Catholic Leaders</span> for Tomorrow
                    </h3>
                    <p class="text-lg text-gray-700 body-text-relaxed leading-relaxed">
                        The Catholic Charismatic Tanzania Universities Fellowship (ICCRTZ) is a vibrant community 
                        dedicated to nurturing spiritual growth, academic excellence, and leadership development 
                        among Catholic students and alumni across Tanzania's universities.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center p-4 bg-blue-50 rounded-xl">
                            <div class="text-3xl font-black text-blue-900 font-display mb-2">50+</div>
                            <p class="text-sm text-gray-600 font-body">University Chapters</p>
                        </div>
                        <div class="text-center p-4 bg-yellow-50 rounded-xl">
                            <div class="text-3xl font-black text-blue-900 font-display mb-2">30+</div>
                            <p class="text-sm text-gray-600 font-body">Years of Ministry</p>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl group">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" 
                         alt="Students in fellowship" 
                         class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/40 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-white">
                            <p class="text-sm font-semibold mb-1">Join Our Community</p>
                            <p class="text-xs opacity-90">Experience faith, fellowship, and growth with ICCRTZ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Upcoming Events Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 via-white to-blue-50/20 relative overflow-hidden">
    <!-- Advanced Background Elements -->
    <div class="absolute inset-0">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%231e3a8a" fill-opacity="0.4"%3E%3Cpath d="M0 40L40 0H20L0 20M40 40V20L20 40"/%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-br from-yellow-400/15 to-orange-400/15 rounded-full filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-gradient-to-br from-green-400/10 to-teal-400/10 rounded-full filter blur-2xl animate-pulse" style="animation-delay: 4s;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Advanced Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-100 to-purple-100 rounded-full mb-6">
                    <span class="relative flex h-3 w-3 mr-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                    </span>
                    <span class="text-sm font-black text-blue-900 tracking-wider uppercase font-accent">Events Calendar</span>
                </div>
                
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-display text-blue-900 mb-6 leading-tight tracking-tight">
                    Upcoming <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-blue-600 bg-clip-text text-transparent">Events</span>
                </h2>
                
                <div class="flex items-center justify-center gap-2 mb-8">
                    <div class="h-1 w-20 bg-gradient-to-r from-transparent to-blue-400"></div>
                    <div class="flex gap-2">
                        <div class="w-2 h-2 bg-blue-400 rounded-full animate-bounce" style="animation-delay: 0s;"></div>
                        <div class="w-2 h-2 bg-purple-400 rounded-full animate-bounce" style="animation-delay: 0.2s;"></div>
                        <div class="w-2 h-2 bg-blue-400 rounded-full animate-bounce" style="animation-delay: 0.4s;"></div>
                    </div>
                    <div class="h-1 w-20 bg-gradient-to-r from-blue-400 to-transparent"></div>
                </div>
                
                <p class="text-xl text-gray-600 body-text-relaxed max-w-4xl mx-auto leading-relaxed">
                    Discover transformative experiences that will enrich your spiritual journey, develop your leadership skills, and connect you with our vibrant community across Tanzania.
                </p>
            </div>
            
            <!-- Event Filters -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button class="px-6 py-2 bg-blue-900 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition-all transform hover:scale-105">
                    All Events
                </button>
                <button class="px-6 py-2 bg-white border border-gray-300 text-gray-700 rounded-full text-sm font-semibold hover:border-blue-400 hover:text-blue-900 transition-all">
                    Conferences
                </button>
                <button class="px-6 py-2 bg-white border border-gray-300 text-gray-700 rounded-full text-sm font-semibold hover:border-purple-400 hover:text-purple-900 transition-all">
                    Spiritual
                </button>
                <button class="px-6 py-2 bg-white border border-gray-300 text-gray-700 rounded-full text-sm font-semibold hover:border-green-400 hover:text-green-900 transition-all">
                    Training
                </button>
            </div>
            
            <!-- Advanced Events Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Event 1: Annual Conference -->
                <div class="group relative">
                    <!-- Glow Effect -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    
                    <div class="relative bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-[1.02] transition-all duration-500 hover:shadow-2xl">
                        <!-- Event Header with Image -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1497366214047-51231e5b3226?w=1000&h=500&fit=crop&crop=center" 
                                 alt="Annual Conference" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            
                            <!-- Featured Badge -->
                            <div class="absolute top-6 left-6">
                                <div class="flex items-center px-4 py-2 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full shadow-lg">
                                    <svg class="w-4 h-4 mr-2 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <span class="text-xs font-black text-blue-900 uppercase tracking-wider font-accent">Featured</span>
                                </div>
                            </div>
                            
                            <!-- Date Badge -->
                            <div class="absolute top-6 right-6">
                                <div class="bg-white/90 backdrop-blur-sm rounded-xl p-3 text-center shadow-lg">
                                    <div class="text-2xl font-black text-blue-900 font-display">15</div>
                                    <div class="text-xs font-semibold text-blue-600 uppercase">DEC</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Event Content -->
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-900 rounded-full text-xs font-bold font-body">Conference</span>
                                <span class="px-3 py-1 bg-green-100 text-green-900 rounded-full text-xs font-bold font-body">In-Person</span>
                            </div>
                            
                            <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">
                                Annual ICCRTZ Conference 2024
                            </h3>
                            
                            <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                                Join us for our biggest annual gathering of students and alumni from across Tanzania for three days of inspiration, fellowship, and spiritual renewal.
                            </p>
                            
                            <!-- Event Details -->
                            <div class="space-y-3 mb-4">
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-sm">Dec 15-17, 2024</span>
                                </div>
                                
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    </svg>
                                    <span class="text-sm">Dar es Salaam</span>
                                </div>
                                
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span class="text-sm">500+ Attendees</span>
                                </div>
                            </div>
                            
                            <!-- CTA Button -->
                            <a href="/events/register/1" class="w-full group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-black rounded-full hover:from-blue-800 hover:to-blue-600 transition-all transform hover:scale-105 btn-text-accent shadow-lg">
                                Register Now
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Event 2: Prayer Retreat -->
                <div class="group relative">
                    <!-- Glow Effect -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    
                    <div class="relative bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-[1.02] transition-all duration-500 hover:shadow-2xl">
                        <!-- Event Header with Image -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1000&h=500&fit=crop&crop=center" 
                                 alt="Prayer Retreat" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-purple-900/70 via-purple-900/20 to-transparent"></div>
                            
                            <!-- Date Badge -->
                            <div class="absolute top-6 right-6">
                                <div class="bg-white/90 backdrop-blur-sm rounded-xl p-3 text-center shadow-lg">
                                    <div class="text-2xl font-black text-purple-900 font-display">25</div>
                                    <div class="text-xs font-semibold text-purple-600 uppercase">NOV</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Event Content -->
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-purple-100 text-purple-900 rounded-full text-xs font-bold font-body">Spiritual</span>
                                <span class="px-3 py-1 bg-green-100 text-green-900 rounded-full text-xs font-bold font-body">In-Person</span>
                            </div>
                            
                            <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">
                                National Prayer Retreat
                            </h3>
                            
                            <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                                A weekend of intensive prayer, worship, and spiritual renewal for all members seeking deeper connection with God.
                            </p>
                            
                            <!-- Event Details -->
                            <div class="space-y-3 mb-4">
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-sm">Nov 25-26, 2024</span>
                                </div>
                                
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    </svg>
                                    <span class="text-sm">Arusha</span>
                                </div>
                                
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span class="text-sm">200+ Attendees</span>
                                </div>
                            </div>
                            
                            <!-- CTA Button -->
                            <a href="/events/register/2" class="w-full group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-purple-600 to-purple-800 text-white font-black rounded-full hover:from-purple-700 hover:to-purple-900 transition-all transform hover:scale-105 btn-text-accent shadow-lg">
                                Register Now
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Event 3: Leadership Workshop -->
                <div class="group relative">
                    <!-- Glow Effect -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-green-600 to-teal-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    
                    <div class="relative bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-[1.02] transition-all duration-500 hover:shadow-2xl">
                        <!-- Event Header with Image -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=1000&h=500&fit=crop&crop=center" 
                                 alt="Leadership Workshop" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-green-900/70 via-green-900/20 to-transparent"></div>
                            
                            <!-- Date Badge -->
                            <div class="absolute top-6 right-6">
                                <div class="bg-white/90 backdrop-blur-sm rounded-xl p-3 text-center shadow-lg">
                                    <div class="text-2xl font-black text-green-900 font-display">02</div>
                                    <div class="text-xs font-semibold text-green-600 uppercase">DEC</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Event Content -->
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-100 text-green-900 rounded-full text-xs font-bold font-body">Training</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-900 rounded-full text-xs font-bold font-body">Online</span>
                            </div>
                            
                            <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">
                                Leadership Training Workshop
                            </h3>
                            
                            <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                                Develop your leadership skills with our intensive training program designed for student leaders and aspiring professionals.
                            </p>
                            
                            <!-- Event Details -->
                            <div class="space-y-3 mb-4">
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-sm">Dec 2, 2024</span>
                                </div>
                                
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    </svg>
                                    <span class="text-sm">Online</span>
                                </div>
                                
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span class="text-sm">100+ Attendees</span>
                                </div>
                            </div>
                            
                            <!-- CTA Button -->
                            <a href="/events/register/3" class="w-full group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-green-600 to-green-800 text-white font-black rounded-full hover:from-green-700 hover:to-green-900 transition-all transform hover:scale-105 btn-text-accent shadow-lg">
                                Register Now
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Footer CTA -->
            <div class="text-center">
                <div class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-50 to-purple-50 rounded-full mb-6">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="text-sm font-semibold text-blue-900">New events added weekly</span>
                </div>
                
                <a href="/events" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-900 via-purple-900 to-blue-900 text-white font-black rounded-full hover:from-blue-800 hover:via-purple-800 hover:to-blue-800 transition-all transform hover:scale-105 btn-text-accent shadow-xl">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    View Complete Events Calendar
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                
                <p class="text-gray-500 mt-4 text-sm">
                    Can't find what you're looking for? <a href="/contact" class="text-blue-600 hover:text-blue-700 font-semibold">Contact our events team</a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Latest News Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%231e3a8a" fill-opacity="0.4"%3E%3Cpath d="M0 40L40 0H20L0 20M40 40V20L20 40"/%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-16">
                <div class="text-center md:text-left mb-6 md:mb-0">
                    <span class="inline-block px-6 py-3 bg-blue-900/10 text-blue-900 rounded-full text-sm font-black tracking-widest uppercase mb-6 border border-blue-900/20 font-accent">
                        News & Updates
                    </span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-display text-blue-900 mb-4 leading-tight tracking-tight">
                        Latest <span class="text-gradient-primary">News</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-900 to-yellow-400 rounded-full"></div>
                </div>
                <a href="/news" class="group flex items-center px-8 py-4 bg-blue-900 text-white font-black rounded-full hover:bg-blue-800 transition-all transform hover:scale-105 btn-text-accent">
                    View All News
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
            
            <!-- News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- News Article 1 -->
                <article class="group bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="University of Dodoma Campus" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-blue-900/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-yellow-400 text-blue-900 rounded-full text-xs font-black uppercase font-accent">New</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="px-3 py-1 bg-blue-100 text-blue-900 rounded-full text-xs font-semibold font-body">Campus News</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">
                            New Campus Fellowship at University of Dodoma
                        </h3>
                        <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                            We are excited to announce the establishment of a new ICCRTZ fellowship at UDOM, expanding our reach to central Tanzania.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="font-body">November 10, 2024</span>
                            </div>
                            <a href="/news/1" class="group inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-black text-sm rounded-full hover:from-blue-800 hover:to-blue-600 transition-all transform hover:scale-105 btn-text-accent">
                                Read
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
                
                <!-- News Article 2 -->
                <article class="group bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Leadership Summit Conference" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 via-purple-900/40 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="px-3 py-1 bg-purple-100 text-purple-900 rounded-full text-xs font-semibold font-body">Announcement</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">
                            Leadership Summit Registration Now Open
                        </h3>
                        <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                            Registration for our annual leadership summit is now open for all student leaders across Tanzania.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="font-body">November 8, 2024</span>
                            </div>
                            <a href="/news/2" class="group inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-black text-sm rounded-full hover:from-purple-700 hover:to-pink-700 transition-all transform hover:scale-105 btn-text-accent">
                                Read
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
                
                <!-- News Article 3 -->
                <article class="group bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Alumni Network Celebration" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-green-900/40 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="px-3 py-1 bg-green-100 text-green-900 rounded-full text-xs font-semibold font-body">Achievement</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">
                            Alumni Network Reaches 1000 Members
                        </h3>
                        <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                            We celebrate a milestone as our alumni network grows to over 1000 active members nationwide.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="font-body">November 5, 2024</span>
                            </div>
                            <a href="/news/3" class="group inline-flex items-center px-4 py-2 bg-gradient-to-r from-green-600 to-teal-600 text-white font-black text-sm rounded-full hover:from-green-700 hover:to-teal-700 transition-all transform hover:scale-105 btn-text-accent">
                                Read
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Featured Teachings Section -->
<section class="py-20 bg-gradient-to-br from-white to-blue-50/30 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-10 w-64 h-64 bg-blue-900 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-yellow-400 rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-16">
                <div class="text-center md:text-left mb-6 md:mb-0">
                    <span class="inline-block px-6 py-3 bg-blue-900/10 text-blue-900 rounded-full text-sm font-black tracking-widest uppercase mb-6 border border-blue-900/20 font-accent">
                        Spiritual Resources
                    </span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-display text-blue-900 mb-4 leading-tight tracking-tight">
                        Featured <span class="text-gradient-primary">Teachings</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-900 to-yellow-400 rounded-full"></div>
                </div>
                <a href="/teachings" class="group flex items-center px-8 py-4 bg-blue-900 text-white font-black rounded-full hover:bg-blue-800 transition-all transform hover:scale-105 btn-text-accent">
                    View All Teachings
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Teachings Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Teaching 1: Bible Study Series -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Bible Study" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-blue-900/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-yellow-400 text-blue-900 rounded-full text-xs font-black uppercase font-accent">Series</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">Bible Study Series</h3>
                        <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                            Deep dive into the Gospel of John with our comprehensive 12-week study series for spiritual growth.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-body">12 Weeks</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span class="font-body">500+ Students</span>
                            </div>
                        </div>
                        <a href="/teachings/bible" class="w-full px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-black rounded-full hover:from-blue-800 hover:to-blue-600 transition-all transform hover:scale-105 text-center btn-text-accent">
                            Start Study
                        </a>
                    </div>
                </div>
                
                <!-- Teaching 2: Video Sermon -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Video Sermon" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 via-purple-900/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-purple-400 text-purple-900 rounded-full text-xs font-black uppercase font-accent">Video</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">Video Sermon</h3>
                        <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                            The Power of Prayer in Student Life - Inspiring message for academic and spiritual success.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-body">45 Min</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                                <span class="font-body">HD Quality</span>
                            </div>
                        </div>
                        <a href="/teachings/video" class="w-full px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-black rounded-full hover:from-purple-700 hover:to-pink-700 transition-all transform hover:scale-105 text-center btn-text-accent">
                            Watch Now
                        </a>
                    </div>
                </div>
                
                <!-- Teaching 3: Audio Teaching -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Audio Teaching" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-green-900/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-green-400 text-green-900 rounded-full text-xs font-black uppercase font-accent">Audio</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">Audio Teaching</h3>
                        <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                            Spiritual Formation for Leaders - Essential principles for Catholic student leadership.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-body">30 Min</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                                </svg>
                                <span class="font-body">MP3</span>
                            </div>
                        </div>
                        <a href="/teachings/audio" class="w-full px-6 py-3 bg-gradient-to-r from-green-600 to-teal-600 text-white font-black rounded-full hover:from-green-700 hover:to-teal-700 transition-all transform hover:scale-105 text-center btn-text-accent">
                            Listen Now
                        </a>
                    </div>
                </div>
                
                <!-- Teaching 4: Written Resource -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Written Resource" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-orange-900/80 via-orange-900/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-orange-400 text-orange-900 rounded-full text-xs font-black uppercase font-accent">PDF</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading leading-tight">Written Resource</h3>
                        <p class="text-gray-600 mb-4 body-text-relaxed leading-relaxed">
                            Complete Guide to Campus Ministry - Comprehensive handbook for student leaders.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                <span class="font-body">85 Pages</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <span class="font-body">Download</span>
                            </div>
                        </div>
                        <a href="/teachings/guide" class="w-full px-6 py-3 bg-gradient-to-r from-orange-600 to-red-600 text-white font-black rounded-full hover:from-orange-700 hover:to-red-700 transition-all transform hover:scale-105 text-center btn-text-accent">
                            Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                <a href="/teachings/written" class="text-blue-600 text-sm hover:underline">Read →</a>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Testimonies Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%231e3a8a" fill-opacity="0.4"%3E%3Cpath d="M0 40L40 0H20L0 20M40 40V20L20 40"/%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-block px-6 py-3 bg-blue-900/10 text-blue-900 rounded-full text-sm font-black tracking-widest uppercase mb-6 border border-blue-900/20 font-accent">
                    Success Stories
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-display text-blue-900 mb-6 leading-tight tracking-tight">
                    Member <span class="text-gradient-primary">Testimonies</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-900 to-yellow-400 mx-auto rounded-full"></div>
            </div>
            
            <!-- Testimonies Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimony 1 -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Grace Mwanga" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-blue-900/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <div class="flex items-center mb-2">
                                <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-900 font-black text-lg font-heading">GM</span>
                                </div>
                                <div>
                                    <h3 class="font-black text-lg font-heading tracking-tight">Grace Mwanga</h3>
                                    <p class="text-blue-100 text-sm font-body">University of Dar es Salaam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-900 rounded-full text-xs font-semibold font-body">Student Leader</span>
                        </div>
                        <p class="text-gray-700 body-text-relaxed leading-relaxed italic">
                            "ICCRTZ transformed my university experience. I found a community that helped me grow spiritually and develop leadership skills I never knew I had. The fellowship gave me purpose and direction."
                        </p>
                        <div class="flex items-center mt-4 text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="font-body">Class of 2023</span>
                        </div>
                    </div>
                </div>
                
                <!-- Testimony 2 -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Joseph Kimaro" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 via-purple-900/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <div class="flex items-center mb-2">
                                <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-purple-900 font-black text-lg font-heading">JK</span>
                                </div>
                                <div>
                                    <h3 class="font-black text-lg font-heading tracking-tight">Joseph Kimaro</h3>
                                    <p class="text-purple-100 text-sm font-body">Alumni, Class of 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 bg-purple-100 text-purple-900 rounded-full text-xs font-semibold font-body">Professional</span>
                        </div>
                        <p class="text-gray-700 body-text-relaxed leading-relaxed italic">
                            "The fellowship prepared me not just for my career but for life. The values and relationships I built continue to guide me professionally and personally. ICCRTZ shaped who I am today."
                        </p>
                        <div class="flex items-center mt-4 text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="font-body">Software Engineer</span>
                        </div>
                    </div>
                </div>
                
                <!-- Testimony 3 -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Anna Kileo" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-green-900/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <div class="flex items-center mb-2">
                                <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-900 font-black text-lg font-heading">AK</span>
                                </div>
                                <div>
                                    <h3 class="font-black text-lg font-heading tracking-tight">Anna Kileo</h3>
                                    <p class="text-green-100 text-sm font-body">Campus Coordinator</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 bg-green-100 text-green-900 rounded-full text-xs font-semibold font-body">Leadership</span>
                        </div>
                        <p class="text-gray-700 body-text-relaxed leading-relaxed italic">
                            "Serving in ICCRTZ leadership has been the most rewarding experience. Seeing students grow in their faith and become leaders gives me great joy. This is my calling and passion."
                        </p>
                        <div class="flex items-center mt-4 text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="font-body">5 Years Service</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center mt-16">
                <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-black font-heading mb-4">Share Your Story</h3>
                    <p class="text-blue-100 mb-6 body-text-relaxed max-w-2xl mx-auto">
                        Has ICCRTZ impacted your life? We'd love to hear your testimony and share it with our community to inspire others.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/testimonies/share" class="px-8 py-3 bg-yellow-400 text-blue-900 font-black rounded-full hover:bg-yellow-300 transition-all transform hover:scale-105 btn-text-accent">
                            Share Your Testimony
                        </a>
                        <a href="/testimonies" class="px-8 py-3 bg-white/20 backdrop-blur-sm text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all font-heading">
                            Read More Stories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Partner Universities Section -->
<section class="py-20 bg-gradient-to-br from-white to-gray-50 relative overflow-hidden">
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        .animate-scroll {
            animation: scroll 30s linear infinite;
        }
        
        #universities-slider:hover {
            animation-play-state: paused;
        }
    </style>
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%231e3a8a" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-block px-6 py-3 bg-blue-900/10 text-blue-900 rounded-full text-sm font-black tracking-widest uppercase mb-6 border border-blue-900/20 font-accent">
                    Our Partners
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-display text-blue-900 mb-6 leading-tight tracking-tight">
                    Partner <span class="text-gradient-primary">Universities</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-900 to-yellow-400 mx-auto rounded-full mb-4"></div>
                <p class="text-lg text-gray-600 body-text-relaxed max-w-3xl mx-auto">
                    ICCRTZ is proud to partner with leading universities across Tanzania, bringing Catholic fellowship to campuses nationwide.
                </p>
            </div>
            
            <!-- Universities Slider Container -->
            <div class="relative overflow-hidden">
                <div class="flex space-x-6 animate-scroll" id="universities-slider">
                    <!-- University of Dar es Salaam -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-blue-900 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">UDSM</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">University of Dar es Salaam</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 1961</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Dar es Salaam</span>
                        </div>
                    </div>
                    
                    <!-- University of Dodoma -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-green-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">UDOM</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">University of Dodoma</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 2007</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Dodoma</span>
                        </div>
                    </div>
                    
                    <!-- State University of Zanzibar -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-teal-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">SUZA</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">State University of Zanzibar</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 2002</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Zanzibar</span>
                        </div>
                    </div>
                    
                    <!-- Muhimbili University -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-red-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">MUHAS</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">Muhimbili University of Health</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 1991</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Dar es Salaam</span>
                        </div>
                    </div>
                    
                    <!-- Ardhi University -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-orange-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">ARU</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">Ardhi University</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 2007</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Dar es Salaam</span>
                        </div>
                    </div>
                    
                    <!-- St. Augustine University -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-purple-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">SAUT</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">St. Augustine University</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 2006</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Mwanza</span>
                        </div>
                    </div>
                    
                    <!-- Sokoine University -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-yellow-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">SUA</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">Sokoine University</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 1984</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Morogoro</span>
                        </div>
                    </div>
                    
                    <!-- University of Iringa -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-indigo-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">UCI</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">University of Iringa</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 2005</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Iringa</span>
                        </div>
                    </div>
                    
                    <!-- Duplicate set for seamless loop -->
                    <!-- University of Dar es Salaam -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-blue-900 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">UDSM</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">University of Dar es Salaam</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 1961</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Dar es Salaam</span>
                        </div>
                    </div>
                    
                    <!-- University of Dodoma -->
                    <div class="flex-shrink-0 w-64 group bg-white rounded-2xl shadow-lg border border-gray-100 p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-green-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-xl font-heading">UDOM</span>
                        </div>
                        <h3 class="font-bold text-blue-900 font-heading mb-2">University of Dodoma</h3>
                        <p class="text-sm text-gray-600 font-body mb-3">Est. 2007</p>
                        <div class="flex items-center justify-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-body">Dodoma</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Statistics Section -->
            <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-2xl p-8 text-white">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <div>
                        <div class="text-3xl font-black font-display mb-2">25+</div>
                        <p class="text-blue-100 font-body">Partner Universities</p>
                    </div>
                    <div>
                        <div class="text-3xl font-black font-display mb-2">50K+</div>
                        <p class="text-blue-100 font-body">Students Reached</p>
                    </div>
                    <div>
                        <div class="text-3xl font-black font-display mb-2">100+</div>
                        <p class="text-blue-100 font-body">Active Chapters</p>
                    </div>
                    <div>
                        <div class="text-3xl font-black font-display mb-2">30+</div>
                        <p class="text-blue-100 font-body">Years Partnership</p>
                    </div>
                </div>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center mt-12">
                <a href="/universities" class="group inline-flex items-center px-8 py-4 bg-blue-900 text-white font-black rounded-full hover:bg-blue-800 transition-all transform hover:scale-105 btn-text-accent">
                    View All University Partners
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events Section -->
<!-- Advanced Support Our Ministry Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%231e3a8a" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-32 h-32 bg-yellow-400 rounded-full filter blur-2xl"></div>
        <div class="absolute bottom-10 left-10 w-48 h-48 bg-blue-400 rounded-full filter blur-2xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-block px-6 py-3 bg-blue-900/10 text-blue-900 rounded-full text-sm font-black tracking-widest uppercase mb-6 border border-blue-900/20 font-accent">
                    Give Back
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-display text-blue-900 mb-6 leading-tight tracking-tight">
                    Support Our <span class="text-gradient-primary">Ministry</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-900 to-yellow-400 mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-600 body-text-relaxed max-w-3xl mx-auto">
                    Your generous support helps us continue our mission of empowering Catholic students and alumni across Tanzania through spiritual formation, leadership development, and community service.
                </p>
            </div>
            
            <!-- Giving Options Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- One-time Gift -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-32 bg-gradient-to-br from-yellow-400 to-orange-500">
                        <div class="absolute inset-0 opacity-20">
                            <div class="absolute top-4 right-4 w-16 h-16 bg-white rounded-full filter blur-xl"></div>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-black font-heading text-blue-900 mb-3">One-time Gift</h3>
                        <p class="text-gray-600 body-text-relaxed mb-6 leading-relaxed">
                            Make a single donation to support our programs and help us reach more students across Tanzania.
                        </p>
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-body">Tax-deductible donation</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-body">Immediate impact</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-body">Flexible amount</span>
                            </div>
                        </div>
                        <a href="/donate/once" class="w-full group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white font-black rounded-full hover:from-yellow-500 hover:to-orange-600 transition-all transform hover:scale-105 btn-text-accent">
                            Give One-time Gift
                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Monthly Partner -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-32 bg-gradient-to-br from-blue-600 to-blue-800">
                        <div class="absolute inset-0 opacity-20">
                            <div class="absolute top-4 right-4 w-16 h-16 bg-white rounded-full filter blur-xl"></div>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-black font-heading text-blue-900 mb-3">Monthly Partner</h3>
                        <p class="text-gray-600 body-text-relaxed mb-6 leading-relaxed">
                            Become a monthly partner in our mission and provide sustained support for our ongoing programs.
                        </p>
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-body">Consistent impact</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-body">Easy to manage</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-body">Special partner benefits</span>
                            </div>
                        </div>
                        <a href="/donate/monthly" class="w-full group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-800 text-white font-black rounded-full hover:from-blue-700 hover:to-blue-900 transition-all transform hover:scale-105 btn-text-accent">
                            Become Partner
                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Sponsor a Student -->
                <div class="group bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="relative h-32 bg-gradient-to-br from-purple-600 to-pink-600">
                        <div class="absolute inset-0 opacity-20">
                            <div class="absolute top-4 right-4 w-16 h-16 bg-white rounded-full filter blur-xl"></div>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-black font-heading text-blue-900 mb-3">Sponsor a Student</h3>
                        <p class="text-gray-600 body-text-relaxed mb-6 leading-relaxed">
                            Support a student's participation in our programs and make a direct impact on their spiritual journey.
                        </p>
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-body">Direct student impact</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-body">Personal connection</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-body">Life-changing opportunity</span>
                            </div>
                        </div>
                        <a href="/donate/sponsor" class="w-full group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-black rounded-full hover:from-purple-700 hover:to-pink-700 transition-all transform hover:scale-105 btn-text-accent">
                            Sponsor Student
                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Impact Statistics -->
            <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-2xl p-8 text-white mb-12">
                <h3 class="text-2xl font-black font-heading text-center mb-8">Your Impact in 2024</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-black font-display text-yellow-400 mb-2">2,500+</div>
                        <p class="text-blue-100 font-body">Students Supported</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-black font-display text-yellow-400 mb-2">150+</div>
                        <p class="text-blue-100 font-body">Events Hosted</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-black font-display text-yellow-400 mb-2">25</div>
                        <p class="text-blue-100 font-body">Universities Reached</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-black font-display text-yellow-400 mb-2">100%</div>
                        <p class="text-blue-100 font-body">Funds Used Locally</p>
                    </div>
                </div>
            </div>
            
            <!-- Additional Giving Options -->
            <div class="text-center">
                <div class="mb-8">
                    <h3 class="text-2xl font-black font-heading text-blue-900 mb-4">Other Ways to Give</h3>
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="inline-flex items-center px-4 py-2 bg-gray-100 rounded-full">
                            <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            <span class="text-sm font-body">Bank Transfer</span>
                        </div>
                        <div class="inline-flex items-center px-4 py-2 bg-gray-100 rounded-full">
                            <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span class="text-sm font-body">Mobile Money</span>
                        </div>
                        <div class="inline-flex items-center px-4 py-2 bg-gray-100 rounded-full">
                            <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm font-body">Check Donation</span>
                        </div>
                        <div class="inline-flex items-center px-4 py-2 bg-gray-100 rounded-full">
                            <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span class="text-sm font-body">Corporate Sponsorship</span>
                        </div>
                    </div>
                </div>
                
                <!-- Main CTA -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/donate" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-black rounded-full hover:from-blue-800 hover:to-blue-600 transition-all transform hover:scale-105 btn-text-accent">
                        Donate Now
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="/contact" class="group inline-flex items-center px-8 py-4 bg-white text-blue-900 font-black rounded-full border-2 border-blue-900 hover:bg-blue-50 transition-all transform hover:scale-105 btn-text-accent">
                        Contact Development Team
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Simple Stay Connected Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-black text-blue-900 mb-4 font-heading">Stay Connected</h2>
            <p class="text-lg text-gray-600 mb-8">
                Subscribe to our newsletter for updates on events, teachings, and ministry news.
            </p>
            <form class="flex flex-col sm:flex-row gap-4" onsubmit="handleNewsletterSubmit(event)">
                <input type="email" placeholder="Enter your email address" required
                       class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                <button type="submit" class="px-8 py-3 bg-blue-900 text-white font-black rounded-full hover:bg-blue-800 transition-all transform hover:scale-105">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
    
    <script>
        function handleNewsletterSubmit(event) {
            event.preventDefault();
            const button = event.target.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;
            button.innerHTML = '✓ Subscribed!';
            button.classList.add('bg-green-600');
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.classList.remove('bg-green-600');
                event.target.reset();
            }, 3000);
        }
    </script>
</section>

<!-- Advanced Footer -->
<footer class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="0.4"%3E%3Cpath d="M0 40L40 0H20L0 20M40 40V20L20 40"/%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-64 h-64 bg-yellow-400/10 rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-white/5 rounded-full filter blur-3xl animate-pulse" style="animation-delay: 3s;"></div>
        <div class="absolute top-1/2 right-1/3 w-72 h-72 bg-blue-400/10 rounded-full filter blur-2xl animate-pulse" style="animation-delay: 5s;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-7xl mx-auto py-16">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Organization Info -->
                <div class="lg:col-span-1">
                    <div class="mb-6">
                        <h3 class="text-2xl font-black font-display text-white mb-2">ICCRTZ</h3>
                        <p class="text-blue-200 text-sm font-accent">Inter-Colleges Catholic Charismatic Renewal Tanzania</p>
                    </div>
                    <p class="text-blue-100 mb-6 leading-relaxed">
                        Uniting Catholic students in colleges and higher education institutions through the Holy Spirit – Unity, Love, Evangelization.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/20 transition-all transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/20 transition-all transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/20 transition-all transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/20 transition-all transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-black font-heading text-white mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/about" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            About Us
                        </a></li>
                        <li><a href="/events" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Events
                        </a></li>
                        <li><a href="/students/join" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Join as Student
                        </a></li>
                        <li><a href="/alumni/register" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Alumni Registration
                        </a></li>
                        <li><a href="/news" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            News & Updates
                        </a></li>
                    </ul>
                </div>
                
                <!-- Resources -->
                <div>
                    <h4 class="text-lg font-black font-heading text-white mb-6">Resources</h4>
                    <ul class="space-y-3">
                        <li><a href="/resources" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Prayer Resources
                        </a></li>
                        <li><a href="/resources" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Leadership Materials
                        </a></li>
                        <li><a href="/resources" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Bible Studies
                        </a></li>
                        <li><a href="/gallery" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Photo Gallery
                        </a></li>
                        <li><a href="/contact" class="text-blue-200 hover:text-white transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Contact Us
                        </a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h4 class="text-lg font-black font-heading text-white mb-6">Stay Connected</h4>
                    <p class="text-blue-200 mb-6">Subscribe to our newsletter for updates on events, news, and spiritual growth opportunities.</p>
                    <form onsubmit="handleNewsletterSubmit(event)" class="space-y-4">
                        <div class="relative">
                            <input type="email" 
                                   placeholder="Enter your email" 
                                   required
                                   class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all">
                            <svg class="absolute right-3 top-3.5 w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-400 text-blue-900 font-black rounded-lg hover:from-yellow-500 hover:to-orange-500 transition-all transform hover:scale-105 btn-text-accent shadow-lg">
                            Subscribe Now
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="border-t border-white/10 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-blue-200 text-sm mb-4 md:mb-0">
                        © 2024 ICCRTZ. All rights reserved. Uniting Catholic students through the Holy Spirit.
                    </div>
                    <div class="flex flex-wrap items-center gap-6 text-sm">
                        <a href="/privacy" class="text-blue-200 hover:text-white transition-colors">Privacy Policy</a>
                        <a href="/terms" class="text-blue-200 hover:text-white transition-colors">Terms of Service</a>
                        <a href="/contact" class="text-blue-200 hover:text-white transition-colors">Contact</a>
                        <div class="flex items-center text-blue-200">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Tanzania
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection
