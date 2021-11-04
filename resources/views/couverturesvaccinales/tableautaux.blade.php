@extends('layout')
@section('content')

<h1>Liste des taux de couverture vaccinale</h1>
<div class="container">
        <div class="row">
            <div >
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Maladies</th>
      <th scope="col">Effectifs Estimes</th>
      <th scope="col"> Privées </th>
      <th scope="col"> Public </th>
      <th scope="col">Total</th>
      <th scope="col">Taux de couvertures </th>
      <th scope="col">Pays</th>
      <th scope="col">Année</th>
    </tr>
  </thead>
  <tbody>
  @foreach($vaccins as $vaccin)
    <tr>
            <td>{{$vaccin->maladies}}</td>
            <td>{{$vaccin->effectifsEstimes}}</td>
            <td>{{$vaccin->veterinairePrive}}</td>
            <td>{{$vaccin->veterinairePublic}}</td>
            <td>{{$vaccin->Total}}</td>
            <td>{{$vaccin->tauxCouvertureVaccinale}}</td>
            <td>{{$vaccin->country->name}}</td>
            <td>{{$vaccin->annee}}</td>
         
    </tr>
    @endforeach
  </tbody>
</table>
</div>
        </div>
    </div>

@endsection