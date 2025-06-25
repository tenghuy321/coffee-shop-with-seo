<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        SEOTools::setTitle('Home - Café Luxe');
        SEOTools::setDescription('Welcome to Café Luxe, your destination for artisan coffee in Cambodia.');
        SEOTools::opengraph()->setUrl(route('home'));
        SEOTools::setCanonical(route('home'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@cafeluxe');
        SEOTools::addImages([asset('assets/images/logo.png')]);


        $search = $request->input('search');

        $products = collect([
            [
                'name' => 'Espresso',
                'desc' => 'A strong, concentrated shot of coffee made from finely ground beans. Perfect for a quick boost.',
                'price' => '$3.50',
                'tags' => ['Hot'],
                'badge' => 'Best Seller',
                'image' => 'https://images.unsplash.com/photo-1573333744806-07f420e5cb7a?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'Iced Latte',
                'desc' => 'Chilled espresso blended with cold milk and ice — smooth, refreshing, and energizing.',
                'price' => '$4.75',
                'tags' => ['Cold'],
                'image' => 'https://plus.unsplash.com/premium_photo-1675435644687-562e8042b9db?q=80&w=749&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'Cappuccino',
                'desc' => 'Creamy frothed milk over a bold shot of espresso, dusted with cocoa powder.',
                'price' => '$4.00',
                'tags' => ['Hot'],
                'image' => 'https://images.unsplash.com/photo-1572713528945-a44d404d9c3b?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'Caramel Macchiato',
                'desc' => 'Espresso layered with velvety milk and topped with rich caramel drizzle.',
                'price' => '$5.25',
                'tags' => ['Signature', 'Hot'],
                'badge' => 'Staff Pick',
                'image' => 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092'
            ],
        ]);


        if ($search) {
            $products = $products->filter(function ($item) use ($search) {
                return stripos($item['name'], $search) !== false;
            });
        }


        return view('home', compact('products', 'search'));
    }
}
