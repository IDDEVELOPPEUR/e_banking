<!doctype html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>liste des contacts</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    </head>

    <body>
        <hr>
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-3 bg-success p-2 rounded-3  ">
                <a class="btn btn-light text-black " href="/dashboard">Dashboard</a>
                <a class="btn btn-light text-black" href="{{ route('contacts.create') }}">Ajouter un contact</a>
            </div>
            <h1 class="text-center text-success ">Liste des contacts</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($liste as $contact)
                    <tr>
                        <th scope="row">{{$contact->id}}</th>
                        <td>{{$contact->prenom}}</td>
                        <td>{{$contact->nom}}</td>
                        <td class="d-flex justify-content-around p-1 m-0">
                            <a class="btn btn-success" href="contacts/{{$contact->id}}/edit">Modifier</a>
                            <a class="btn btn-warning" href="contacts/{{$contact->id}}">Voir détails</a>
                            <form action="contacts/{{$contact->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
    </body>

</html>
