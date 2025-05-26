<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> Gestion des élèves </h1>
   ID Elève : {{$eleve->id}} <br/>
   Nom : {{$eleve->nom}} <br/>
   Prenom : {{$eleve->prenom}} <br/>
   ID Club : {{$eleve->club_id}} <br/>
   <h2>Liste d'activités auxquelles l'élève a participé</h2>
   <table>
       <tr>
           <th>ID activité</th><th>Description</th><th>Date début</th><th>Nombre de jours</th>
       </tr>
    @php $total =0 ; @endphp
    @foreach($eleve->activites as $activite)
    <tr>
        <td>{{$activite->id}}</td>
        <td>{{$activite->description}}</td>
        <td>{{$activite->dateDebut}}</td>
        <td>{{$activite->nombreJours}}</td>
    </tr>
    @php $total += $activite->nombreJours @endphp
    @endforeach
    </table>
    Nombre total des jours :{{$total}}
   </table>
</body>
</html>
