@extends('Layouts.base')

@section('content')
    <section class="">
        <div>

        </div>
    </section>
    <section>
        <div class="catégoriesListe">

        </div>
        <div >
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
        </div>
    </section>
@endsection