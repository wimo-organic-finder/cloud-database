@extends('layouts.default')

@section('content')
                    <form method="POST" action="{{ route('register') }}" class="form-signin">
                        <img class="mb-4" src="images/cloud-logo.svg" alt="fefe" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Inscription</h1>
                        @csrf
                        <label for="inputLastName" class="sr-only">Nom</label>
                                <input placeholder="Nom" id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label for="inputFirstName" class="sr-only">Prénom</label>
                                <input placeholder="Prenom" id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label for="inputEmail" class="sr-only">Addresse e-mail</label>
                                <input id="email" placeholder="Adresse e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label for="inputMobilePhone" class="sr-only">Numéro de téléphone</label>
                        <input id="mobile_number" placeholder="Num. tél." type="tel" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" autocomplete="mobile_number">

                        @error('mobile_number')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label for="inputBirthday" class="sr-only">Date de naissance</label>
                        <input id="birthday" placeholder="Date de naissance" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday">

                        @error('birthday')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="inputPassword" class="sr-only">Mot de passe</label>
                        <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="inputPasswordConfirm" class="sr-only">Confirmer mot de passe</label>
                        <input id="password-confirm" type="password" placeholder="Confirmer mot de passe" class="form-control" name="password_confirmation" required autocomplete="new-password">


                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                        <p><a href="{{route('login')}}">Déjà inscrit ? Se connecter</a></p>

                    </form>
@endsection
