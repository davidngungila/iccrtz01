<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inter-Colleges Catholic Charismatic Renewal Tanzania')</title>
    
    <!-- Advanced Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="description" content="@yield('description', 'Inter-Colleges Catholic Charismatic Renewal Tanzania - Uniting Catholic students in colleges and higher education institutions through the Holy Spirit – Unity, Love, Evangelization.')">
    
    <style>
        :root {
            --font-display: 'Playfair Display', serif;
            --font-body: 'Inter', sans-serif;
            --font-heading: 'Space Grotesk', sans-serif;
            --font-serif: 'Crimson Text', serif;
            --font-accent: 'Oswald', sans-serif;
        }
        
        /* Advanced Typography Classes */
        .font-display { font-family: var(--font-display); }
        .font-body { font-family: var(--font-body); }
        .font-heading { font-family: var(--font-heading); }
        .font-serif { font-family: var(--font-serif); }
        .font-accent { font-family: var(--font-accent); }
        
        /* Text Shadow Effects */
        .text-shadow-sm { text-shadow: 0 1px 2px rgba(0,0,0,0.05); }
        .text-shadow { text-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .text-shadow-lg { text-shadow: 0 4px 8px rgba(0,0,0,0.15); }
        .text-shadow-xl { text-shadow: 0 6px 12px rgba(0,0,0,0.2); }
        .text-shadow-glow { text-shadow: 0 0 20px rgba(254, 240, 138, 0.5); }
        
        /* Advanced Letter Spacing */
        .tracking-tighter { letter-spacing: -0.05em; }
        .tracking-tight { letter-spacing: -0.025em; }
        .tracking-normal { letter-spacing: 0; }
        .tracking-wide { letter-spacing: 0.025em; }
        .tracking-wider { letter-spacing: 0.05em; }
        .tracking-widest { letter-spacing: 0.1em; }
        
        /* Line Height Optimizations */
        .leading-none { line-height: 1; }
        .leading-tight { line-height: 1.25; }
        .leading-snug { line-height: 1.375; }
        .leading-normal { line-height: 1.5; }
        .leading-relaxed { line-height: 1.625; }
        .leading-loose { line-height: 2; }
        
        /* Font Weight Variations */
        .font-thin { font-weight: 100; }
        .font-extralight { font-weight: 200; }
        .font-light { font-weight: 300; }
        .font-normal { font-weight: 400; }
        .font-medium { font-weight: 500; }
        .font-semibold { font-weight: 600; }
        .font-bold { font-weight: 700; }
        .font-extrabold { font-weight: 800; }
        .font-black { font-weight: 900; }
        
        /* Gradient Text Effects */
        .text-gradient-primary {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #d97706 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .text-gradient-secondary {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Advanced Heading Styles */
        .heading-display {
            font-family: var(--font-display);
            font-weight: 800;
            line-height: 0.9;
            letter-spacing: -0.02em;
        }
        
        .heading-accent {
            font-family: var(--font-accent);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .heading-serif {
            font-family: var(--font-serif);
            font-weight: 600;
            font-style: italic;
        }
        
        /* Body Text Optimizations */
        .body-text {
            font-family: var(--font-body);
            font-weight: 400;
            line-height: 1.6;
            letter-spacing: -0.01em;
        }
        
        .body-text-relaxed {
            font-family: var(--font-body);
            font-weight: 300;
            line-height: 1.8;
        }
        
        /* Decorative Text Elements */
        .text-decoration-underline {
            text-decoration: underline;
            text-underline-offset: 4px;
            text-decoration-thickness: 2px;
        }
        
        .text-decoration-wavy {
            text-decoration: underline wavy #fbbf24;
            text-underline-offset: 4px;
        }
        
        /* Drop Cap */
        .drop-cap::first-letter {
            float: left;
            font-family: var(--font-display);
            font-size: 4em;
            line-height: 0.8;
            margin: 0.1em 0.1em 0 0;
            color: #1e3a8a;
            font-weight: 900;
        }
        
        /* Text Animation Classes */
        .animate-text-glow {
            animation: textGlow 2s ease-in-out infinite alternate;
        }
        
        @keyframes textGlow {
            from { text-shadow: 0 0 10px rgba(251, 191, 36, 0.5); }
            to { text-shadow: 0 0 20px rgba(251, 191, 36, 0.8), 0 0 30px rgba(251, 191, 36, 0.6); }
        }
        
        .animate-text-slide {
            animation: textSlide 1s ease-out;
        }
        
        @keyframes textSlide {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Advanced Button Typography */
        .btn-text {
            font-family: var(--font-heading);
            font-weight: 600;
            letter-spacing: 0.025em;
            text-transform: none;
        }
        
        .btn-text-accent {
            font-family: var(--font-accent);
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Advanced Professional Header -->
    <header class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <!-- Top Bar -->
            <div class="bg-blue-900 text-white py-2 text-sm">
                <div class="container mx-auto px-4 flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            +255 123 456 789
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            info@cct-uf.org
                        </span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="hover:text-yellow-400 transition">Facebook</a>
                        <a href="#" class="hover:text-yellow-400 transition">Twitter</a>
                        <a href="#" class="hover:text-yellow-400 transition">Instagram</a>
                        <a href="/portal/login" class="bg-yellow-400 text-blue-900 px-3 py-1 rounded text-xs font-semibold hover:bg-yellow-300 transition">Member Portal</a>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="py-4">
                <div class="flex justify-between items-center">
                    <!-- Logo Section -->
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <img src="{{ asset('logo.png') }}" alt="ICCRTZ Logo" class="w-12 h-12 mr-3">
                            <div>
                                <h1 class="text-xl font-black text-gray-900 font-heading tracking-tight">ICCRTZ</h1>
                                <p class="text-xs text-gray-600 font-body leading-tight">Inter-Colleges Catholic Charismatic<br>Renewal Tanzania</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <div class="hidden lg:flex items-center space-x-8">
                        <a href="/" class="text-gray-700 hover:text-blue-900 font-semibold font-heading tracking-tight transition flex items-center">
                            Home
                        </a>
                        
                        <div class="relative group">
                            <button class="text-gray-700 hover:text-blue-900 font-semibold font-heading tracking-tight transition flex items-center">
                                About
                                <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                                <div class="p-4">
                                    <div class="grid grid-cols-1 gap-2">
                                        <a href="/about/history" class="flex items-center p-2 rounded-lg hover:bg-blue-50 transition">
                                            <span class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-blue-600 text-sm">📜</span>
                                            </span>
                                            <div>
                                                <p class="font-semibold text-gray-900 font-body">History</p>
                                                <p class="text-xs text-gray-600 font-body">Our journey and heritage</p>
                                            </div>
                                        </a>
                                        <a href="/about/vision" class="flex items-center p-2 rounded-lg hover:bg-blue-50 transition">
                                            <span class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-blue-600 text-sm">👁️</span>
                                            </span>
                                            <div>
                                                <p class="font-semibold text-gray-900 font-body">Vision & Mission</p>
                                                <p class="text-xs text-gray-600 font-body">What we stand for</p>
                                            </div>
                                        </a>
                                        <a href="/about/leadership" class="flex items-center p-2 rounded-lg hover:bg-blue-50 transition">
                                            <span class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-blue-600 text-sm">👥</span>
                                            </span>
                                            <div>
                                                <p class="font-semibold text-gray-900 font-body">Leadership</p>
                                                <p class="text-xs text-gray-600 font-body">Meet our team</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <button class="text-gray-700 hover:text-blue-900 font-semibold font-heading tracking-tight transition flex items-center">
                                Ministries
                                <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                                <div class="p-4">
                                    <div class="grid grid-cols-1 gap-2">
                                        <a href="/students" class="flex items-center p-2 rounded-lg hover:bg-blue-50 transition">
                                            <span class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-blue-600 text-sm">🎓</span>
                                            </span>
                                            <div>
                                                <p class="font-semibold text-gray-900 font-body">Students</p>
                                                <p class="text-xs text-gray-600 font-body">Campus ministries</p>
                                            </div>
                                        </a>
                                        <a href="/alumni" class="flex items-center p-2 rounded-lg hover:bg-blue-50 transition">
                                            <span class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-blue-600 text-sm">💼</span>
                                            </span>
                                            <div>
                                                <p class="font-semibold text-gray-900 font-body">Alumni</p>
                                                <p class="text-xs text-gray-600 font-body">Professional network</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="/events" class="text-gray-700 hover:text-blue-900 font-semibold font-heading tracking-tight transition">Events</a>
                        <a href="/teachings" class="text-gray-700 hover:text-blue-900 font-semibold font-heading tracking-tight transition">Resources</a>
                        <a href="/donate" class="bg-blue-900 text-white px-4 py-2 rounded-lg font-semibold font-heading tracking-tight hover:bg-blue-800 transition btn-text">Donate</a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <button class="lg:hidden" onclick="toggleMobileMenu()">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Mobile Navigation -->
                <div id="mobileMenu" class="hidden lg:hidden pb-4 border-t border-gray-100 mt-4 pt-4">
                    <div class="space-y-3">
                        <a href="/" class="block py-2 text-gray-700 hover:text-blue-900 font-medium">Home</a>
                        <div>
                            <button class="w-full text-left py-2 text-gray-700 hover:text-blue-900 font-medium flex justify-between items-center" onclick="toggleMobileSubmenu('about')">
                                About
                                <svg class="w-4 h-4 transform transition-transform" id="about-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="about-submenu" class="hidden pl-4 space-y-2 mt-2">
                                <a href="/about/history" class="block py-1 text-gray-600 hover:text-blue-900">History</a>
                                <a href="/about/vision" class="block py-1 text-gray-600 hover:text-blue-900">Vision & Mission</a>
                                <a href="/about/leadership" class="block py-1 text-gray-600 hover:text-blue-900">Leadership</a>
                            </div>
                        </div>
                        <div>
                            <button class="w-full text-left py-2 text-gray-700 hover:text-blue-900 font-medium flex justify-between items-center" onclick="toggleMobileSubmenu('ministries')">
                                Ministries
                                <svg class="w-4 h-4 transform transition-transform" id="ministries-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="ministries-submenu" class="hidden pl-4 space-y-2 mt-2">
                                <a href="/students" class="block py-1 text-gray-600 hover:text-blue-900">Students</a>
                                <a href="/alumni" class="block py-1 text-gray-600 hover:text-blue-900">Alumni</a>
                            </div>
                        </div>
                        <a href="/events" class="block py-2 text-gray-700 hover:text-blue-900 font-medium">Events</a>
                        <a href="/teachings" class="block py-2 text-gray-700 hover:text-blue-900 font-medium">Resources</a>
                        <a href="/donate" class="block py-2 bg-blue-900 text-white px-4 py-2 rounded-lg font-medium text-center">Donate</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/255123456789?text=Hello!%20I'm%20interested%20in%20ICCRTZ%20activities" 
       target="_blank" 
       class="fixed bottom-6 right-6 z-50 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 transform hover:scale-110 group">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
        <!-- Tooltip -->
        <div class="absolute bottom-full right-0 mb-2 px-3 py-2 bg-gray-800 text-white text-sm rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 whitespace-nowrap">
            Chat with us on WhatsApp
            <div class="absolute top-full right-4 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
        </div>
    </a>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
