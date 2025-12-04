<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>

<body class="bg-[#F6F5F8]">

    <div class="loaders fixed inset-0 top-0 left-0 right-0 z-999 h-screen flex justify-center items-center bg-white">
        <div class="flex flex-row gap-2">
            <div class="animate-pulse bg-gray-300 w-12 h-12 rounded-full"></div>
            <div class="flex flex-col gap-2">
                <div class="animate-pulse bg-gray-300 w-28 h-5 rounded-full"></div>
                <div class="animate-pulse bg-gray-300 w-36 h-5 rounded-full"></div>
            </div>
        </div>
    </div>

    <x-navbar></x-navbar>

    {{ $slot }}

    <x-footer></x-footer>
    @vite('resources/js/script.js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        const btnHum = document.getElementById('menu-btn');
        const navMobile = document.getElementById('mobile-nav');

        btnHum.addEventListener('click', () => {
            navMobile.classList.toggle('active')
        });

        const loaders = document.querySelector('.loaders');

        window.onload = () => {
            loaders.classList.remove('fixed');
            loaders.classList.add('hidden');
        }
    </script>

    @stack('scripts')
</body>

</html>
