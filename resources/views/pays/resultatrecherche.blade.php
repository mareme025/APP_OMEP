@extends('layout')
@section('content')
<style>
iframe{
       width:100%;
       height:70em;
       border:2px solid black;
       margin-left:-5px;    
 }

 </style>
<hr>
<a href="{{url('/performances',$data[0]->fichier)}}"><button class="btn btn-warning">Telecharger</button></a>
<iframe src="/documents/{{$data[0]->fichier}}#toolbar=0"></iframe>
<div>
    
</div>

@endsection