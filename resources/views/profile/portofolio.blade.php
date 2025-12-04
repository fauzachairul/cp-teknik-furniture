<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <section class="relative pt-40 pb-20 bg-linear-to-br from-amber-600 to-orange-600 text-white"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.8)),url('{{ asset('img/about-bg.png') }}')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">Protfolio Kami</h1>
                <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
                    Jelajahi koleksi proyek furnitur custom kami yang dirancang dengan indah.
                </p>
            </div>
        </div>
    </section>

    <div
        class="lg:sticky top-[98] z-40 flex justify-evenly bg-white px-8 lg:px-12 py-10 shadow-[0px_8px_27px_-5px_rgba(0,0,0,0.1)] flex-wrap gap-y-5 lg:gap-y-0">
        @foreach ($categories as $key => $label)
            <button
                class="filter-btn cursor-pointer px-6 py-3 rounded-full  @if ($key === 'all') bg-amber-500 text-white @else bg-gray-200 text-slate-800 @endif hover:bg-gray-300 transition duration-200 lg:text-xl font-medium"
                data-category="{{ $key }}">{{ $label }}</button>
        @endforeach
    </div>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div id="project-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($projects as $p)
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                        <div class="h-64 overflow-hidden">
                            <img src="{{ $p['img_url'] }}" alt={project.title}
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $p['title'] }}</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">{{ $p['description'] }}</p>
                            <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                                <span class="text-sm font-semibold text-amber-600">
                                    {{ $p['service'] }}
                                </span>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i data-lucide="calendar" class="w-4 h-4 mr-2"></i>
                                    {{ $p['complete_date'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="pagination" class="flex justify-center mt-8 gap-3"></div>


        </div>
    </section>


    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const buttons = document.querySelectorAll('.filter-btn');
                let currentCategory = 'all';
                let currentPage = 1;

                function fetchProjects(category, page = 1) {
                    fetch(`/portfolios/filter/${category}?page=${page}`)
                        .then(res => res.json())
                        .then(res => {
                            const container = document.getElementById('project-container');
                            const pagination = document.getElementById('pagination');
                            container.innerHTML = "";
                            pagination.innerHTML = "";

                            const data = res.data;
                            if (data.length === 0) {
                                container.innerHTML = `<div class="p-4 text-2xl text-gray-600">
                        Belum ada proyek di kategori ini. Nantikan update berikutnya!
                    </div>`;
                                return;
                            }

                            data.forEach(item => {
                                container.innerHTML += `
                        <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                            <div class="h-64 overflow-hidden">
                                <img src="${item.img_url}" alt="${item.title}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" />
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">${item.title}</h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">${item.description}</p>
                                <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                                    <span class="text-sm font-semibold text-amber-600">${item.service}</span>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i data-lucide="calendar" class="w-4 h-4 mr-2"></i>
                                        ${item.complete_date}
                                    </div>
                                </div>
                            </div>
                        </div>`;
                            });

                            // Pagination buttons
                            for (let i = 1; i <= res.totalPages; i++) {
                                const btn = document.createElement('button');
                                btn.textContent = i;
                                btn.className =
                                    `px-4 py-2 border rounded cursor-pointer ${i === res.page ? 'bg-amber-500 text-white' : 'bg-white text-gray-800'}`;
                                btn.addEventListener('click', () => {
                                    currentPage = i;
                                    fetchProjects(currentCategory, currentPage);
                                    // window.scrollTo({
                                    //     top: 0,
                                    //     behavior: 'smooth'
                                    // });
                                });
                                pagination.appendChild(btn);
                            }
                        });
                }

                buttons.forEach(btn => {
                    btn.addEventListener('click', function() {
                        currentCategory = this.dataset.category;
                        currentPage = 1; // reset ke halaman 1 saat ganti kategori

                        buttons.forEach(b => {
                            b.classList.remove('active', 'bg-amber-500', 'text-white');
                            b.classList.add('bg-gray-200', 'text-slate-800');
                        });

                        this.classList.remove('bg-gray-200', 'text-black', 'hover:bg-gray-300');
                        this.classList.add('active', 'bg-amber-500', 'text-white');

                        fetchProjects(currentCategory, currentPage);
                    });
                });

                // Load awal
                fetchProjects(currentCategory, currentPage);
            });
        </script>
    @endpush
</x-layout>
