@extends('layouts.app')

@section('title', 'About - Catholic Charismatic Tanzania Universities Fellowship')
@section('description', 'Learn about Catholic Charismatic Tanzania Universities Fellowship - our history, vision, mission, and leadership.')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">About the Fellowship</h1>
        <p class="text-xl max-w-3xl mx-auto">
            Discover our rich history, inspiring vision, and the dedicated leadership that guides Catholic Charismatic Tanzania Universities Fellowship.
        </p>
    </div>
</section>

<!-- About Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <h2 class="text-3xl font-bold text-blue-900 mb-6">Who We Are</h2>
                <div class="prose max-w-none text-gray-700">
                    <p class="text-lg mb-4">
                        Catholic Charismatic Tanzania Universities Fellowship (CCT-UF) is a vibrant spiritual community dedicated to nurturing 
                        the faith and leadership development of Catholic students and alumni across Tanzania's universities.
                    </p>
                    <p class="mb-4">
                        Founded on the principles of Catholic charismatic spirituality, we provide a platform for young Catholics to 
                        experience the power of the Holy Spirit, develop their God-given talents, and become agents of positive 
                        transformation in their communities and nation.
                    </p>
                    <p class="mb-4">
                        Our fellowship brings together students from various universities, creating a network of support, spiritual growth, 
                        and service that extends beyond campus life into professional careers and family life through our alumni programs.
                    </p>
                </div>

                <h3 class="text-2xl font-bold text-blue-900 mt-8 mb-4">Our Core Values</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start space-x-3">
                        <div class="text-blue-600 text-xl">⛪</div>
                        <div>
                            <h4 class="font-semibold mb-1">Faith</h4>
                            <p class="text-gray-600 text-sm">Deep commitment to Catholic faith and charismatic spirituality</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="text-blue-600 text-xl">🤝</div>
                        <div>
                            <h4 class="font-semibold mb-1">Integrity</h4>
                            <p class="text-gray-600 text-sm">Living out Christian values in all aspects of life</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="text-blue-600 text-xl">💝</div>
                        <div>
                            <h4 class="font-semibold mb-1">Service</h4>
                            <p class="text-gray-600 text-sm">Dedicated to serving God and humanity</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="text-blue-600 text-xl">🌟</div>
                        <div>
                            <h4 class="font-semibold mb-1">Excellence</h4>
                            <p class="text-gray-600 text-sm">Striving for excellence in academics, ministry, and life</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="text-blue-600 text-xl">🤗</div>
                        <div>
                            <h4 class="font-semibold mb-1">Unity</div>
                            <p class="text-gray-600 text-sm">Building bridges across denominations and communities</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="text-blue-600 text-xl">❤️</div>
                        <div>
                            <h4 class="font-semibold mb-1">Compassion</h4>
                            <p class="text-gray-600 text-sm">Showing Christ's love to all people</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-24">
                    <!-- Quick Navigation -->
                    <div class="card p-6 mb-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Quick Links</h3>
                        <nav class="space-y-2">
                            <a href="/about/history" class="block text-blue-600 hover:text-blue-800 py-2 border-b border-gray-100">
                                📜 Our History
                            </a>
                            <a href="/about/vision" class="block text-blue-600 hover:text-blue-800 py-2 border-b border-gray-100">
                                👁️ Vision & Mission
                            </a>
                            <a href="/about/leadership" class="block text-blue-600 hover:text-blue-800 py-2 border-b border-gray-100">
                                👥 Leadership Team
                            </a>
                            <a href="/about/structure" class="block text-blue-600 hover:text-blue-800 py-2 border-b border-gray-100">
                                🏗️ Organizational Structure
                            </a>
                            <a href="/about/faith" class="block text-blue-600 hover:text-blue-800 py-2">
                                📖 Statement of Faith
                            </a>
                        </nav>
                    </div>

                    <!-- Statistics -->
                    <div class="card p-6 mb-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Our Impact</h3>
                        <div class="space-y-4">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600">50+</div>
                                <div class="text-sm text-gray-600">University Chapters</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600">10,000+</div>
                                <div class="text-sm text-gray-600">Student Members</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600">5,000+</div>
                                <div class="text-sm text-gray-600">Alumni Network</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600">30+</div>
                                <div class="text-sm text-gray-600">Years of Ministry</div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="card p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Get in Touch</h3>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span class="text-sm">+255 123 456 789</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm">info@cct-uf.org</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">Dar es Salaam, Tanzania</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-blue-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Join Our Community</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            Become part of a growing family of Catholic students and alumni committed to faith, leadership, and service.
        </p>
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center">
            <a href="/students/join" class="btn-primary bg-white text-blue-900 hover:bg-gray-100">Join as Student</a>
            <a href="/alumni/register" class="btn-secondary bg-yellow-400 text-blue-900 hover:bg-yellow-300">Register as Alumni</a>
        </div>
    </div>
</section>
@endsection
