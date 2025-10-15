<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <hr>
    <h1>Modifier un contact</h1>
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

    <form action="/contacts/{{$contact->id}}" method="post">

        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$contact->id}}">
        <div class="form-group">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" value="{{$contact->prenom}}">
        </div>
        <div class="form-group">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" value="{{$contact->nom}}">
        </div>
        <div class="form-group">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse" value="{{$contact->adresse}}">
        </div>
        <div class="form-group">
            <label for="numero" class="form-label">Numero</label>
            <input type="text" class="form-control" name="telephone" id="numero" value="{{$contact->telephone}}">
        </div>
        <div class="form-group">
            <label for="mib" class="form-label">rib</label>
            <input type="text" class="form-control" name="rib" id="mib" value="{{$contact->rib}}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Ajouter </button>
        <a href="/contacts" class="btn btn-seconde">Retour</a>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
</script>
</body>

</html>
