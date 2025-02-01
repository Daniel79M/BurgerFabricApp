@extends('Layouts.base')


<section class="Inscription">
    <div class="form_conataint">
        <div class="submit">
            <h1>Inscription</h1>
            <p>Veullez renseigner vos informations pour vous inscrire</p>
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

        <form action="" method="POST">
            @csrf

            <div class="les_inputs">
                <div class="first_inputs">
                    <div class="first_input">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div  class="first_input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="first_input">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                </div>
                <div class="seconde_input">
                    <div class="first_input">
                        <label for="password_confirmation">Confirmer le mot de passe</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                    </div>
                    <div class="first_input">
                        <label for="PhoneNumber">Téléphone</label>
                        <input type="text" name="PhoneNumber" id="PhoneNumber" required>
                    </div>
                    <div class="first_input">
                        <label for="role">Rôle</label>
                        <select name="role" id="role" required>
                            <option value="user">Utilisateur</option>
                            <option value="delivery">Livreur</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="submit">
                <button class="btn agree">S'inscrire</button>

                <p>Vous avez deja un compte  &nbsp; <a href="{{ route('login') }}" class="links">  Se connecter</a></p>
            </div>
        </form>

    </div>
</section>
