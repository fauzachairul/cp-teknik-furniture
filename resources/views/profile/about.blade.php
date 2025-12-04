<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <section class="relative pt-40 pb-20 bg-linear-to-br from-amber-600 to-orange-600 text-white"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.8)),url('{{ asset('img/about-bg.png') }}')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">About Teknik Furniture</h1>
                <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
                    Teknik Furniture adalah produsen furnitur kustom terkemuka yang berdedikasi mewujudkan visi Anda.
                    Sejak 2010, kami menciptakan furnitur buatan tangan yang istimewa, memadukan desain klasik dengan
                    fungsionalitas modern.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div
                    class="bg-linear-to-br from-amber-50 to-orange-50 rounded-2xl p-10 shadow-lg border border-amber-100">
                    <div class="bg-amber-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i data-lucide="eye" class="text-white w-8 h-8"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Visi Kami</h2>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Menjadi penyedia furnitur kustom terkemuka di Indonesia, yang dikenal atas inovasi, kualitas,
                        dan kepuasan pelanggan.
                    </p>
                </div>

                <div
                    class="bg-linear-to-br from-blue-50 to-indigo-50 rounded-2xl p-10 shadow-lg border border-blue-100">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i data-lucide="target" class="text-white w-8 h-8"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Misi Kami</h2>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Kami berkomitmen memberikan solusi furnitur kustom yang istimewa melalui keahlian pengerjaan
                        superior, desain inovatif, dan layanan personal yang melampaui harapan klien.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Perjalanan Kami</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Building excellence through dedication and craftsmanship
                </p>
            </div>

            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-amber-200"></div>

                <div class="space-y-12">
                    <div class="flex items-center justify-between">
                        <div class="w-5/12 text-right pr-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">2010</h3>
                            <p class="text-gray-600">
                                Teknik Furniture was founded with a vision to bring quality custom furniture to every
                                home
                            </p>
                        </div>
                        <div class="w-2/12 flex justify-center">
                            <div
                                class="bg-amber-600 w-12 h-12 rounded-full flex items-center justify-center border-4 border-white shadow-lg">
                                <i data-lucide="clock" class="text-white w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="w-5/12"></div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="w-5/12"></div>
                        <div class="w-2/12 flex justify-center">
                            <div
                                class="bg-amber-600 w-12 h-12 rounded-full flex items-center justify-center border-4 border-white shadow-lg">
                                <i data-lucide="clock" class="text-white w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="w-5/12 pl-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">2015</h3>
                            <p class="text-gray-600">
                                Expanded our team and workshop, completing over 500 custom projects
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="w-5/12 text-right pr-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">2020</h3>
                            <p class="text-gray-600">
                                Introduced innovative design solutions and sustainable materials to our offerings
                            </p>
                        </div>
                        <div class="w-2/12 flex justify-center">
                            <div
                                class="bg-amber-600 w-12 h-12 rounded-full flex items-center justify-center border-4 border-white shadow-lg">
                                <i data-lucide="clock" class="text-white w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="w-5/12"></div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="w-5/12"></div>
                        <div class="w-2/12 flex justify-center">
                            <div
                                class="bg-amber-600 w-12 h-12 rounded-full flex items-center justify-center border-4 border-white shadow-lg">
                                <i data-lucide="clock" class="text-white w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="w-5/12 pl-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Today</h3>
                            <p class="text-gray-600">
                                Leading custom furniture provider with 1000+ satisfied clients and counting
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Passionate craftspeople dedicated to bringing your vision to life
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                @foreach ($members as $m)
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 border border-gray-100">
                        <div class="h-72 overflow-hidden">
                            <img src={{ $m['img'] }} alt={{ $m['name'] }} class="w-full h-full object-cover" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $m['name'] }}</h3>
                            <p class="text-amber-600 font-semibold mb-3">{{ $m['role'] }}</p>
                            <p class="text-gray-600 leading-relaxed">{{ $m['bio'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

</x-layout>
