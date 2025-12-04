<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services = [
        [
            'iconName' => 'tv',
            'title' => 'Custom Tv Backdrop',
            'keterangan' => 'Ubah ruang tamu Anda dengan desain backdrop TV kustom yang
                        menawan, sesuai gaya Anda.'
        ],
        [
            'iconName' => 'bed',
            'title' => 'Custom Bed Frames',
            'keterangan' => 'Rangka tempat tidur buatan tangan, dirancang untuk
                        kenyamanan, daya tahan, dan keindahan.'
        ],
        [
            'iconName' => 'shopping-bag',
            'title' => 'Custom Wardrop',
            'keterangan' => 'Maksimalkan ruang penyimpanan Anda dengan lemari indah yang
                        dirancang pas untuk setiap sudut.'
        ],
        [
            'iconName' => 'chef-hat',
            'title' => 'Kitchen Sets',
            'keterangan' => 'Solusi dapur lengkap dengan material premium dan keahlian
                        pengerjaan profesional.'
        ],
        [
            'iconName' => 'hammer',
            'title' => 'Custom Furniture',
            'keterangan' => 'Wujudkan ide furnitur unik Anda dengan layanan desain dan
                        pembuatan kustom kami.'
        ],
    ];

    $ratings = [
        [
            'name' => 'Sarah Johnson',
            'rating' => 4.5,
            'keterangan' => '
Lorem ipsum dolor sit amet consectetur adipisicing elit. Id non ut ratione inventore! Esse aperiam, corrupti delectus animi nulla fuga quas velit dolor sed temporibus?'
        ],
        [
            'name' => 'Walter White',
            'rating' => 4,
            'keterangan' => '
Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ipsum doloribus tempora porro qui nam consequuntur laudantium ipsam distinctio corporis.'
        ],
        [
            'name' => 'Saul Goodman',
            'rating' => 5,
            'keterangan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, maxime.'
        ],
        [
            'name' => 'Saul Goodman',
            'rating' => 5,
            'keterangan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, maxime.'
        ],
    ];
    $title = 'Home Page';
    return view('profile.home', compact('title', 'ratings', 'services'));
});

Route::get('/about', function () {
    $members =
        [
            [
                'name' => 'Dinar Sayoko',
                'img' => asset('img/logo.png'),
                'role' => 'Owner - Pengrajin',
                'bio' => 'Dengan pengalaman lebih dari 15 tahun dalam desain dan pembuatan furnitur kustom, Ahmad memimpin tim kami dengan penuh passion dan keahlian.',
            ],
            [
                'name' => 'Dinar Sayoko',
                'img' => asset('img/logo.png'),
                'role' => 'Owner - Pengrajin',
                'bio' => 'Dengan pengalaman lebih dari 15 tahun dalam desain dan pembuatan furnitur kustom, Ahmad memimpin tim kami dengan penuh passion dan keahlian.',
            ],
            [
                'name' => 'Dinar Sayoko',
                'img' => asset('img/logo.png'),
                'role' => 'Owner - Pengrajin',
                'bio' => 'Dengan pengalaman lebih dari 15 tahun dalam desain dan pembuatan furnitur kustom, Ahmad memimpin tim kami dengan penuh passion dan keahlian.',
            ],
            [
                'name' => 'Dinar Sayoko',
                'img' => asset('img/logo.png'),
                'role' => 'Owner - Pengrajin',
                'bio' => 'Dengan pengalaman lebih dari 15 tahun dalam desain dan pembuatan furnitur kustom, Ahmad memimpin tim kami dengan penuh passion dan keahlian.',
            ],
            [
                'name' => 'Dinar Sayoko',
                'img' => asset('img/logo.png'),
                'role' => 'Owner - Pengrajin',
                'bio' => 'Dengan pengalaman lebih dari 15 tahun dalam desain dan pembuatan furnitur kustom, Ahmad memimpin tim kami dengan penuh passion dan keahlian.',
            ],
        ];

    $title = 'About Page';
    return view('profile.about', compact('title', 'members'));
});

