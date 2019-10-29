@extends('user/default')
@section('content')

      <div class="starter-template">

        <div class="jumbotron">
          <h1 class="display-4">Envoyer un feedback</h1>
          <p class="lead">Dites-nous ce que vous pensez de notre application !</p>
          <hr class="my-4">

            <div class="form-group">
                <textarea class="form-control form-rounded" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button style = "margin-top: 30px;" class="btn btn-lg btn-secondary  " type="submit">Envoyer</button>
              </div>

        </div>


      </div>
      @stop