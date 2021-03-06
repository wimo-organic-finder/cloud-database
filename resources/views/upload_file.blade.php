<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon/favicon.ico">

    <title>Cloud Database</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS & FontAwesome-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fileupload.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"> <img src="images/cloud-logo.svg" alt="lol" height="50px" width="50px"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user-circle"></span>  Admin</a>
           <div class="dropdown-menu" aria-labelledby="dropdown01">
             <a class="dropdown-item" href="#">Paramètres</a>
             <a class="dropdown-item" href="#">Another action</a>
             <a class="dropdown-item text-danger" href="signin.blade.php">Se déconnecter</a>
           </div>
         </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Upload</a>
          </li>




        </ul>
        <form class="form-inline my-2 my-lg-0">
          <button style="font-size: 11px; margin-right:15px; height : 30px; width:30px;border-radius: 300px" class="btn btn-sm btn-danger my-2 my-sm-0" type="submit">9</button>

          <input style="border-radius: 1000px" class="form-control mr-sm-2"  type="text" placeholder="Recherche" aria-label="Search">
          <button style="border-radius: 1000px" class="btn btn btn-outline-secondary my-2 my-sm-0" type="submit"><span class="fa fa-search"></span></button>

        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">

        <div class="jumbotron">
          <h1 class="display-4">Uploader un fichier</h1>
          <p class="lead">Veuillez préciser les informations relatives au fichier</p>
          <hr class="my-4">

            <div class="form-group form-upload">
              <div class="form-inline nameType">
                <input class="form-control" id="inputFileName" type="text" name="" value="" placeholder="Nom" required>
                <input class="form-control" id="inputFileType" type="text" name="" value="" placeholder="Type" required>
              </div>
                <textarea class="form-control" name="name" rows="6" cols="80" placeholder="Description du fichier"></textarea>
                <button style = "margin-top: 30px;" class="btn btn-success  " type="submit">Upload</button>
              </div>

        </div>


      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
