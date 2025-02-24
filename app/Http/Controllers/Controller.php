<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'iPhone 15', 'price' => 1099, 'brand' => 'Apple'],
            ['name' => 'Galaxy S23', 'price' => 999, 'brand' => 'Samsung'],
            ['name' => 'Pixel 7', 'price' => 899, 'brand' => 'Google']
        ];

        return view('products.index', compact('products'));
    }
}
