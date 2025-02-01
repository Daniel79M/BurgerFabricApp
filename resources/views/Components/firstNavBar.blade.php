@extends('Layouts.base')

<nav class="firstNavBar">
    <a href="" class="logo-burger">
        {{-- <img src="{{ URL::asset("Assets/images/BurgerFabric img.jpeg") }}" alt="logo Burger Fabric"> --}}
    </a>
    <ul class="navbarLinks">
        <li><a href="#home">Accueil</a></li>
        <li><a href="#service">Services</a></li>
        <li><a href="#Abouts">A Propos</a></li>
        <li><a href="#menus">Nos Menu</a></li>
        <li><a href="">Contactez Nous</a></li>
    </ul>
    <div class="auth-div">
        <a href="{{ route('login') }}" class="login-btn">Se connecter</a>
        <a href="{{ route('register') }}" class="signup-btn">S'inscrire</a>
    </div>
</nav>