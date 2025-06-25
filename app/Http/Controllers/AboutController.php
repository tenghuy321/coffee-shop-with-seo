<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class AboutController extends Controller
{
    public function index()
    {
            SEOTools::setTitle('About - Café Luxe');
    SEOTools::setDescription('Explore our full artisan coffee menu — espresso, cold brew, signature blends.');
    SEOTools::opengraph()->setUrl(route('product'));
    SEOTools::addImages([
        asset('images/menu.jpg'),
        asset('assets/images/banner-image.jpg'),
    ]);
        return view('about');
    }
}
