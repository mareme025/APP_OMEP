@extends('layout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-8 mt-5">
   <form action="/couverturesvaccinales" method="POST">
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
  <div class="form-group">
    <label for="exampleInputPassword1">Country</label>
    <select name="country_id" id="countries" class="form-control">
    <option value="Select Country"></option>
    @foreach($countries as $country)
          <option value="{{$country->id}}">{{$country->name}}</option>
      @endforeach
     </select>
  </div>
  <div class="form-group">
                    <label for="exampleInputPassword1">Annee</label>
                    <select name="annee" id="annee" class="form-control">
                        <option value="Select Years"></option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                       
                    </select>
                </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
        </div>
    </div>
    @endsection