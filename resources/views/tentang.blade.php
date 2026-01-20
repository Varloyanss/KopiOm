@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section
        class="relative h-[45vh] bg-[url('/images/tentang-bg.jpg')] bg-cover bg-center flex items-center justify-center">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center text-white max-w-3xl px-6">
            <h1 class="text-5xl font-bold mb-4">Tentang <span class="text-amber-400">Kopi Om</span></h1>
            <p class="text-[#F4EBDD]/80 text-lg">Tempat di mana rasa dan cerita bertemu.
                Dari segelas kopi, lahir banyak momen yang berarti.</p>
        </div>
    </section>

    <!-- CERITA KOPI OM -->
    <section data-aos="fade-up" class="max-w-7xl mx-auto py-20 px-6 grid md:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-4xl font-bold mb-4 text-amber-400">Filosofi Kopi Om</h2>
            <p class="text-[#F4EBDD]/80 leading-relaxed mb-6">
                Kopi Om lahir dari semangat sederhana: menghadirkan rasa yang tulus dalam setiap cangkir.
                Kami percaya, kopi bukan sekadar minuman — tapi bahasa universal yang bisa menyatukan siapa saja.
                Di sini, setiap racikan kopi punya cerita. Dari biji pilihan, tangan barista, sampai obrolan hangat di meja
                kamu.
            </p>
            <p class="text-[#F4EBDD]/70 leading-relaxed">
                "Om Punya Rasa, Kamu Punya Selera" bukan cuma tagline, tapi komitmen kami untuk selalu menghadirkan
                pengalaman ngopi yang otentik, hangat, dan penuh makna.
            </p>
        </div>
        <img src="/images/logo.png" alt="Suasana Kopi Om"
            class="rounded-2xl shadow-lg object-cover w-full h-[250px] md:h-[400px]">
    </section>

    <!-- FOTO GALERI -->
    <section data-aos="fade-up" class="bg-stone-900 py-20">
        <h2 class="text-4xl font-bold text-center mb-12 text-amber-400">Suasana di Kopi Om</h2>
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6 px-6">
            <img src="/images/interior.jpg" alt="Interior Kopi Om"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift">
            <img src="/images/barista.jpg" alt="Barista Kopi Om"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift">
            <img src="/images/pengunjung.jpg" alt="Pengunjung di Kopi Om"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift">
        </div>
    </section>

    <!-- GOOGLE MAPS -->
    <section data-aos="fade-up" class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-center text-amber-400 mb-8">Lokasi Kami</h2>
        <div class="rounded-2xl overflow-hidden border border-[#333] shadow-md shadow-black/30">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0575304572317!2d110.82361739999999!3d-7.568707199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17bb47431581%3A0xa057e357b8ed3f90!2sKopi%20Om!5e0!3m2!1sid!2sid!4v1762619274330!5m2!1sid!2sid"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
