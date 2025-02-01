@extends('Layouts.base')


<section class="Inscription">
    <div class="form_conataint">
        <div class="submit">
            <h1>Connexion</h1>
            <p>Veullez renseigner vos informations de connexion <br> pour vous connectez à votre compte
            </p>
        </div>

        {{-- @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('login') }}" method="POST">

            @csrf
            <div class="first_inputs">
                <div class="first_input">
                    <label for="email">Email </label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="first_input">
                    <label for="password">Mot de passe </label>
                    <input type="password" name="password" id="password" required>
                </div>
            </div><br>
            <div class='submit'>
                <button class="btn">Se Connecter</button>

                <p>Vous n'avez pas de compte ? &nbsp;  <a href="{{ route('register') }}" class="links">  S'inscrire</a></p>
            </div>
        </form>

    </div>
</section>


