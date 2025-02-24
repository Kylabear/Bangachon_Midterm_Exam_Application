<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ["name" => "iPhone 15", "price" => 1099, "brand" => "Apple"],
            ["name" => "Samsung Galaxy S23", "price" => 999, "brand" => "Samsung"],
            ["name" => "MacBook Air M2", "price" => 1199, "brand" => "Apple"],
            ["name" => "Sony WH-1000XM5", "price" => 399, "brand" => "Sony"],
            ["name" => "Nintendo Switch OLED", "price" => 349, "brand" => "Nintendo"]
        ];

        return view('products.index', compact('products'));
    }
}
