@extends('layouts.main')
@section('content')

<div class="starter-template">

        <!-- Tableau contenant les fichiers -->
        <table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Type</th>
      <th scope="col">Taille</th>
      <th scope="col">Créé le</th>
      <th scope="col">Commentaire</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">La Reine des Neiges</th>
      <td>.mp4</td>
      <td>745 MB</td>
      <td>03.06.2016</td>
      <td>Full HD</td>
      <td> <span class="fa fa-download"></span> </td>
    </tr>
    <tr>
      <th scope="row">Aladdin</th>
      <td>.mp4</td>
      <td>325 MB</td>
      <td>30.08.2013</td>
      <td>720P</td>
      <td> <span class="fa fa-download"></span> </td>
    </tr>
    <tr>
      <th scope="row">Kanye West - The Life of Pablo</th>
      <td>.mp3</td>
      <td>3.6GB</td>
      <td>23.11.2016</td>
      <td>Deluxe Edition</td>
      <td> <span class="fa fa-download"></span> </td>
    </tr>
  </tbody>
</table>


</div>
@stop