@extends('Layouts.base')

<nav class="firstNavBar">
    <a href="" class="logo-burger">
        <img src="{{ URL::asset("Assets/images/BurgerFabric img.jpeg") }}" alt="logo Burger Fabric">
    </a>
    <ul class="navbarLinks">
        <li><a href="">Accueil</a></li>
        <li><a href="">Nos services</a></li>
        <li><a href="">A Propos</a></li>
        <li><a href="">Nos Menu</a></li>
        <li><a href="">Nous Contactez</a></li>
    </ul>
    <div class="auth-div">
        <a href="" class="login-btn"><i class="fa-solid fa-cart-shopping aria-hidden="true"></i></a>
        <a href="" class="signup-btn"><i class="fa-solid fa-user-circle" aria-hidden="true"></i></a>
        <a href="" ><i class="fa-solid fa-moon" aria-hidden="true"></i></a>
    </div>
</nav>