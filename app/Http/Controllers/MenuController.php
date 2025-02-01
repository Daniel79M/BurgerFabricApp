<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Récupère toutes les catégories avec leurs produits
        $categories = Category::with('products')->get();
        return view('menu.index', 
        compact('categories'));
    }
}
