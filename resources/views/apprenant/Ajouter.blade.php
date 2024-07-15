<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

     <div class="container ">
        <div class="row">
            <div class="col S12">
                <h1>Ajouter un apprenant</h1>
                  <a href="/ajouter" class="btn btn-primary"></a>
                  <hr>
                @if (session('success'))
                 <div class="alert alert-success">
                     {{ session('success') }}
                 </div>
                @endif

                <ul>
                  @foreach ($errors->All() as $error)
                  <li class="alert alert-danger">
                    {{ $error }}
                  </li>
                  @endforeach
                </ul>

                <form action="/store" method="POST" class="form-group">
                  @csrf
                    <div class="form-group">
                      <label for="Nom" class="form-label">Nom</label>
                      <input type="text" class="form-control" id="Nom" name="nom" >
                     
                    </div>
                    <div class="form-group">
                        <label for="Prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" >
                    </div>
                    <div class="form-group">
                        <label for="Prenom" class="form-label">filiere</label>
                        <input type="text" class="form-control" id="filiere" name="filiere" >
                    </div>
                    <div class="form-group">
                        <label for="Prenom" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="Prenom" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" id="age">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter un etudiant</button>
                    <br> <br>
                    <a href="/dashboard" class="btn btn-danger">Retour vers liste</a>
                  </form> 
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  </body>
</html>