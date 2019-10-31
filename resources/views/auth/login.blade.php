@extends('layouts.default')

@section('content')
<div class="container">

    <form method="POST" action="{{ route('login') }}" class="form-signin">
        @csrf
        <img class="mb-4" src="images/cloud-logo.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
        <label for="inputEmail" class="sr-only">Addresse e-mail</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        <div class="checkbox mb-3">
            <label>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Se souvenir de moi') }}
                </label>
            </label>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ __('Login') }}
        </button>
        <p><a href="{{route('register')}}">Pas encore inscrit ? S'inscrire</a></p>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
</div>
@endsection
