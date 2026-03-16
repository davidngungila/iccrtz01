@extends('layouts.app')

@section('title', 'Students Ministry - Catholic Charismatic Tanzania Universities Fellowship')
@section('description', 'Join our vibrant student ministry - campus fellowships, prayer meetings, leadership training, and spiritual formation programs.')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Students Ministry</h1>
        <p class="text-xl max-w-3xl mx-auto">
            Discover a vibrant community where faith meets campus life. Join fellow students in spiritual growth, 
            leadership development, and meaningful service.
        </p>
    </div>
</section>

<!-- Ministry Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-bold text-blue-900 mb-6">Welcome to Student Life</h2>
            <p class="text-lg text-gray-700">
                Our student ministry is designed to help you navigate university life while growing in your Catholic faith. 
                We provide spiritual support, leadership opportunities, and a community of friends who share your values.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card p-6 text-center">
                <div class="text-5xl mb-4 text-blue-600">🙏</div>
                <h3 class="text-xl font-semibold mb-3">Spiritual Growth</h3>
                <p class="text-gray-600">Deepen your faith through prayer groups, Bible studies, and spiritual formation programs.</p>
            </div>
            <div class="card p-6 text-center">
                <div class="text-5xl mb-4 text-blue-600">👥</div>
                <h3 class="text-xl font-semibold mb-3">Community</h3>
                <p class="text-gray-600">Build lasting friendships with fellow Catholic students who share your values and aspirations.</p>
            </div>
            <div class="card p-6 text-center">
                <div class="text-5xl mb-4 text-blue-600">🎯</div>
                <h3 class="text-xl font-semibold mb-3">Leadership</h3>
                <p class="text-gray-600">Develop leadership skills through training programs and ministry opportunities.</p>
            </div>
        </div>
    </div>
</section>

