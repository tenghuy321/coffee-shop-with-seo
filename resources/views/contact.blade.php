@extends('layouts.master')
{{-- @section('title', 'Home - Café Luxe | Premium Artisan Coffee in Cambodia')
@section('meta_description', 'Welcome to Café Luxe. Explore our handcrafted coffee drinks, perfect for coffee lovers in Phnom Penh.')
@section('meta_og_title', 'Home - Café Luxe')
@section('meta_og_description', 'Explore a world of premium coffee at Café Luxe — from espresso to signature lattes.')
@section('meta_twitter_title', 'Café Luxe - Artisan Coffee')
@section('meta_twitter_description', 'Fresh brews, relaxing atmosphere. Visit Café Luxe today.') --}}

@section('content')
<div class="max-w-2xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
    <form action="#" method="POST" class="space-y-6">
        @csrf
        <input type="text" name="name" placeholder="Your Name" class="w-full border px-4 py-2 rounded-md">
        <input type="email" name="email" placeholder="Your Email" class="w-full border px-4 py-2 rounded-md">
        <textarea name="message" rows="5" placeholder="Message" class="w-full border px-4 py-2 rounded-md"></textarea>
        <button class="bg-[#8b5e3c] text-white px-6 py-2 rounded-md hover:bg-[#6b4226]">Send</button>
    </form>
</div>
@endsection
