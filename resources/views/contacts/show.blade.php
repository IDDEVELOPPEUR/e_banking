//the show view for a contact in a Laravel application
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Voir un contact</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <hr>
            <h1 class="text-center text-uppercase">Détails du Contact</h1>
            <hr>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nom: {{$contact->nom}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Prénom: {{$contact->prenom}}</h6>
                    <p class="card-text">Adresse: {{$contact->adresse}}</p>
                    <p class="card-text">Téléphone: {{$contact->telephone}}</p>
                    <p class="card-text">rib: {{$contact->rib}}</p>
                    <a href="/contacts" class="btn btn-secondary">Retour</a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
    </body>

</html>
