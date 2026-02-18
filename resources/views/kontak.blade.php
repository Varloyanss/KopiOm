@extends('layouts.app')

@section('content')
    <!-- HERO KONTAK (DENGAN BACKGROUND FOTO) -->
    <section
        class="relative h-[45vh] bg-[url('/images/kontak-bg2.jpg')] bg-cover bg-center flex items-center justify-center">
        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Konten -->
        <div class="relative z-10 text-center text-white max-w-3xl px-6">
            <h1 class="text-5xl font-bold mb-3">
                Temui <span class="text-amber-400">Kopi Om</span>
            </h1>
            <p class="text-[#F4EBDD]/80 max-w-xl mx-auto">
                Om Punya Rasa, Kamu Punya Selera — dan kita ketemu di tengah cerita.
                Yuk, mampir dan ngobrol langsung bareng kami!
            </p>
        </div>
    </section>


    <!-- INFORMASI KONTAK -->
    <section data-aos="fade-up" class="max-w-4xl mx-auto py-16 px-6">
        <h2 class="text-3xl font-bold mb-8 text-amber-400 text-center">Informasi Kontak</h2>

        <div class="bg-[#1a1a1a] border border-[#333] rounded-2xl p-10 shadow-md shadow-black/20">
            <ul class="space-y-6 text-[#F4EBDD]/80 text-lg">
                <li>
                    <span class="font-semibold text-white">📍 Alamat:</span><br>
                    Jl. Teuku Umar No.43, Keprabon, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131
                </li>
                <li>
                    <span class="font-semibold text-white">🕓 Jam Buka:</span><br>
                    Senin – Sabtu: 10.00 – 02.00 WIB<br>
                    Minggu: 06.00 - 02.00 WIB

                </li>
                <li>
                    <span class="font-semibold text-white">📞 Telepon:</span><br>
                    <a href="https://wa.me/6287888906888" target="_blank" class="text-amber-400 hover:underline">
                        +62 878-8890-6888
                    </a>

                </li>
                <li>
                    <span class="font-semibold text-white">📸 Instagram:</span><br>
                    <a href="https://www.instagram.com/kopiom_id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank" class="text-amber-400 hover:underline">@kopi.om</a>
                </li>
            </ul>
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
        <!-- CTA GOFOOD -->
    <div data-aos="fade-up" class="text-center mt-10 mb-24">
        <a href="https://gofood.link/a/NnJ5nLC"
           target="_blank"
           class="inline-block px-10 py-4 bg-amber-600 hover:bg-amber-700 text-lg font-semibold rounded-full transition smooth-lift">
            Pesan Lewat GoFood 🚀
        </a>

        <p class="text-sm text-[#F4EBDD]/60 mt-3">
            Klik untuk pesan langsung lewat GoFood.
        </p>
    </div>
@endsection
