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
                        <i class="fa-solid fa-bell-concierge"></i>
                        <h3>Menu personnalisé</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus
                        impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-map-location-dot"></i>
                        <h3>Commandes en ligne</h3>
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
                        <i class="fa-solid fa-graduation-cap"></i>
                        <h3>Formation</h3>
                    </div>
                    <p>Nos spécialités gastronomiques : burgers, croissants, pâtes, etc.
                        Lorem ipsum, dolor sit amet  adipisicing elit. Autem iusto veniam officiis, quae minus
                        impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-cake-candles"></i>
                        <h3>Patisserie</h3>
                    </div>
                    <p>Nos boissons au choix : cocktails, bières, etc.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem iusto veniam officiis, quae minus
                        impedit voluptates exercitationem.
                    </p>
                </div>
                <div class="service-item">
                    <div>
                        <i class="fa-solid fa-wine-bottle"></i>
                        <h3>Service de traiteur</h3>
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
                        Depuis plus de 10 ans, <span class="history">BURGER FABRIC</span> &nbsp; est un lieu où la tradition et la créativité se rencontrent.
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
                        <h3 class="title"> Big Burger</h3>
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
                        <h3 class="title">Frite au poulet</h3>
                        <h3 class="price"> Prix : &nbsp;&nbsp;<span>3.500 FCFA</span></h3>
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
                        <h3 class="title">Pizza espagnol</h3>
                        <h3 class="price"> Prix : &nbsp;&nbsp;<span>8.000 FCFA</span></h3>
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
                        <h3 class="title">Tarte</h3>
                        <h3 class="price"> Prix : &nbsp;&nbsp;<span>5.000 FCFA</span></h3>
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
                <div class="contact_form">
                    <form action="">
                        @csrf
                            <div class="form_data">
                                <label for="nom">Nom </label>
                                <input type="text" name="nom" id="nom" required>
                            </div>
                            <div class="form_data">
                                <label for="email">Email </label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="form_data">
                                <label for="objet">Objet </label>
                                <input type="text" name="objet" id="objet" required>
                            </div>
                            <div class="form_data">
                                <label for="message">Message </label>
                                <textarea  name="message" id="message" required cols="30" rows="8"></textarea>
                            </div>
                            <button class="btn">Envoyer</button>
                    </form>
                </div>
                <div class="social_media">
                    <h3>Nos agences</h3>
                    <aside>
                        <div class="contactLocation">
                            <div class="address">
                                <h4>Adresse:</h4>
                                <p>12345, Rue Agbalepedo, 75000 lomé</p>
                            </div>
                            <div class="phone">
                                <h4>Téléphone:</h4>
                                <p>01 23 45 67 89</p>
                            </div>
                            <div class="email">
                                <h4>Email:</h4>
                                <p>contact@burgerfabric.com</p>
                            </div>
                            {{-- <p>
                                <i class="fa fa-location" aria-hidden="true"></i> Adresse : Rue 245 Boulevard de la paix, Lomé<br>
                                Tel : 01 23 45 67 89<br>
                                Email :  contact@burgerfabric.com
                            </p> --}}
                        </div><br>
                        <div class="contactLocation">
                            <div class="address">
                                <h4>Adresse:</h4>
                                <p>12345, Rue Agbalepedo, 75000 lomé</p>
                            </div>
                            <div class="phone">
                                <h4>Téléphone:</h4>
                                <p>01 23 45 67 89</p>
                            </div>
                            <div class="email">
                                <h4>Email:</h4>
                                <p>contact@burgerfabric.com</p>
                            </div>
                            {{-- <p>
                                <i class="fa fa-location" aria-hidden="true"></i> Adresse : Rue 245 Boulevard de la paix, Lomé<br>
                                Tel : 01 23 45 67 89<br>
                                Email :  contact@burgerfabric.com
                            </p> --}}
                        </div><br>
                        <div class="social_media_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>

                    </aside>
                    <div id="map" style="height: 400px; width: 100%;"></div>
                    
                </div>
            </div>
        </div>
    </section>

    <section>
        <footer>
            {{-- <p>Burger Fabric - Tous droits réservés © 2025</p> --}}
            {{-- <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div> --}}
            {{-- <div class="footer-links">
                <a href="#">A propos</a>
                <a href="#">Contact</a>
                <a href="#">Mentions légales</a>
                <a href="#">Conditions générales d'utilisation</a>
            </div> --}}
            {{-- <div class="scroll-top">
                <i class="fas fa-arrow-up"></i>
            </div> --}}

        </footer>
    </section>
@endsection
