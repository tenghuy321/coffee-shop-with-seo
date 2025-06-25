@extends('layouts.master')
{{-- @section('title', 'Home - Café Luxe | Premium Artisan Coffee in Cambodia')
@section('meta_description', 'Welcome to Café Luxe. Explore our handcrafted coffee drinks, perfect for coffee lovers in Phnom Penh.')
@section('meta_og_title', 'Home - Café Luxe')
@section('meta_og_description', 'Explore a world of premium coffee at Café Luxe — from espresso to signature lattes.')
@section('meta_twitter_title', 'Café Luxe - Artisan Coffee')
@section('meta_twitter_description', 'Fresh brews, relaxing atmosphere. Visit Café Luxe today.') --}}

@section('content')
    <!-- Hero Text Section -->
    <section
        class="relative bg-[#fdfaf6] py-20 md:py-32 px-10 md:px-20 text-start bg-no-repeat bg-cover bg-[url(https://images.unsplash.com/photo-1690983324515-d0faf73de6ca?q=80&w=1357&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)]">
        <h1 class="text-5xl font-bold text-[#fff] mb-4 leading-tight">Discover the Art of Coffee</h1>
        <p class="text-lg text-[#fff] mb-8">Freshly brewed. Elegantly served. Always memorable.</p>
        <a href="{{ route('product') }}"
            class="inline-block bg-[#8b5e3c] text-white px-6 py-3 rounded-lg shadow hover:bg-[#6a4328] transition">
            Explore Menu
        </a>
    </section>

    <div class="max-w-7xl mx-auto px-4 py-16">

        <div class="flex items-center justify-between">
            <h2 class="text-4xl font-bold mb-4">Our Coffee Menu</h2>
            <!-- Search -->
            <form action="{{ route('product') }}" method="GET" class="ml-4">
                <input type="text" name="search" placeholder="Search coffee..."
                    class="px-3 py-1 border rounded-md text-sm focus:outline-none focus:ring focus:border-[#8b5e3c]">
            </form>
        </div>


        @if ($search)
            <p class="text-center text-sm text-gray-600 mb-8">Showing results for: <strong>{{ $search }}</strong></p>
        @endif

        <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-8">
            @forelse ($products as $coffee)
                <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition duration-300">
                    <img src="{{ $coffee['image'] ?? 'https://via.placeholder.com/400x250?text=Coffee' }}"
                        alt="Hot Latte with foam art on wooden table" class="w-full h-48 object-cover rounded-lg mb-4">

                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-xl font-semibold text-[#3e2f2f]">{{ $coffee['name'] }}</h3>
                        <span class="text-[#8b5e3c] font-bold">{{ $coffee['price'] }}</span>
                    </div>

                    <p class="text-sm text-gray-600 mb-3">{{ $coffee['desc'] }}</p>

                    @if (!empty($coffee['tags']))
                        <div class="flex flex-wrap gap-2 mb-3">
                            @foreach ($coffee['tags'] as $tag)
                                <span
                                    class="text-xs bg-[#fdf2e4] text-[#8b5e3c] px-2 py-1 rounded-full uppercase tracking-wide font-medium">{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif

                    @if (!empty($coffee['badge']))
                        <div
                            class="inline-block bg-yellow-200 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full">
                            {{ $coffee['badge'] }}
                        </div>
                    @endif
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">No products found.</p>
            @endforelse
        </div>
    </div>

    <!-- BOTTOM Image Section -->
    <section class="w-full h-[50vh] relative">
        <div class="absolute inset-0 w-full h-full">
            <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348" alt="Coffee Table"
                class="w-full h-full object-cover shadow-lg">
        </div>

        <div class="relative flex flex-col items-center justify-center w-full h-full text-center">
            <h2 class="text-3xl font-bold text-[#fff] mb-4">Your Daily Ritual</h2>
            <p class="text-[#fff] max-w-2xl mx-auto text-lg">
                At Café Luxe, we blend passion and precision to craft coffee that energizes your day and soothes your soul.
                Whether you're in for a quick espresso or a slow sip of our signature latte, we make it special.
            </p>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="bg-white py-20 relative">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-[#3e2f2f] mb-10">Why Choose Café Luxe?</h2>
            <div class="grid md:grid-cols-3 gap-8 text-[#5e4b3c]">
                <div class="p-6 bg-[#fef6ec] rounded-xl shadow hover:shadow-md transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Artisan Roasts</h3>
                    <p>We use only the finest beans sourced ethically from around the globe and roasted to perfection.</p>
                </div>
                <div class="p-6 bg-[#fef6ec] rounded-xl shadow hover:shadow-md transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Inviting Atmosphere</h3>
                    <p>Relax in our stylish café setting with ambient lighting, soft music, and comfortable seating.</p>
                </div>
                <div class="p-6 bg-[#fef6ec] rounded-xl shadow hover:shadow-md transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Crafted with Passion</h3>
                    <p>Every cup is handcrafted by trained baristas who love what they do and care about your experience.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-cover bg-center bg-no-repeat bg-[url('https://img.freepik.com/free-photo/coffee-beans-dark-background-top-view-coffee-concept-banner_1220-6300.jpg?t=st=1750819202~exp=1750822802~hmac=2ab8b55bcd96a5b051ce5f06deaf62d8b535522ea8b3027c34200496da8c3544&w=996')]">
        <div class="bg-black/50">
            <div class="max-w-4xl mx-auto px-6 py-20 text-center text-white">
                <h2 class="text-4xl font-bold mb-4">Subscribe to Our Newsletter</h2>
                <p class="mb-8 text-lg max-w-xl mx-auto">
                    Get the latest updates on new blends, exclusive offers, and coffee tips delivered straight to your
                    inbox.
                </p>
                <form action="#" method="POST" class="flex flex-col sm:flex-row justify-center gap-4 max-w-md mx-auto">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email" required
                        class="px-4 py-3 rounded-md text-gray-200 border border-[#fff] focus:outline-none focus:ring-2 focus:ring-[#8b5e3c] flex-grow">
                    <button type="submit"
                        class="bg-[#8b5e3c] hover:bg-[#6a4328] transition rounded-md px-6 py-3 font-semibold text-white">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
