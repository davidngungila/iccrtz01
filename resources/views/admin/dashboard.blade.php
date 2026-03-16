@extends('layouts.app')

@section('title', 'Admin Dashboard - CCT-UF Management System')
@section('description', 'Admin dashboard for managing Catholic Charismatic Tanzania Universities Fellowship')

@section('content')
<!-- Admin Header -->
<section class="bg-blue-900 text-white py-6">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold">Admin Dashboard</h1>
                <p class="text-blue-200">CCT-UF Management System</p>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-sm">Welcome, Admin</span>
                <button class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg text-sm">
                    Logout
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Dashboard Content -->
<section class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Statistics Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="card p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Total Students</p>
                        <p class="text-3xl font-bold text-blue-900">10,245</p>
                        <p class="text-green-600 text-sm">↑ 12% from last month</p>
                    </div>
                    <div class="text-4xl text-blue-600">👥</div>
                </div>
            </div>
            
            <div class="card p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Total Alumni</p>
                        <p class="text-3xl font-bold text-blue-900">5,187</p>
                        <p class="text-green-600 text-sm">↑ 8% from last month</p>
                    </div>
                    <div class="text-4xl text-blue-600">🎓</div>
                </div>
            </div>
            
            <div class="card p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Active Events</p>
                        <p class="text-3xl font-bold text-blue-900">24</p>
                        <p class="text-orange-600 text-sm">3 this week</p>
                    </div>
                    <div class="text-4xl text-blue-600">📅</div>
                </div>
            </div>
            
            <div class="card p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Monthly Donations</p>
                        <p class="text-3xl font-bold text-blue-900">TZS 2.5M</p>
                        <p class="text-green-600 text-sm">↑ 15% from last month</p>
                    </div>
                    <div class="text-4xl text-blue-600">💰</div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card p-6 mb-8">
            <h2 class="text-xl font-bold text-blue-900 mb-4">Quick Actions</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <a href="/admin/events/create" class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                    <div class="text-2xl mb-2">➕</div>
                    <p class="text-sm font-semibold">New Event</p>
                </a>
                <a href="/admin/users/create" class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                    <div class="text-2xl mb-2">👤</div>
                    <p class="text-sm font-semibold">Add User</p>
                </a>
                <a href="/admin/content/create" class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                    <div class="text-2xl mb-2">📝</div>
                    <p class="text-sm font-semibold">New Post</p>
                </a>
                <a href="/admin/donations" class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                    <div class="text-2xl mb-2">💵</div>
                    <p class="text-sm font-semibold">Donations</p>
                </a>
                <a href="/admin/reports" class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                    <div class="text-2xl mb-2">📊</div>
                    <p class="text-sm font-semibold">Reports</p>
                </a>
                <a href="/admin/settings" class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                    <div class="text-2xl mb-2">⚙️</div>
                    <p class="text-sm font-semibold">Settings</p>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activities -->
            <div class="lg:col-span-2">
                <div class="card p-6">
                    <h2 class="text-xl font-bold text-blue-900 mb-4">Recent Activities</h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3 p-3 bg-gray-50 rounded-lg">
                            <div class="text-blue-600">👤</div>
                            <div class="flex-1">
                                <p class="font-semibold">New Student Registration</p>
                                <p class="text-sm text-gray-600">Grace Mwangi joined from University of Dar es Salaam</p>
                                <p class="text-xs text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3 p-3 bg-gray-50 rounded-lg">
                            <div class="text-blue-600">📅</div>
                            <div class="flex-1">
                                <p class="font-semibold">Event Registration</p>
                                <p class="text-sm text-gray-600">45 students registered for National Conference</p>
                                <p class="text-xs text-gray-500">4 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3 p-3 bg-gray-50 rounded-lg">
                            <div class="text-blue-600">💰</div>
                            <div class="flex-1">
                                <p class="font-semibold">New Donation</p>
                                <p class="text-sm text-gray-600">TZS 50,000 received from John Paul</p>
                                <p class="text-xs text-gray-500">6 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3 p-3 bg-gray-50 rounded-lg">
                            <div class="text-blue-600">📝</div>
                            <div class="flex-1">
                                <p class="font-semibold">New Blog Post</p>
                                <p class="text-sm text-gray-600">"Spiritual Growth in University" published</p>
                                <p class="text-xs text-gray-500">1 day ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events Management -->
                <div class="card p-6 mt-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-blue-900">Upcoming Events</h2>
                        <a href="/admin/events" class="text-blue-600 hover:text-blue-800 text-sm">View All →</a>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <div>
                                <p class="font-semibold">National Conference 2024</p>
                                <p class="text-sm text-gray-600">Dec 15-17, 2024 • 45 registered</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-800">Edit</button>
                                <button class="text-red-600 hover:text-red-800">Delete</button>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <div>
                                <p class="font-semibold">Student Prayer Retreat</p>
                                <p class="text-sm text-gray-600">Nov 25-26, 2024 • 32 registered</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-800">Edit</button>
                                <button class="text-red-600 hover:text-red-800">Delete</button>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <div>
                                <p class="font-semibold">Leadership Training Workshop</p>
                                <p class="text-sm text-gray-600">Dec 2, 2024 • 28 registered</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-800">Edit</button>
                                <button class="text-red-600 hover:text-red-800">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- System Status -->
                <div class="card p-6 mb-6">
                    <h3 class="text-lg font-bold text-blue-900 mb-4">System Status</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm">Database</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Online</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm">Email Service</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Active</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm">Payment Gateway</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Active</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm">Storage</span>
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">75% Full</span>
                        </div>
                    </div>
                </div>

                <!-- Recent Registrations -->
                <div class="card p-6 mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-blue-900">Recent Registrations</h3>
                        <a href="/admin/users" class="text-blue-600 hover:text-blue-800 text-sm">View All →</a>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-blue-200 rounded-full flex items-center justify-center">
                                <span class="text-xs">GM</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold">Grace Mwangi</p>
                                <p class="text-xs text-gray-600">Student • UDSM</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-blue-200 rounded-full flex items-center justify-center">
                                <span class="text-xs">JP</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold">John Paul</p>
                                <p class="text-xs text-gray-600">Alumni • SAUT</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-blue-200 rounded-full flex items-center justify-center">
                                <span class="text-xs">AK</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold">Anna Kileo</p>
                                <p class="text-xs text-gray-600">Student • UDOM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="card p-6">
                    <h3 class="text-lg font-bold text-blue-900 mb-4">This Month</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">New Students</span>
                            <span class="font-semibold">127</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">New Alumni</span>
                            <span class="font-semibold">43</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Events Held</span>
                            <span class="font-semibold">8</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Total Donations</span>
                            <span class="font-semibold">TZS 2.5M</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
