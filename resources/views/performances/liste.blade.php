@extends('layout')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-8 mt-5">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">fichier</th>
      <th scope="col">année</th>
      <th scope="col">pays</th>
      <th scope="col">voir</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $data)
    <tr>
           <!-- <td><iframe src="/documents/{{$data->fichier}}" width="500" height="800"></iframe>
</td>-->
        <td>{{$data->fichier}}</td>
        <td>{{$data->annee}}</td>
        <td>{{$data->country->name}}</td>
        <td><a href="{{url('/performances',$data->id)}}">Voir fichier</td></a>
           
         
    </tr>
    @endforeach
  </tbody>
</table>
</div>
        </div>
    </div>

@endsection