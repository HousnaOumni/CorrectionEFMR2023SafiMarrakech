<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> Modifier un élève</h1>
   <form action="{{route('eleves.update',$eleve->id)}}"  method="post">
       @csrf
       @method('put')
       ID élève:<input type='text' name='id' value='{{$eleve->id}}' readonly /><br/>
       Nom :<input type='text' name='nom' value='{{$eleve->nom}}' /><br/>
       Prénom :<input type='text' name='prenom' value='{{$eleve->prenom}}' /><br/>
       ID Club :<select name='club_id'>
       @foreach($clubs as $club)
         <option value={{$club->id}}>{{$club->id}} - {{$club->nom}}</option>
       @endforeach
       </select><br/>
       <input type='submit' value='Modifier' />
       <a href="{{ route('eleves.index')}}">Annuler</a>
   </form>
</body>
</html>
