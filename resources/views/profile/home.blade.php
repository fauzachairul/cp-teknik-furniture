<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <main id="hero" class="h-screen bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.9)),url('{{ asset('img/bg-hero.png') }}')">

        <div class="container max-w-4xl mx-auto h-full flex justify-center items-center flex-col">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-100 mb-6 text-center">Dari Sketsa ke Realita Kami
                Wujudkan Desain Anda.</h1>
            <p class="text-lg md:text-xl text-gray-50 mb-8 max-w-2xl mx-auto text-center">
                Setiap ruang punya cerita. Kami mewujudkannya melalui desain personal dan unik, dari awal hingga akhir,
                untuk menghadirkan ruang yang indah dan menginspirasi.
            </p>


            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact"
                    class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all transform hover:scale-105 shadow-lg">
                    Konsultasi Gratis <i data-feather="wa"></i>
                </a>
                <a href="/portfolio"
                    class="bg-white hover:bg-gray-50 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold transition-all transform hover:scale-105 shadow-lg border-2 border-gray-200 flex items-center justify-center">
                    See Our Projects &#8594;
                </a>
            </div>
        </div>
    </main>

    <section id="services" class="py-20 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Kami ahli dalam menciptakan furnitur kustom yang sepenuhnya sesuai dengan visi dan ruang Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($services as $s)
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-amber-200 transform hover:-translate-y-2">
                        <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <i data-lucide="{{ $s['iconName'] }}" width="32" height="32"
                                class="text-amber-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $s['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $s['keterangan'] }}</p>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section id="ratings" class="py-20 bg-linear-to-br from-gray-50 to-amber-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                <p class="text-xl text-gray-600">
                    Don't just take our word for it - hear from our satisfied customers
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($ratings as $r)
                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <div class="flex mb-4">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($r['rating'] >= $i)
                                    {{-- Bintang penuh --}}
                                    <i data-lucide="star" class="w-5 h-5 text-yellow-500"
                                        style="fill:currentColor; stroke:none;"></i>
                                @elseif ($r['rating'] > $i - 1 && $r['rating'] < $i)
                                    {{-- Bintang setengah --}}
                                    <i data-lucide="star-half" class="w-5 h-5 text-yellow-500"></i>
                                @else
                                    {{-- Bintang kosong --}}
                                    <i data-lucide="star" class="w-5 h-5 text-gray-300"></i>
                                @endif
                            @endfor
                        </div>
                        <p class="text-gray-700 mb-4 leading-relaxed">
                            {{ $r['keterangan'] }}
                        </p>
                        <p class="font-semibold text-gray-900">{{ $r['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-linear-to-br from-orange-400 to-amber-300 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-6">Siap Mengubah Ruang Anda Jadi Lebih Istimewa?</h2>
            <p class="text-xl mb-8 opacity-90">
                Ayo, bicarakan furnitur kustom impian Anda dan wujudkan ruang yang benar-benar unik!"
            </p>
            <button
                class="bg-white text-amber-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg">
                Hubungi Kami Sekarang
            </button>
        </div>
    </section>

</x-layout>
