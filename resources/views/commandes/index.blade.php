resources/views/commandes/liste.blade.php

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Commandes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Liste des Commandes</h1>

    @if ($commandes->isEmpty())
        <p>Aucune commande trouvée.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom du client</th>
                    <th>Date de Commande</th>
                    <th>État de Paiement</th>
                    <!-- Ajoutez plus de colonnes si nécessaire -->
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                <tr>
                    <td>{{ $commande->id }}</td>
                    <td>{{ $commande->nom }}</td>
                    <td>{{ $commande->date_commande }}</td>
                    <td>{{ $commande->etat_paiement }}</td>
                    <!-- Ajoutez plus de colonnes si nécessaire -->
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ url('/commandes/create') }}" class="btn btn-primary">Ajouter une commande</a>
</body>
</html>