<!-- Programs & Activities -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-blue-900 mb-12">Our Programs</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Campus Fellowship Groups -->
            <div class="card p-8">
                <div class="flex items-start space-x-4">
                    <div class="text-4xl text-blue-600">🏫</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-blue-900 mb-3">Campus Fellowship Groups</h3>
                        <p class="text-gray-600 mb-4">
                            Join weekly fellowship meetings on your campus where we worship together, share testimonies, 
                            and grow in our understanding of Catholic charismatic spirituality.
                        </p>
                        <ul class="space-y-2 text-gray-600 mb-4">
                            <li>• Weekly worship and praise</li>
                            <li>• Faith sharing and testimonies</li>
                            <li>• Bible study and teachings</li>
                            <li>• Social activities and outreach</li>
                        </ul>
                        <a href="/students/campus" class="text-blue-600 hover:text-blue-800 font-semibold">Find Your Campus →</a>
                    </div>
                </div>
            </div>

            <!-- Prayer Meetings -->
            <div class="card p-8">
                <div class="flex items-start space-x-4">
                    <div class="text-4xl text-blue-600">🙏</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-blue-900 mb-3">Prayer Meetings</h3>
                        <p class="text-gray-600 mb-4">
                            Experience the power of corporate prayer in our regular prayer meetings. We intercede for our 
                            campuses, nation, and personal needs.
                        </p>
                        <ul class="space-y-2 text-gray-600 mb-4">
                            <li>• Daily morning prayer sessions</li>
                            <li>• Weekly prayer nights</li>
                            <li>• Monthly prayer retreats</li>
                            <li>• Emergency prayer chains</li>
                        </ul>
                        <a href="/students/prayer" class="text-blue-600 hover:text-blue-800 font-semibold">View Schedule →</a>
                    </div>
                </div>
            </div>

            <!-- Leadership Training -->
            <div class="card p-8">
                <div class="flex items-start space-x-4">
                    <div class="text-4xl text-blue-600">🎓</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-blue-900 mb-3">Leadership Training</h3>
                        <p class="text-gray-600 mb-4">
                            Develop your leadership potential through our comprehensive training programs designed 
                            specifically for Catholic student leaders.
                        </p>
                        <ul class="space-y-2 text-gray-600 mb-4">
                            <li>• Leadership workshops and seminars</li>
                            <li>• Mentorship programs</li>
                            <li>• Practical ministry experience</li>
                            <li>• Leadership conferences</li>
                        </ul>
                        <a href="/students/leadership" class="text-blue-600 hover:text-blue-800 font-semibold">Learn More →</a>
                    </div>
                </div>
            </div>

            <!-- Bible Study Resources -->
            <div class="card p-8">
                <div class="flex items-start space-x-4">
                    <div class="text-4xl text-blue-600">📖</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-blue-900 mb-3">Bible Study Resources</h3>
                        <p class="text-gray-600 mb-4">
                            Access comprehensive Bible study materials, guides, and resources to deepen your understanding 
                            of Scripture and Catholic teachings.
                        </p>
                        <ul class="space-y-2 text-gray-600 mb-4">
                            <li>• Weekly Bible study groups</li>
                            <li>• Study guides and materials</li>
                            <li>• Online learning resources</li>
                            <li>• Scripture memorization programs</li>
                        </ul>
                        <a href="/students/resources" class="text-blue-600 hover:text-blue-800 font-semibold">Access Resources →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Student Testimonies -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-blue-900 mb-12">Student Stories</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card p-6">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl">👩‍🎓</span>
                    </div>
                    <div>
                        <p class="font-semibold">Sarah Mwangi</p>
                        <p class="text-sm text-gray-600">University of Dar es Salaam</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Joining CCT-UF transformed my university experience. I found a spiritual family that helped me 
                    navigate academic challenges while growing in my faith."
                </p>
            </div>
            
            <div class="card p-6">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl">👨‍🎓</span>
                    </div>
                    <div>
                        <p class="font-semibold">John Paul</p>
                        <p class="text-sm text-gray-600">St. Augustine University</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "The leadership training I received through CCT-UF prepared me not just for campus ministry but for 
                    my future career. I learned to lead with integrity and faith."
                </p>
            </div>
            
            <div class="card p-6">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl">👩‍🎓</span>
                    </div>
                    <div>
                        <p class="font-semibold">Grace Kileo</p>
                        <p class="text-sm text-gray-600">University of Dodoma</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "The prayer community kept me grounded during my studies. I found strength and direction through 
                    our fellowship meetings and prayer sessions."
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Student Events -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-3xl font-bold text-blue-900">Upcoming Student Events</h2>
            <a href="/events" class="text-blue-600 hover:text-blue-800 font-semibold">View All Events →</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card overflow-hidden">
                <div class="bg-blue-100 h-32 flex items-center justify-center">
                    <span class="text-4xl">🎉</span>
                </div>
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">Student Conference</div>
                    <h3 class="text-lg font-semibold mb-2">Regional Student Summit</h3>
                    <p class="text-gray-600 text-sm mb-4">Annual gathering of student leaders from all campuses.</p>
                    <div class="text-sm text-gray-500">Dec 8-10, 2024</div>
                </div>
            </div>
            
            <div class="card overflow-hidden">
                <div class="bg-blue-100 h-32 flex items-center justify-center">
                    <span class="text-4xl">🙏</span>
                </div>
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">Spiritual Event</div>
                    <h3 class="text-lg font-semibold mb-2">Student Prayer Retreat</h3>
                    <p class="text-gray-600 text-sm mb-4">Weekend retreat focused on prayer and spiritual renewal.</p>
                    <div class="text-sm text-gray-500">Nov 25-26, 2024</div>
                </div>
            </div>
            
            <div class="card overflow-hidden">
                <div class="bg-blue-100 h-32 flex items-center justify-center">
                    <span class="text-4xl">🎓</span>
                </div>
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">Training</div>
                    <h3 class="text-lg font-semibold mb-2">Student Leadership Workshop</h3>
                    <p class="text-gray-600 text-sm mb-4">Intensive training for emerging student leaders.</p>
                    <div class="text-sm text-gray-500">Dec 2, 2024</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join Us Section -->
<section class="py-16 bg-blue-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Join Our Student Ministry</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            Take the next step in your spiritual journey. Become part of our growing community of Catholic students 
            across Tanzania.
        </p>
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center">
            <a href="/students/join" class="btn-primary bg-white text-blue-900 hover:bg-gray-100">Join Now</a>
            <a href="/contact" class="btn-secondary bg-yellow-400 text-blue-900 hover:bg-yellow-300">Contact Us</a>
        </div>
    </div>
</section>
@endsection
