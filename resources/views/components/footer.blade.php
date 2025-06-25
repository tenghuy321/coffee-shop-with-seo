<footer class="bg-[#3e2f2f] text-[#fefaf6] py-20 relative">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Brand -->
        <div>
            <h3 class="text-2xl font-bold mb-4">Café Luxe</h3>
            <p class="text-sm max-w-xs">
                Premium coffee brewed with passion. Visit us or order online for an unforgettable experience.
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
            <ul class="space-y-2">
                <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>
                <li><a href="{{ route('product') }}" class="hover:underline">Product</a></li>
                <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
            </ul>
        </div>

        <!-- Contact & Social -->
        <div>
            <h4 class="text-xl font-semibold mb-4">Contact Us</h4>
            <p class="text-sm mb-4">
                123 Coffee Street,<br>
                Phnom Penh, Cambodia<br>
                Phone: +855 12 345 678<br>
                Email: info@cafeluxe.com
            </p>

            <div class="flex space-x-4">
                <!-- Facebook -->
                <a href="#" aria-label="Facebook" class="hover:text-[#d1b87f]">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M22 12a10 10 0 1 0-11.5 9.8v-6.9h-3v-2.9h3v-2.2c0-3 1.8-4.6 4.5-4.6 1.3 0 2.6.2 2.6.2v2.9h-1.5c-1.5 0-2 1-2 2v2h3.4l-.5 2.9h-2.9v6.9A10 10 0 0 0 22 12z"/>
                    </svg>
                </a>
                <!-- Twitter -->
                <a href="#" aria-label="Twitter" class="hover:text-[#d1b87f]">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 0 1-3.1.9 5.4 5.4 0 0 0 2.4-3 10.9 10.9 0 0 1-3.4 1.3 5.4 5.4 0 0 0-9.4 4.9A15.3 15.3 0 0 1 1.7 2.1 5.4 5.4 0 0 0 3.2 9a5.3 5.3 0 0 1-2.4-.7v.1a5.4 5.4 0 0 0 4.3 5.3 5.4 5.4 0 0 1-2.4.1 5.4 5.4 0 0 0 5 3.7 10.9 10.9 0 0 1-7.2 2.5 11 11 0 0 1-1.3 0 15.3 15.3 0 0 0 8.3 2.4c10 0 15.5-8.3 15.5-15.5v-.7A11 11 0 0 0 23 3z"/>
                    </svg>
                </a>
                <!-- Instagram -->
                <a href="#" aria-label="Instagram" class="hover:text-[#d1b87f]">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 2A3.75 3.75 0 0 0 4 7.75v8.5A3.75 3.75 0 0 0 7.75 20h8.5A3.75 3.75 0 0 0 20 16.25v-8.5A3.75 3.75 0 0 0 16.25 4zm8.5 1.5a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10z"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>

    <div class="absolute bottom-0 w-full py-2 bg-white text-center text-sm text-[#000]">
        &copy; {{ date('Y') }} Café Luxe. All rights reserved.
    </div>
</footer>
