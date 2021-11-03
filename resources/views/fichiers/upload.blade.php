<div class="container">
        <div class="row">
            <div class="col-8 mt-5">
<form action="{{url('fichiers')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">choisie un fichier</label>
    <input type="file" name="nomFichier" class="form-control" id="exampleInputEmail1" aria-describedby="vaccinsHelp">
  </div>

  <button type="submit" class="btn btn-primary">upload</button>
</form>
</div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Nom document</th>
            <th>view</th>
            <th>download</th>
        </tr>
        @foreach($data as $data)
        <tr>
            <td>{{$data->nomFichier}}</td>
           <td><a href="{{url('/performances',$data->id)}}">Voir</td></a>
            <td><a href="{{url('/fichiers',$data->nomFichier)}}">Download</td></a>
           
        </tr>
    @endforeach
    </table>