<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
{
    return view('admin.dashboard'); // Vue pour le tableau de bord admin
}

public function users()
{
    $users = User::all(); // Récupère tous les utilisateurs
    return view('admin.users', compact('users')); // Vue pour gérer les utilisateurs
}

// public function orders()
// {
//     $orders = Order::with('user', 'products')->get(); // Récupère toutes les commandes
//     return view('admin.orders', compact('orders')); // Vue pour gérer les commandes
// }


}