@extends('Layouts.base')

<nav class="firstNavBar">
    <a href="" class="logo-burger">
        {{-- <img src="{{ URL::asset("Assets/images/BurgerFabric img.jpeg") }}" alt="logo Burger Fabric"> --}}
    </a>
    <ul class="navbarLinks">
        <li><a href="">Accueil</a></li>
        <li><a href="">A Propos</a></li>
        <li><a href="">Nos Menu</a></li>
        <li><a href="">Contactez Nous</a></li>
    </ul>
    <div class="auth-div">
        <a href="" class="login-btn"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="" class="signup-btn">S'inscrire</a>
    </div>
</nav>