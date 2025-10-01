<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <hr>
    <h3 class="text-center text-uppercase">Ajouter un Contact</h3>
    <hr>
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">
                {{$error}}
            </li>
        @endforeach
    </ul>

    <form action="/contacts" method="post">

        @csrf
        <div class="form-group">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom">
        </div>
        <div class="form-group">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom">
        </div>
        <div class="form-group">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse">
        </div>
        <div class="form-group">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" class="form-control" name="telephone" id="telephone">
        </div>
        <div class="form-group">
            <label for="mib" class="form-label">Mib</label>
            <input type="text" class="form-control" name="Mib" id="mib">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="/contacts" class="btn btn-secondary">Retour</a>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
</script>
</body>

</html>
