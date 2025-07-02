<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stockify - Aplikasi Manajemen Stok Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .floating-animation {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .fade-in-up {
            animation: fadeInUp 1s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 text-gray-800 antialiased overflow-x-hidden">
    <!-- Decorative Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 floating-animation"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 floating-animation" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-50 floating-animation" style="animation-delay: -1.5s;"></div>
    </div>

    <!-- Header -->
    <header class="relative z-10 bg-white/80 backdrop-blur-lg shadow-lg border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gradient">Stockify</h1>
            </div>
            <nav class="flex items-center space-x-4">
                <a href="{{ route('login') }}" class="px-6 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-300 rounded-lg hover:bg-blue-50">Login</a>
                <a href="{{ route('register') }}" class="px-6 py-3 text-sm font-medium text-white btn-gradient rounded-xl shadow-lg">Register</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="relative z-10 flex flex-col items-center justify-center px-4 py-20 text-center">
        <div class="max-w-4xl fade-in-up">
            <!-- Hero Icon/Illustration -->
            <div class="relative mb-8">
                <div class="w-64 h-64 mx-auto bg-gradient-to-r from-blue-400 to-purple-500 rounded-3xl flex items-center justify-center floating-animation shadow-2xl">
                    <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <div class="absolute -top-4 -right-4 w-8 h-8 bg-yellow-400 rounded-full pulse-animation"></div>
                <div class="absolute -bottom-6 -left-6 w-6 h-6 bg-green-400 rounded-full pulse-animation" style="animation-delay: -1s;"></div>
            </div>

            <h2 class="text-6xl font-bold mb-6 leading-tight">
                Selamat Datang di <br>
                <span class="text-gradient">Stockify</span>
            </h2>
            <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-2xl mx-auto">
                Aplikasi manajemen stok barang modern untuk bisnis yang efisien. Cocok untuk Admin, Manajer Gudang, dan
                Staff Gudang.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <button class="px-8 py-4 btn-gradient text-white font-semibold rounded-xl shadow-lg text-lg">
                    Mulai Sekarang
                </button>
                <button class="px-8 py-4 bg-white text-gray-700 font-semibold rounded-xl border-2 border-gray-200 hover:border-blue-300 transition-all duration-300 shadow-md text-lg">
                    Pelajari Lebih Lanjut
                </button>
            </div>
        </div>

        <!-- Feature Highlights -->
        <div class="mt-24 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl w-full px-4">
            <!-- Feature Card 1 -->
            <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-xl p-8 card-hover border border-white/20">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Manajemen Produk</h3>
                <p class="text-gray-600 leading-relaxed">
                    Kelola kategori, supplier, dan atribut produk. Tambah, edit, dan lihat stok dengan mudah menggunakan interface yang intuitif.
                </p>
            </div>

            <!-- Feature Card 2 -->
            <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-xl p-8 card-hover border border-white/20">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Transaksi Stok</h3>
                <p class="text-gray-600 leading-relaxed">
                    Catat barang masuk & keluar, pantau stok minimum, dan lakukan stock opname dengan sistem tracking yang akurat.
                </p>
            </div>

            <!-- Feature Card 3 -->
            <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-xl p-8 card-hover border border-white/20">
                <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Laporan Dinamis</h3>
                <p class="text-gray-600 leading-relaxed">
                    Dapatkan laporan real-time stok barang, aktivitas pengguna, dan riwayat transaksi dengan visualisasi yang mudah dipahami.
                </p>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="mt-24 grid grid-cols-1 md:grid-cols-4 gap-8 max-w-6xl w-full px-4">
            <div class="text-center">
                <div class="text-4xl font-bold text-gradient mb-2">1000+</div>
                <div class="text-gray-600 font-medium">Produk Dikelola</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-gradient mb-2">500+</div>
                <div class="text-gray-600 font-medium">Pengguna Aktif</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-gradient mb-2">99.9%</div>
                <div class="text-gray-600 font-medium">Uptime</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-gradient mb-2">24/7</div>
                <div class="text-gray-600 font-medium">Support</div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="relative z-10 bg-white/80 backdrop-blur-lg py-8 border-t border-white/20 mt-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-3 mb-4 md:mb-0">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-gradient">Stockify</span>
                </div>
                <div class="text-sm text-gray-500">
                    © <span id="currentYear"></span> Stockify. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Set current year
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        
        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.card-hover').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>