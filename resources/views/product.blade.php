@extends('layouts.master')
@section('title', 'Product - Café Luxe | Premium Artisan Coffee in Cambodia')
@section('meta_description', 'Welcome to Café Luxe. Explore our handcrafted coffee drinks, perfect for coffee lovers in Phnom Penh.')
@section('meta_og_title', 'Product - Café Luxe')
@section('meta_og_description', 'Explore a world of premium coffee at Café Luxe — from espresso to signature lattes.')
@section('meta_twitter_title', 'Café Luxe - Artisan Coffee')
@section('meta_twitter_description', 'Fresh brews, relaxing atmosphere. Visit Café Luxe today.')

@section('content')
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
@endsection
