@extends('Layouts.base')

@section('content')
    @include('Components.firstNavBar')

    <section class="banner" id="home">

        <div class="banner-text">
            <p class="welcome1">
                C'est toujours la qualité, sans compromis avec
            </p>
            {{-- <a href="" class="logo-burger">
                <img src="{{ URL::asset("Assets/images/BurgerFabric img.jpeg") }}" alt="logo Burger Fabric">
            </a> --}}
            <h1 class="resto-name"> BURGER FABRIC</h1>
            <span>Le fast-food, réinventé.</span>
            <p class="welcome">
                Découvrez une expérience culinaire unique où saveurs authentiques et ambiance chaleureuse se rencontrent.
                Chez BURGER FABRIC , nous mettons à l'honneur des ingrédients frais et des recettes savoureuses pour ravir
                vos papilles. Venez savourer des plats préparés avec passion et laissez-vous transporter par notre cuisine.
            </p>
            <div class="banner-btn">
                <a href="" class="dicover-btn">Découvrire</a>&nbsp;&nbsp;
                <a href="" class="menu-btn"> Menu du Jour</a>
            </div>


        </div>
        <div class="banner-img">
            <img src="{{ URL::asset('Assets/images/beef-burger-7323692_1280-removebg-preview.png') }}" alt="">
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
                        Lorem ipsum, dolor sit amet  adipisicing elit. Autem iusto veniam officiis, quae minus
                        impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-wine-bottle"></i>
                        <h3>Formation</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus
                        impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-wine-bottle"></i>
                        <h3>Boissons</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet  adipisicing elit. Autem iusto veniam officiis, quae minus
                        impedit voluptates exercitationem.
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
                        Lorem ipsum, dolor sit amet  adipisicing elit. Autem iusto veniam officiis, quae minus
                        impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-wine-bottle"></i>
                        <h3>Boissons</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus
                        impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-wine-bottle"></i>
                        <h3>Boissons</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus
                        impedit voluptates exercitationem.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="Abouts">
        <div class="about-container">
            <h2 class="section-title">A Propos</h2>
            <div class="about">
                <div class="descImg">
                </div>
                <div class="descText">
                    <h3 class="moov">Notre Histoire</h3>
                    <p class="moov">
                        Depuis plus de 10 ans, BURGER FABRIC est un lieu où la tradition et la créativité se rencontrent.
                        Fondé par [Nom du fondateur], notre restaurant s'engage à offrir une cuisine de qualité, préparée
                        avec des produits locaux et de saison. Notre équipe passionnée met tout en œuvre pour que chaque
                        repas soit une expérience inoubliable.
                    </p>
                    <div class="second-desc moov">
                        <div>
                            <img src="{{ URL::asset('Assets/images/burger-2612137_1280.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ URL::asset('Assets/images/burger-2612137_1280.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="learnPlusBtn moov">
                        Lire Plus
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="menus">
        {{-- <div class="about-container">
            <h2 class="section-title">Notre menu du Jour et nos plats</h2>

        </div> --}}

        <section class="article">
            <h2 class="titleh2">Notre menu du Jour et nos plats</h2>
            <p class="description">
                Que vous soyez amateur de cuisine traditionnelle ou en quête de nouvelles saveurs, notre menu saura satisfaire toutes vos envies.  Nous sélectionnons avec soin des ingrédients frais pour vous proposer des plats savoureux et équilibrés.
            </p>
            <div class="article-containt">
                <div class="card">
                    <div class="article-img">
                        <img src="{{URL::asset("Assets/images/beef-burger-7323692_1280.jpg")}}" alt="">
                    </div>
                    <div class="article-text">
                        <h3 class="title"> big burger</h3>
                        <h3 class="price"> Prix : &nbsp;&nbsp;<span>2.500 FCFA</span></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        </p>
                        <a href="#" class="read-more">Commandez </a>
                    </div>
                </div>
                <div class="card">
                    <div class="article-img">
                        <img src="{{URL::asset("Assets/images/beef-burger-7323692_1280.jpg")}}" alt="">
                    </div>
                    <div class="article-text">
                        <h3 class="title">AUDI 3060</h3>
                        <h3 class="price"> Prix : &nbsp;&nbsp;<span>50.000 FCFA</span></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        </p>
                        <a href="#" class="read-more">Commandez </a>
                    </div>
                </div>
                <div class="card">
                    <div class="article-img">
                        <img src="{{URL::asset("Assets/images/beef-burger-7323692_1280.jpg")}}" alt="">
                    </div>
                    <div class="article-text">
                        <h3 class="title">Titre de l'article</h3>
                        <h3 class="price"> Prix : &nbsp;&nbsp;<span>50.000 FCFA</span></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <a href="#" class="read-more">Commandez </a>
                    </div>
                </div>
                <div class="card">
                    <div class="article-img">
                        <img src="{{URL::asset("Assets/images/beef-burger-7323692_1280.jpg")}}" alt="">
                    </div>
                    <div class="article-text">
                        <h3 class="title">Titre de l'article</h3>
                        <h3 class="price"> Prix : &nbsp;&nbsp;<span>50.000 FCFA</span></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <a href="#" class="read-more">Commandez </a>
                    </div>
                </div>

            </div>
        </section>
    </section>

    <section id="contacts">
        <div class="about-container">
            <h2 class="section-title">Nous contacter</h2>
            <div class="contact-container">
                <div class="">
                    <form action="">
                        @csrf
                        <div class="">
                            <div class="">
                                <label for="nom">Nom </label>
                                <input type="text" name="nom" id="nom" required>
                            </div>
                            <div class="">
                                <label for="email">Email </label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="">
                                <label for="objet">Mot de passe </label>
                                <input type="text" name="objet" id="objet" required>
                            </div>
                            <div class="">
                                <label for="message">Message </label>
                                <textarea  name="message" id="message" required cols="30" rows="10"></textarea>
                            </div>
                            <button class="btn">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