Route::get('/portfolio', function () {
    $categories = [
        'all' => 'All Project',
        'kitchen_set' => 'Kitchen Set',
        'tv-backdrop' => 'Backdrop TV',
        'bed_frame' => 'Bed Frame',
        'wardrobe' => 'Wardrobe',
        'custom_furniture' => 'Custom Furniture',
    ];

    $projects =
        [
            [
                'id' => 1,
                'img_url' => asset('img/bdrp-1.jpg'),
                'category' => 'tv-backdrop',
                'service' => 'Tv Backdrop',
                'title' => 'Modern Living Room TV Wall',
                'description' => 'A sleek contemporary TV backdrop featuring integrated lighting and storage solutions.',
                'complete_date' => '2024-01-12',
            ],
            [
                'id' => 2,
                'img_url' => asset('img/kitchen1.jpg'),
                'category' => 'kitchen_set',
                'service' => 'Kitchen Set',
                'title' => 'Minimalist White Kitchen Set',
                'description' => 'Clean and elegant kitchen set with matte white cabinets and hidden handles.',
                'complete_date' => '2024-02-05',
            ],
            [
                'id' => 3,
                'img_url' => asset('img/bf1.jpg'),
                'category' => 'bed_frame',
                'service' => 'Bed Frame',
                'title' => 'Scandinavian Wooden Bed Frame',
                'description' => 'A natural wood bed frame with rounded edges and a minimalist headboard.',
                'complete_date' => '2024-03-18',
            ],
            [
                'id' => 4,
                'img_url' => asset('img/wrdb1.jpg'),
                'category' => 'wardrobe',
                'service' => 'Wardrobe',
                'title' => 'Sliding Door Wardrobe',
                'description' => 'Space-saving wardrobe with mirrored sliding doors and modular compartments.',
                'complete_date' => '2024-01-27',
            ],
            [
                'id' => 5,
                'img_url' => asset('img/bg-hero.png'),
                'category' => 'custom_furniture',
                'service' => 'Custom Furniture',
                'title' => 'Custom Study Desk',
                'description' => 'Ergonomic study desk with cable management and adjustable shelving.',
                'complete_date' => '2024-04-02',
            ],
            [
                'id' => 6,
                'img_url' => asset('img/bdrp2.jpg'),
                'category' => 'tv-backdrop',
                'service' => 'Tv Backdrop',
                'title' => 'Wood Panel TV Backdrop',
                'description' => 'Warm wood panel design paired with ambient LED lighting.',
                'complete_date' => '2024-02-20',
            ],
            [
                'id' => 7,
                'img_url' => asset('img/kitchen2.jpg'),
                'category' => 'kitchen_set',
                'service' => 'Kitchen Set',
                'title' => 'Industrial Style Kitchen Set',
                'description' => 'A bold kitchen design featuring dark tones, metal accents, and open shelving.',
                'complete_date' => '2024-03-11',
            ],
            [
                'id' => 8,
                'img_url' => asset('img/bf2.jpg'),
                'category' => 'bed_frame',
                'service' => 'Bed Frame',
                'title' => 'Upholstered Bed Frame',
                'description' => 'Comfort-oriented bed frame with soft fabric and cushioned headboard.',
                'complete_date' => '2024-04-15',
            ],
            [
                'id' => 9,
                'img_url' => asset('img/wrdb2.jpg'),
                'category' => 'wardrobe',
                'service' => 'Wardrobe',
                'title' => 'Walk-In Closet Wardrobe',
                'description' => 'A luxurious walk-in wardrobe layout with LED shelf lighting.',
                'complete_date' => '2024-05-01',
            ],
            [
                'id' => 10,
                'img_url' => asset('img/bg-hero.png'),
                'category' => 'custom_furniture',
                'service' => 'Custom Furniture',
                'title' => 'Custom TV Console',
                'description' => 'Low-profile TV console with floating drawers and cable routing.',
                'complete_date' => '2024-05-20',
            ],
        ];



    $title = 'Protfolio Page';
    return view('profile.portofolio', compact('title', 'projects', 'categories'));
});

