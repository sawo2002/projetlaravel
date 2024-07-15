<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

        <div class="container text-center">
            <div class="row">
                <div class="col S12">
                    
                        <h1> Liste des apprenants </h1>
                        <hr>
                        <a href="/ajouter" class="btn btn-primary">Ajouter un apprenant</a>
                        <hr>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                       @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Filiere</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                 @foreach($apprenants as $apprenant)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $apprenant->nom }}</td>
                                        <td>{{ $apprenant->prenom }}</td>
                                        <td>{{ $apprenant->filiere }}</td>
                                        <td>{{ $apprenant->email }}</td>
                                        <td>{{ $apprenant->age }}</td>
                                        {{-- <td>
                                            <a href="/modifier/{{ $apprenant->id }} " class="btn btn-info">Modifier</a>

                                            <a href="/supprimer/{{ $apprenant->id }} " class="btn btn-danger">Supprimer</a>

                                            <a href="{{route('detail',$apprenant->id)  }} " class="btn btn-info">Details</a>
                                        </td> --}}
                                    </tr>
                                    @php
                                        $i += 1;
                                    @endphp
                                 @endforeach
                               
                            </tbody>
                        </table>
                        </div>
                </div>
            </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  </body>
</html>