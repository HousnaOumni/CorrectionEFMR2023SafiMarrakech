<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Liste des Élèves</h1>

        <!-- Table des élèves -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Club</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eleves as $eleve)
                    <tr>
                        <td>{{ $eleve->id }}</td>
                        <td>{{ $eleve->nom }}</td>
                        <td>{{ $eleve->prenom }}</td>
                        <td>{{ $eleve->club_id }}</td>
                        <td>
                            <!-- Bouton Modifier -->
                            <a href="{{ route('eleves.edit', $eleve->id) }}" class="btn btn-warning btn-sm">
                                Modifier
                            </a>

                            <!-- Formulaire pour supprimer -->
                            <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?')">
                                    Supprimer
                                </button>
                            </form>
                              <!-- Bouton Voir les détails (>> ) -->
                              <a href="{{ route('eleves.show', $eleve->id) }}" class="btn btn-info btn-sm">
                                >>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