Route::get('/portfolios/filter/{category}', function ($category) {
    $projects =
        [
            [
                'id' => 1,
                'img_url' => asset('img/bdrp-1.jpg'),
                'category' => 'tv-backdrop',
                'service' => 'Tv Backdrop',
                'title' => 'Modern Living Room TV Wall',
                'description' => 'A sleek contemporary TV backdrop featuring integrated lighting and storage solutions.',
                'complete_date' => '2024-01-12',
            ],
            [
                'id' => 2,
                'img_url' => asset('img/kitchen1.jpg'),
                'category' => 'kitchen_set',
                'service' => 'Kitchen Set',
                'title' => 'Minimalist White Kitchen Set',
                'description' => 'Clean and elegant kitchen set with matte white cabinets and hidden handles.',
                'complete_date' => '2024-02-05',
            ],
            [
                'id' => 3,
                'img_url' => asset('img/bf1.jpg'),
                'category' => 'bed_frame',
                'service' => 'Bed Frame',
                'title' => 'Scandinavian Wooden Bed Frame',
                'description' => 'A natural wood bed frame with rounded edges and a minimalist headboard.',
                'complete_date' => '2024-03-18',
            ],
            [
                'id' => 4,
                'img_url' => asset('img/wrdb1.jpg'),
                'category' => 'wardrobe',
                'service' => 'Wardrobe',
                'title' => 'Sliding Door Wardrobe',
                'description' => 'Space-saving wardrobe with mirrored sliding doors and modular compartments.',
                'complete_date' => '2024-01-27',
            ],
            [
                'id' => 5,
                'img_url' => asset('img/bg-hero.png'),
                'category' => 'custom_furniture',
                'service' => 'Custom Furniture',
                'title' => 'Custom Study Desk',
                'description' => 'Ergonomic study desk with cable management and adjustable shelving.',
                'complete_date' => '2024-04-02',
            ],
            [
                'id' => 6,
                'img_url' => asset('img/bdrp2.jpg'),
                'category' => 'tv-backdrop',
                'service' => 'Tv Backdrop',
                'title' => 'Wood Panel TV Backdrop',
                'description' => 'Warm wood panel design paired with ambient LED lighting.',
                'complete_date' => '2024-02-20',
            ],
            [
                'id' => 7,
                'img_url' => asset('img/kitchen2.jpg'),
                'category' => 'kitchen_set',
                'service' => 'Kitchen Set',
                'title' => 'Industrial Style Kitchen Set',
                'description' => 'A bold kitchen design featuring dark tones, metal accents, and open shelving.',
                'complete_date' => '2024-03-11',
            ],
            [
                'id' => 8,
                'img_url' => asset('img/bf2.jpg'),
                'category' => 'bed_frame',
                'service' => 'Bed Frame',
                'title' => 'Upholstered Bed Frame',
                'description' => 'Comfort-oriented bed frame with soft fabric and cushioned headboard.',
                'complete_date' => '2024-04-15',
            ],
            [
                'id' => 9,
                'img_url' => asset('img/wrdb2.jpg'),
                'category' => 'wardrobe',
                'service' => 'Wardrobe',
                'title' => 'Walk-In Closet Wardrobe',
                'description' => 'A luxurious walk-in wardrobe layout with LED shelf lighting.',
                'complete_date' => '2024-05-01',
            ],
            [
                'id' => 10,
                'img_url' => asset('img/bg-hero.png'),
                'category' => 'custom_furniture',
                'service' => 'Custom Furniture',
                'title' => 'Custom TV Console',
                'description' => 'Low-profile TV console with floating drawers and cable routing.',
                'complete_date' => '2024-05-20',
            ],
        ];



    // ambil hanya category sesuai request
    $filtered = $category === 'all'
        ? $projects
        : array_filter($projects, fn($p) => $p['category'] === $category);

    $filtered = array_values($filtered);

    // Pagination
    $perPage = 6;
    $page = request()->query('page', 1); // default page 1
    $total = count($filtered);
    $totalPages = ceil($total / $perPage);

    $pagedData = array_slice($filtered, ($page - 1) * $perPage, $perPage);

    return response()->json([
        'data' => $pagedData,
        'page' => (int)$page,
        'totalPages' => $totalPages,
    ]);
});


Route::get('/contact', function () {

    $title = 'Contact Form';

    $contactInfo = [
        'phone' => '+62 812-3456-7890',
        'email' => 'info@teknikfurniture.com',
        'address' => 'Jl. Wadas Lintang - Kertek No.9, Balekambang, Kec. Selomerto, Kabupaten Wonosobo, Jawa Tengah 56361',
        'facebook' => 'https://facebook.com/teknikfurniture',
        'instagram' => 'https://instagram.com/teknikfurniture',
        'whatsapp' => '+6281234567890',
    ];

    return view('profile.contact', compact('contactInfo', 'title'));
})->name('contact');
