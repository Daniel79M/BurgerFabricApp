@extends('Layouts.base')

@section('content')
    @include('Components.AuthNavBar')

    <section class="banner">

        <div class="banner-text">
            <p class="welcome">
                C'est toujours la qualité, sans compromis avec
            </p>
            {{-- <a href="" class="logo-burger">
                <img src="{{ URL::asset("Assets/images/BurgerFabric img.jpeg") }}" alt="logo Burger Fabric">
            </a> --}}
            <h1 class="resto-name"> BURGER FABRIC</h1>
            <span>Le fast-food, réinventé.</span>
            <p class="welcome">
                Ouvert de 10h à 22h du lundi au vendredi
                et de 11h à 23h du samedi au dimanche.
                Nous vous proposons une carte spéciale pour les adhérents.
            </p>
            <div class="banner-btn">
                <a href="" class="dicover-btn">Découvrire</a>
                <a href="" class="menu-btn"> Menu du Jour</a>
            </div>
            

        </div>
        <div class="banner-img">
            <img src="{{ URL::asset("Assets/images/beef-burger-7323692_1280-removebg-preview.png") }}" alt="">
        </div>

    </section>

    <section id="service">
        <div class="section-container">
            <h2 class="section-title">Nos Services</h2>
            <div class="service-list">
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-utensils"></i>
                        <h3>Restauration</h3>
                    </div>
                    <p>Nos spécialités gastronomiques : burgers, croissants, pâtes, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-wine-bottle"></i>
                        <h3>Boissons</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-wine-bottle"></i>
                        <h3>Boissons</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus impedit voluptates exercitationem.
                    </p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-utensils"></i>
                        <h3>Restauration</h3>
                    </div>
                    <p>Nos spécialités gastronomiques : burgers, croissants, pâtes, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-wine-bottle"></i>
                        <h3>Boissons</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-wine-bottle"></i>
                        <h3>Boissons</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus impedit voluptates exercitationem.
                    </p>
                </div>
            </div>
        </div>
    </section>



@endsection