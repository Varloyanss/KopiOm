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
                Di sini, setiap racikan kopi punya cerita. Dari biji pilihan, tangan barista, sampai obrolan hangat di meja kamu.
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
<section id="galeri" data-aos="fade-up" class="bg-stone-900 py-20">

        <h2 class="text-4xl font-bold text-center mb-12 text-amber-400">Suasana di Kopi Om</h2>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6 px-6">

            <!-- 3 FOTO AWAL -->
            <img src="/images/interior.jpg" alt="Interior Kopi Om"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift">

            <img src="/images/barista.jpg" alt="Barista Kopi Om"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift">

            <img src="/images/pengunjung.jpg" alt="Pengunjung di Kopi Om"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift">


            <!-- FOTO TAMBAHAN (HIDDEN + ANIMASI) -->
            <img src="/images/galeri1.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/galeri2.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/galeri3.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

             <img src="/images/galeri4.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

             <img src="/images/galeri5.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">
            
             <img src="/images/galeri6.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

             <img src="/images/galeri7.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/galeri8.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/galeri9.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/galeri10.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/vibe1.jpg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/vibe2.jpg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/vibe3.jpg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/suasana2.jpg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">

            <img src="/images/galeri11.jpeg"
                class="rounded-xl object-cover w-full h-[280px] smooth-lift opacity-0 scale-95 hidden extra-gallery transition-all duration-500">
        </div>

        <!-- TOMBOL TOGGLE -->
        <div class="text-center mt-10">
            <button id="toggleGalleryBtn" onclick="toggleGallery()"
                class="bg-amber-400 hover:bg-amber-500 text-black font-semibold px-6 py-3 rounded-lg transition">
                Lihat Semua Galeri
            </button>
        </div>
    </section>

    <!-- SCRIPT TOGGLE GALERI -->
    <script>
    let galleryShown = false;

    function toggleGallery() {
        const images = document.querySelectorAll('.extra-gallery');
        const btn = document.getElementById('toggleGalleryBtn');

        if (!galleryShown) {
            images.forEach(img => {
                img.classList.remove('hidden');

                // paksa browser reset animasi
                img.offsetHeight;

                img.classList.remove('opacity-0', 'scale-95');
                img.classList.add('opacity-100', 'scale-100');
            });

            btn.textContent = "Sembunyikan";
            btn.style.width = "auto";
            galleryShown = true;

        } else {
            images.forEach(img => {
                img.classList.remove('opacity-100', 'scale-100');
                img.classList.add('opacity-0', 'scale-95');

                setTimeout(() => {
                    img.classList.add('hidden');
                }, 400);
            });

            btn.textContent = "Lihat Semua Galeri";
            btn.style.width = "auto";
            galleryShown = false;
        }
    }
</script>


@endsection
