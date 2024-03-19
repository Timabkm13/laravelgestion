<!DOCTYPE html>
<html>
<head>
    <title>Add Commande</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Add Commande</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{url('/commandes/create')}}">
        @csrf

        <h2>Client Information</h2>

        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" class="form-control">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" id="adresse" class="form-control">
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone:</label>
            <input type="text" name="telephone" id="telephone" class="form-control">
        </div>

        <h2>Vehicle Information</h2>

        <div class="form-group">
            <label for="matricule">Matricule:</label>
            <input type="text" name="matricule" id="matricule" class="form-control">
        </div>

        <div class="form-group">
            <label for="marque">Marque:</label>
            <input type="text" name="marque" id="marque" class="form-control">
        </div>

        <h2>Commande Details</h2>

        <div class="form-group">
            <label for="carburant_id">type Carburant:</label>
            <select name="carburant_id" id="carburant_id" class="form-control">
                @foreach ($carburants as $carburant)
                    <option value="{{ $carburant->id }}">{{ $carburant->type_carburant }}</option>
                @endforeach
            </select>
            <label for="carburant_id">prix_unitaire	:</label>
            <select name="carburant_id" id="carburant_id" class="form-control">
                @foreach ($carburants as $carburant)
                    <option value="{{ $carburant->id }}">{{ $carburant->prix_unitaire }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date_commande">Date de Commande:</label>
            <input type="date" name="date_commande" id="date_commande" class="form-control">
        </div>

        <div class="form-group">
            <label for="quantite_commandee">Quantité Commandée:</label>
            <input type="number" name="quantite_commandee" id="quantite_commandee" class="form-control">
        </div>

        <div class="form-group">
            <label for="etat_paiement">État de Paiement:</label>
            <select name="etat_paiement" id="etat_paiement" class="form-control">
                <option value="En attente">En attente</option>
                <option value="Payé">Payé</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Commande</button>
    </form>

</body>
</html>