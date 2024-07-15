<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Detail Produit</h1>
    <div class="apprenant">
        Nom:{{$apprenants->nom}} <br>
        Prenom:{{$apprenants->prenom}} <br>
        Filiere:{{$apprenants->filiere}} <br>
        Email:{{$apprenants->email}} <br>
        Age:{{$apprenants->age}} <br>
    </div>


    <a href="/dashboard" class="btn btn-danger">Retour a la page listes des apprenants</a>
</body>
</html>