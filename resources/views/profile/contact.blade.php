<x-layout>

    <x-slot:title>{{ $title }}</x-slot>

    <div class="min-h-screen bg-white">

        {{-- Hero Section --}}
        <section class="relative py-20 bg-gradient-to-br from-amber-600 to-orange-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">Get in Touch</h1>
                    <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
                        Let's discuss your custom furniture project and bring your ideas to life
                    </p>
                </div>
            </div>
        </section>

        {{-- Contact Info & Form --}}
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                    {{-- Contact Information --}}
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">Contact Information</h2>

                        <div class="space-y-6">
                            @if ($contactInfo['phone'] ?? false)
                                <div
                                    class="flex items-start bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                                    <div class="bg-amber-100 p-3 rounded-full mr-4">
                                        <i data-lucide="phone" class="ml-2 w-6 h-6 text-amber-500"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">Phone</h3>
                                        <a href="tel:{{ $contactInfo['phone'] }}"
                                            class="text-gray-600 hover:text-amber-600 transition-colors">
                                            {{ $contactInfo['phone'] }}
                                        </a>
                                    </div>
                                </div>
                            @endif

                            @if ($contactInfo['email'] ?? false)
                                <div
                                    class="flex items-start bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                                    <div class="bg-amber-100 p-3 rounded-full mr-4">
                                        <i data-lucide="mail" class="ml-2 w-6 h-6 text-amber-500"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                                        <a href="mailto:{{ $contactInfo['email'] }}"
                                            class="text-gray-600 hover:text-amber-600 transition-colors">
                                            {{ $contactInfo['email'] }}
                                        </a>
                                    </div>
                                </div>
                            @endif

                            @if ($contactInfo['address'] ?? false)
                                <div
                                    class="flex items-start bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                                    <div class="bg-amber-100 p-3 rounded-full mr-4">
                                        <i data-lucide="map-pin" class="ml-2 w-6 h-6 text-amber-500"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">Address</h3>
                                        <p class="text-gray-600">{{ $contactInfo['address'] }}</p>
                                    </div>
                                </div>
                            @endif

                            @if ($contactInfo['whatsapp'] ?? false)
                                <div
                                    class="flex items-start bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                                    <div class="bg-green-100 p-3 rounded-full mr-4">
                                        <i data-lucide="message-square" class="ml-2 w-6 h-6 text-amber-500"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">WhatsApp</h3>
                                        <a href="https://wa.me/{{ preg_replace('/\D/', '', $contactInfo['whatsapp']) }}"
                                            target="_blank"
                                            class="text-gray-600 hover:text-green-600 transition-colors">
                                            Chat with us on WhatsApp
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>

                        {{-- Social Media --}}
                        <div class="mt-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Follow Us</h3>
                            <div class="flex space-x-4">
                                @if ($contactInfo['facebook'] ?? false)
                                    <a href="{{ $contactInfo['facebook'] }}" target="_blank"
                                        class="bg-blue-600 hover:bg-blue-700 text-white p-4 rounded-full transition-all transform hover:scale-110 shadow-md">
                                        <i data-lucide="facebook" class="ml-2 w-6 h-6 text-white"></i>
                                    </a>
                                @endif
                                @if ($contactInfo['instagram'] ?? false)
                                    <a href="{{ $contactInfo['instagram'] }}" target="_blank"
                                        class="bg-gradient-to-br from-purple-600 to-pink-500 hover:from-purple-700 hover:to-pink-600 text-white p-4 rounded-full transition-all transform hover:scale-110 shadow-md">
                                        <i data-lucide="instagram" class="ml-2 w-6 h-6 text-white"></i>
                                    </a>
                                @endif
                            </div>
                        </div>

                        {{-- Business Hours --}}
                        <div
                            class="mt-8 bg-gradient-to-br from-amber-50 to-orange-50 p-6 rounded-xl border border-amber-100">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Business Hours</h3>
                            <div class="space-y-2 text-gray-700">
                                <p class="flex justify-between"><span class="font-semibold">Monday -
                                        Friday</span><span>9:00 AM - 6:00 PM</span></p>
                                <p class="flex justify-between"><span class="font-semibold">Saturday</span><span>9:00 AM
                                        - 3:00 PM</span></p>
                                <p class="flex justify-between"><span
                                        class="font-semibold">Sunday</span><span>Closed</span></p>
                            </div>
                        </div>
                    </div>

                    {{-- Contact Form --}}
                    <div>
                        <div class="bg-white p-8 rounded-xl shadow-lg">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h2>

                            @if (session('success'))
                                <div
                                    class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="#" method="POST" class="space-y-6">
                                @csrf
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full
                                        Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all"
                                        placeholder="John Doe">
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="email"
                                            class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                                            required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all"
                                            placeholder="john@example.com">
                                    </div>
                                    <div>
                                        <label for="phone"
                                            class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                                            required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all"
                                            placeholder="+62 812-3456-7890">
                                    </div>
                                </div>

                                <div>
                                    <label for="subject"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                                    <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all"
                                        placeholder="Custom Furniture Inquiry">
                                </div>

                                <div>
                                    <label for="message"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                                    <textarea name="message" id="message" rows="6" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all resize-none"
                                        placeholder="Tell us about your project...">{{ old('message') }}</textarea>
                                </div>

                                <button type="submit"
                                    class="w-full bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all transform hover:scale-105 shadow-lg flex items-center justify-center">
                                    Send Message
                                    <i data-lucide="send" class="ml-2 w-6 h-6"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- Google Map --}}
        <section class="py-0">
            <div class="w-full h-96">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3035304902137!2d109.90769399999999!3d-7.4316252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa307ec381f31%3A0x96f101486eaf044f!2sTeknik%20mebel%20furniture!5e0!3m2!1sid!2sid!4v1764585163721!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" title="Teknik Furniture Location"></iframe>
            </div>
        </section>

    </div>
</x-layout>
