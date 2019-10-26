@extends('default')
@section('title')Connexion @stop
@section('css')css/signin.css
@stop
@section('content')
    <form class="form-signin">
  <img class="mb-4" src="images/cloud-logo.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
  <label for="inputEmail" class="sr-only">Addresse e-mail</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Addresse e-mail" required autofocus>
  <label for="inputPassword" class="sr-only">Mot de passe</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Se souvenir de moi
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p><a href="{{route('register')}}">Pas encore inscrit ? S'inscrire</a></p>
</form>
@stop