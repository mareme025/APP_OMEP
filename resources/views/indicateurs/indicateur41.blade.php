@extends('layout1')

@section('content')
<h1>Liste des taux de couvertures vaccinales</h1>
<div class="container">
        <div class="row">
            <div class="col-8 mt-5">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vaccins</th>
      <th scope="col">Especes</th>
      <th scope="col">Effectif total</th>
      <th scope="col">Total à vacciner</th>
      <th scope="col">Effectifs vaccinés</th>
    </tr>
  </thead>
  <tbody>
  @foreach($vaccins as $vaccin)
    <tr>
         
            <td>{{$vaccin->id}}</td>
            <td>{{$vaccin->vaccin}}</td>
            <td>{{$vaccin->especes}}</td>
            <td>{{$vaccin->effectifsTotal}}</td>
            <td>{{$vaccin->totalAVacciner}}</td>
            <td>{{$vaccin->effectifsVaccines}}</td>
         
    </tr>
    @endforeach
  </tbody>
</table>
</div>
        </div>
    </div>
<div class="container">
        <div class="row">
            <div class="col-8 mt-5">
<form action="/indicateurs" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Vaccins</label>
    <input type="text" name="vaccin" class="form-control" id="exampleInputEmail1" aria-describedby="vaccinsHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Especes</label>
    <input type="text" name="especes" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Effectif total</label>
    <input type="number" name="effectifsTotal" class="form-control" id="exampleInputEmail1" aria-describedby="vaccinsHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Total à vacciner</label>
    <input type="number" name="totalAVacciner" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Effectifs vaccinés</label>
    <input type="number" name="effectifsVaccines" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
        </div>
    </div>
@endsection