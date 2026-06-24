<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muh Apriawan - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#00002A',
                            navy: '#1A3F75',
                            slate: '#4E6A9C',
                            light: '#4EA4CC',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-brand-dark text-gray-100 font-sans antialiased selection:bg-brand-light selection:text-brand-dark">

    <nav class="sticky top-0 z-50 bg-brand-dark/80 backdrop-blur-md border-b border-brand-slate/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0 flex items-center space-x-2">
                    <div class="w-3 h-3 bg-brand-light rounded-full animate-pulse"></div>
                    <span class="text-lg font-bold tracking-wider text-white">WAN<span class="text-brand-light">.DEV</span></span>
                </div>
                <div class="flex space-x-1 sm:space-x-4">
                    <a href="#hero" class="text-gray-300 hover:text-brand-light px-3 py-2 text-sm font-medium transition">Home</a>
                    <a href="#about" class="text-gray-300 hover:text-brand-light px-3 py-2 text-sm font-medium transition">About & Skills</a>
                    <a href="#projects" class="text-gray-300 hover:text-brand-light px-3 py-2 text-sm font-medium transition">Projects</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="relative min-h-[80vh] flex items-center justify-center overflow-hidden border-b border-brand-slate/20 py-12 lg:py-0">
        <div class="absolute inset-0 opacity-10 bg-[linear-gradient(to_right,#4E6A9C_1px,transparent_1px),linear-gradient(to_bottom,#4E6A9C_1px,transparent_1px)] bg-[size:32px_32px]"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-7 text-left order-2 lg:order-1 flex flex-col justify-center">
                    <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-white leading-tight">
                        Hi, I'm <span class="bg-gradient-to-r from-brand-light to-blue-300 bg-clip-text text-transparent">Muh Apriawan</span>
                    </h1>
                    
                    <p class="mt-4 text-base sm:text-xl text-gray-300 font-light leading-relaxed max-w-2xl">
                        IT Student & Developer passionate about <span class="text-brand-light font-medium">Web Development</span>, <span class="text-brand-light font-medium">Mobile Apps</span>, and <span class="text-brand-light font-medium">UI/UX Design</span>.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-x-6 gap-y-2 text-sm sm:text-base text-gray-300">
                        <a href="https://instagram.com/waannn.n_" target="_blank" class="hover:text-brand-light transition flex items-center space-x-2 group">
                            <i class="fa-brands fa-instagram text-brand-light text-lg group-hover:scale-110 transition"></i>
                            <span>Instagram</span>
                        </a>
                        <a href="mailto:muhapriawan15@gmail.com" class="hover:text-brand-light transition flex items-center space-x-2 group">
                            <i class="fa-solid fa-envelope text-brand-light text-lg group-hover:scale-110 transition"></i>
                            <span>Email</span>
                        </a>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#projects" class="bg-brand-light hover:bg-opacity-90 text-brand-dark font-semibold px-6 py-3 rounded-xl shadow-lg shadow-brand-light/20 transition transform hover:-translate-y-0.5 duration-200">
                            <i class="fa-solid fa-folder-open mr-2"></i>My Projects
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center lg:justify-end">
                    <div class="relative w-full max-w-[280px] sm:max-w-[320px] aspect-[530/677] rounded-2xl p-1 bg-gradient-to-tr from-brand-slate to-brand-light shadow-[0_0_50px_rgba(78,164,204,0.3)] group border border-brand-slate/30">
                        <div class="w-full h-full rounded-xl bg-brand-dark overflow-hidden border border-brand-dark">
                            <img src="{{ asset('img/Muh Apriawan.png') }}" onerror="this.src='https://ui-avatars.com/api/?name=Muh+Apriawan&background=1A3F75&color=fff&size=512'" alt="Muh Apriawan" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT & SKILLS -->
    <section id="about" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- About Me - UPDATED -->
            <div class="lg:col-span-1 bg-brand-navy/40 border border-brand-slate/30 rounded-2xl p-8 backdrop-blur-sm">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="p-2 bg-brand-light/10 text-brand-light rounded-lg"><i class="fa-solid fa-user"></i></div>
                    <h2 class="text-2xl font-bold text-white">About Me</h2>
                </div>
                <p class="text-gray-300 text-sm sm:text-base leading-relaxed font-light">
                    Mahasiswa aktif Teknik Informatika Universitas Tadulako yang passionate dalam pengembangan web dan aplikasi mobile. 
                    Berpengalaman membangun aplikasi web dengan Laravel, aplikasi mobile dengan Flutter & Java, serta merancang antarmuka (UI/UX) menggunakan Figma. 
                    Memiliki pemahaman dasar jaringan dan keamanan sistem, dan selalu siap menghadirkan inovasi teknologi yang memberikan dampak nyata.
                </p>
            </div>

            <!-- Skills -->
            <div class="lg:col-span-2 bg-brand-navy/40 border border-brand-slate/30 rounded-2xl p-8 backdrop-blur-sm">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="p-2 bg-brand-light/10 text-brand-light rounded-lg"><i class="fa-solid fa-code"></i></div>
                    <h2 class="text-2xl font-bold text-white">Skills & Core Tech Stack</h2>
                </div>
                
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                        <div class="text-red-400 text-2xl"><i class="fa-brands fa-laravel"></i></div>
                        <div><h4 class="text-sm font-semibold text-gray-200">Laravel</h4><p class="text-xs text-gray-400">Backend System</p></div>
                    </div>
                    <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                        <div class="text-brand-light text-2xl"><i class="fa-solid fa-mobile-screen-button"></i></div>
                        <div><h4 class="text-sm font-semibold text-gray-200">Flutter</h4><p class="text-xs text-gray-400">Mobile Framework</p></div>
                    </div>
                    <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                        <div class="text-orange-400 text-2xl"><i class="fa-brands fa-java"></i></div>
                        <div><h4 class="text-sm font-semibold text-gray-200">Java</h4><p class="text-xs text-gray-400">Android Native</p></div>
                    </div>
                    <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                        <div class="text-cyan-400 text-2xl"><i class="fa-brands fa-css3-alt"></i></div>
                        <div><h4 class="text-sm font-semibold text-gray-200">Tailwind CSS</h4><p class="text-xs text-gray-400">UI Styling</p></div>
                    </div>
                    <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                        <div class="text-blue-400 text-2xl"><i class="fa-solid fa-database"></i></div>
                        <div><h4 class="text-sm font-semibold text-gray-200">MySQL</h4><p class="text-xs text-gray-400">Database</p></div>
                    </div>
                    <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                        <div class="text-yellow-400 text-2xl"><i class="fa-brands fa-python"></i></div>
                        <div><h4 class="text-sm font-semibold text-gray-200">Python</h4><p class="text-xs text-gray-400">Automation</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TOOLS -->
    <section id="tools" class="py-4 pb-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-brand-navy/40 border border-brand-slate/30 rounded-2xl p-8 backdrop-blur-sm">
            <div class="flex items-center space-x-3 mb-6">
                <div class="p-2 bg-brand-light/10 text-brand-light rounded-lg"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <h2 class="text-2xl font-bold text-white">Tools & Software</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-wider text-brand-slate mb-3">Development</h3>
                    <div class="space-y-3">
                        <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                            <div class="text-blue-400 text-2xl"><i class="fa-solid fa-code"></i></div>
                            <div><h4 class="text-sm font-semibold text-gray-200">Visual Studio Code</h4><p class="text-xs text-gray-400">Code Editor</p></div>
                        </div>
                        <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                            <div class="text-green-400 text-2xl"><i class="fa-brands fa-android"></i></div>
                            <div><h4 class="text-sm font-semibold text-gray-200">Android Studio</h4><p class="text-xs text-gray-400">Mobile Development</p></div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-wider text-brand-slate mb-3">Security & Networking</h3>
                    <div class="space-y-3">
                        <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                            <div class="text-blue-300 text-2xl"><i class="fa-brands fa-linux"></i></div>
                            <div><h4 class="text-sm font-semibold text-gray-200">Kali Linux</h4><p class="text-xs text-gray-400">Penetration Testing</p></div>
                        </div>
                        <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                            <div class="text-sky-400 text-2xl"><i class="fa-solid fa-network-wired"></i></div>
                            <div><h4 class="text-sm font-semibold text-gray-200">Cisco Packet Tracer</h4><p class="text-xs text-gray-400">Network Simulation</p></div>
                        </div>
                        <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                            <div class="text-green-300 text-2xl"><i class="fa-solid fa-magnifying-glass"></i></div>
                            <div><h4 class="text-sm font-semibold text-gray-200">Nmap</h4><p class="text-xs text-gray-400">Network Scanner</p></div>
                        </div>
                        <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                            <div class="text-blue-300 text-2xl"><i class="fa-solid fa-wave-square"></i></div>
                            <div><h4 class="text-sm font-semibold text-gray-200">Wireshark</h4><p class="text-xs text-gray-400">Packet Analysis</p></div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-wider text-brand-slate mb-3">Design</h3>
                    <div class="space-y-3">
                        <div class="bg-brand-dark/60 border border-brand-slate/20 p-4 rounded-xl flex items-center space-x-3 hover:border-brand-light/60 transition duration-300">
                            <div class="text-purple-400 text-2xl"><i class="fa-brands fa-figma"></i></div>
                            <div><h4 class="text-sm font-semibold text-gray-200">Figma</h4><p class="text-xs text-gray-400">UI/UX Design</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS - NEW SECTION -->
    <section id="projects" class="py-4 pb-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <div class="flex items-center space-x-3 mb-2">
                <div class="p-2 bg-brand-light/10 text-brand-light rounded-lg"><i class="fa-solid fa-folder-open"></i></div>
                <h2 class="text-2xl font-bold text-white">Projects</h2>
            </div>
            <p class="text-gray-400 text-sm ml-12">Proyek yang telah saya kerjakan selama perkuliahan</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Project 1: Cyberlearn Web -->
            <div class="bg-brand-navy/40 border border-brand-slate/30 rounded-2xl p-6 backdrop-blur-sm hover:border-brand-light/50 transition duration-300 group flex flex-col">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-red-400/10 text-red-400 rounded-xl text-2xl">
                        <i class="fa-brands fa-laravel"></i>
                    </div>
                    <span class="text-xs font-medium bg-brand-dark/60 text-brand-light border border-brand-light/20 px-3 py-1 rounded-full">Web App</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-brand-light transition">Cyberlearn</h3>
                <p class="text-gray-400 text-sm leading-relaxed flex-1">Platform pembelajaran keamanan siber interaktif berbasis web. Dibangun menggunakan Framework Laravel dengan fitur materi, kuis, dan manajemen pengguna.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Laravel</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">PHP</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">MySQL</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Tailwind CSS</span>
                </div>
            </div>

            <!-- Project 2: Tiket Bioskop Java -->
            <div class="bg-brand-navy/40 border border-brand-slate/30 rounded-2xl p-6 backdrop-blur-sm hover:border-brand-light/50 transition duration-300 group flex flex-col">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-orange-400/10 text-orange-400 rounded-xl text-2xl">
                        <i class="fa-brands fa-java"></i>
                    </div>
                    <span class="text-xs font-medium bg-brand-dark/60 text-brand-light border border-brand-light/20 px-3 py-1 rounded-full">Mobile App</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-brand-light transition">Tiket Bioskop</h3>
                <p class="text-gray-400 text-sm leading-relaxed flex-1">Aplikasi mobile pemesanan tiket bioskop berbasis Android. Dilengkapi fitur pemilihan film, jadwal tayang, dan pemesanan kursi.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Java</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Android Studio</span>
                </div>
            </div>

            <!-- Project 3: Kasir Mini Flutter -->
            <div class="bg-brand-navy/40 border border-brand-slate/30 rounded-2xl p-6 backdrop-blur-sm hover:border-brand-light/50 transition duration-300 group flex flex-col">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-brand-light/10 text-brand-light rounded-xl text-2xl">
                        <i class="fa-solid fa-cash-register"></i>
                    </div>
                    <span class="text-xs font-medium bg-brand-dark/60 text-brand-light border border-brand-light/20 px-3 py-1 rounded-full">Mobile App</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-brand-light transition">Kasir Mini</h3>
                <p class="text-gray-400 text-sm leading-relaxed flex-1">Aplikasi kasir sederhana berbasis mobile untuk mencatat transaksi penjualan. Dibangun menggunakan Flutter dan Dart.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Flutter</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Dart</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Android Studio</span>
                </div>
            </div>

            <!-- Project 4: UI/UX Tiket Transportasi -->
            <div class="bg-brand-navy/40 border border-brand-slate/30 rounded-2xl p-6 backdrop-blur-sm hover:border-brand-light/50 transition duration-300 group flex flex-col">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-purple-400/10 text-purple-400 rounded-xl text-2xl">
                        <i class="fa-brands fa-figma"></i>
                    </div>
                    <span class="text-xs font-medium bg-brand-dark/60 text-brand-light border border-brand-light/20 px-3 py-1 rounded-full">UI/UX</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-brand-light transition">Tiket Transportasi</h3>
                <p class="text-gray-400 text-sm leading-relaxed flex-1">Desain antarmuka aplikasi pemesanan tiket transportasi menggunakan Figma. Fokus pada pengalaman pengguna (UX) yang interaktif dan responsif.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Figma</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">UI/UX Design</span>
                </div>
            </div>

            <!-- Project 5: IoT Deteksi Kantuk -->
            <div class="bg-brand-navy/40 border border-brand-slate/30 rounded-2xl p-6 backdrop-blur-sm hover:border-brand-light/50 transition duration-300 group flex flex-col">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div class="p-3 bg-yellow-400/10 text-yellow-400 rounded-xl text-2xl">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <!-- Badge Juara -->
                        <span class="text-xs font-bold bg-yellow-400/20 text-yellow-300 border border-yellow-400/30 px-2 py-1 rounded-full">🏆 Juara 1</span>
                    </div>
                    <span class="text-xs font-medium bg-brand-dark/60 text-brand-light border border-brand-light/20 px-3 py-1 rounded-full">IoT</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-brand-light transition">Sistem Deteksi Kantuk</h3>
                <p class="text-gray-400 text-sm leading-relaxed flex-1">Sistem deteksi kantuk berbasis IoT menggunakan ESP32-CAM dan Arduino IDE. Meraih <span class="text-yellow-300 font-medium">Juara 1 Tingkat Universitas</span>.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">ESP32-CAM</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Arduino IDE</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">IoT</span>
                </div>
            </div>

            <!-- Project 6: Profile Sederhana Flutter -->
            <div class="bg-brand-navy/40 border border-brand-slate/30 rounded-2xl p-6 backdrop-blur-sm hover:border-brand-light/50 transition duration-300 group flex flex-col">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-brand-light/10 text-brand-light rounded-xl text-2xl">
                        <i class="fa-solid fa-id-card"></i>
                    </div>
                    <span class="text-xs font-medium bg-brand-dark/60 text-brand-light border border-brand-light/20 px-3 py-1 rounded-full">Mobile App</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-brand-light transition">Profile App</h3>
                <p class="text-gray-400 text-sm leading-relaxed flex-1">Aplikasi halaman profil sederhana berbasis mobile menggunakan Flutter dan Dart sebagai pengenalan pengembangan aplikasi lintas platform.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Flutter</span>
                    <span class="text-xs bg-brand-dark/60 text-gray-300 border border-brand-slate/30 px-2 py-1 rounded-lg">Dart</span>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-brand-dark border-t border-brand-slate/20 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} Muh Apriawan. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>