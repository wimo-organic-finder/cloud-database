 @extends('admin/default')
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
      <th scope="col">Download</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
@foreach ($files as $file)
    <tr>
      <th scope="row"> {{$file->name}} </th>
      <td> {{$file->type}} </td>
      <td> {{$file->size}} </td>
      <td> {{$file->created_at}} </td>
      <td><a href="{{route('file.download', ['id' => $file->id])}}"><span class="fa fa-download"></span> </a></td>
      <td><a href="{{route('file.delete', ['id' => $file->id])}}" class="btn btn-danger">Delete</a></td>
    </tr>

@endforeach    
  </tbody>
</table>


      </div>

@stop