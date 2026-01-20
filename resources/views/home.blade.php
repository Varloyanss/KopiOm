@extends('layouts.app')

@section('content')
    <!-- VIDEO INTRO SECTION (CINEMATIC SMALL HEIGHT) -->
    <div class="relative w-full overflow-hidden h-[90px] md:h-[200px] lg:h-40">
        <video autoplay muted loop playsinline class="w-full h-full object-cover">
            <source src="/videos/display.mp4" type="video/mp4">
        </video>

        <!-- Overlay ambience -->
        <div class="absolute inset-0 bg-black/35"></div>
    </div>



    <!-- HERO -->
    <div data-aos="fade-up"
        class="hero-parallax relative h-[90vh] bg-[url('/images/kopiom-bg.jpg')] bg-cover bg-center flex items-center justify-center">

        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 text-center text-white max-w-3xl p-12">
            <!-- LOGO -->
            <img data-aos="fade-down" src="/images/logo.png" alt="Logo Kopi Om"
                class="mx-auto mb-8 w-40 h-auto drop-shadow-[0_0_15px_rgba(0, 0, 0, 0.584)]">
            <h1 class="text-6xl font-bold mb-6 leading-tight tracking-tight">
                Om Punya <span class="text-amber-400">Rasa</span>,<br>
                Kamu Punya <span class="text-amber-400">Selera</span>.
            </h1>

            <p class="text-lg mb-8 opacity-90 max-w-xl mx-auto">
                Di sini, kita bertemu di tengah rasa. Yang satu memberi, yang satu memilih.
            </p>

            <a href="/menu"
                class="px-10 py-4 bg-amber-600 hover:bg-amber-700 rounded-full text-lg font-medium transition smooth-lift">
                Lihat Menu
            </a>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <section data-aos="fade-up" class="max-w-7xl mx-auto py-20 px-6 grid md:grid-cols-2 gap-16 items-center">
        <img src="/images/home.png" class="rounded-2xl shadow-lg object-cover h-[450px] w-full" />
        <div>
            <h2 class="text-4xl font-bold mb-4">Tempat untuk Berhenti Sejenak</h2>
            <p class="leading-relaxed text-lg mb-6">
                Kopi Om bukan hanya sekadar tempat minum kopi. Ini adalah ruang untuk bertemu, berbagi cerita, menemukan
                ide, dan menikmati momen tanpa tergesa.
            </p>
            <a href="/tentang" class="text-amber-400 font-medium hover:underline">Kenali Lebih Dalam →</a>
        </div>
    </section>


    <!-- VIBES -->
    <section data-aos="fade-up" class="bg-stone-900 text-stone-200 py-20 text-center">
        <h2 class="text-4xl font-bold mb-8">
            <span class="text-amber-400">Kopi Om</span> Vibes
        </h2>
        <p class="max-w-2xl mx-auto mb-12 opacity-90">
            Nyaman. Hangat. Santai. Ruang yang dibuat untuk semua momenmu.
        </p>

        <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">
            <!-- Ngopi Sendiri -->
            <div class="p-6 border border-stone-700 rounded-xl smooth-lift bg-[#1a1a1a]">
                <img src="/images/vibe1.jpg" alt="Ngopi Sendiri" class="rounded-lg mb-4 h-[180px] w-full object-cover">
                <h3 class="text-xl font-semibold mb-2">Ngopi Sendiri</h3>
                <p class="opacity-75">Nikmati waktu berkualitas bersama diri sendiri.</p>
            </div>

            <!-- Kerja / Ngoding -->
            <div class="p-6 border border-stone-700 rounded-xl smooth-lift bg-[#1a1a1a]">
                <img src="/images/vibe2.jpg" alt="Kerja / Ngoding" class="rounded-lg mb-4 h-[180px] w-full object-cover">
                <h3 class="text-xl font-semibold mb-2">Kerja / Ngoding</h3>
                <p class="opacity-75">Wifi kencang, suasana tenang, mood aman.</p>
            </div>

            <!-- Nongkrong Bareng -->
            <div class="p-6 border border-stone-700 rounded-xl smooth-lift bg-[#1a1a1a]">
                <img src="/images/vibe3.jpg" alt="Nongkrong Bareng" class="rounded-lg mb-4 h-[180px] w-full object-cover">
                <h3 class="text-xl font-semibold mb-2">Nongkrong Bareng</h3>
                <p class="opacity-75">Ngobrol santai, ketawa lepas, cerita ngalir.</p>
            </div>
        </div>
    </section>
@endsection
