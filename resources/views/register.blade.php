@extends('default')
@section('title')Inscription @stop
@section('content')
    <form class="form-signin">
  <img class="mb-4" src="images/cloud-logo.svg" alt="fefe" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Inscription</h1>
  <label for="inputLastName" class="sr-only">Nom</label>
  <input type="text" id="inputLastName" class="form-control" placeholder="Nom" required autofocus>
  <label for="inputFirstName" class="sr-only">Prénom</label>
  <input type="text" id="inputFirstName" class="form-control" placeholder="Prénom" required>
  <label for="inputEmail" class="sr-only">Addresse e-mail</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Addresse e-mail" required autofocus>
  <label for="inputPassword" class="sr-only">Mot de passe</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
  <label for="inputPasswordConfirm" class="sr-only">Mot de passe</label>
  <input type="password" id="inputPasswordConfirm" class="form-control" placeholder="Confirmer mot de passe" required>

  <label for="mobilePhone" class="sr-only">Numéro de téléphone</label>
  <input type="tel" id="mobilePhone" class="form-control" placeholder="Num. tél." required autofocus>
  <label for="dateNaiss" class="sr-only">Date de naissance</label>
  <input type="date" id="dateNaiss" class="form-control" placeholder="Date de naissance" required autofocus>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline1">Homme</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline2">Femme</label>
  </div>
  <div class="checkbox mb-3">

  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
    <p><a href="{{route('signin')}}">Déjà inscrit ? Se connecter</a></p>

</form>
@stop