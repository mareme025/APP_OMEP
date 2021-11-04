@extends('layout')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-8 mt-5">
            <form action="{{url('performances')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">choisie un fichier</label>
                    <input type="file" name="fichier" class="form-control" id="exampleInputEmail1" aria-describedby="vaccinsHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                    <select name="country_id" id="country_id" class="form-control">
                        <option value="Select Country"></option>
                        @foreach($pays as $pays)
                                <option value="{{$pays->id}}">{{$pays->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Annee</label>
                    <select name="annee" id="annee" class="form-control">
                        <option value="Select Years"></option>
                        <option value="2018">2018</option>
                       <!-- <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>-->
                       
                    </select>
                </div>
               <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Année</label>
                    <input type="number" name="annee" class="form-control" id="exampleInputPassword1">
                </div>-->

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
       $("#country").change(function(){
            let country_id = this.value;
            $.get('/get_states?country='+country_id,function(data){
                console.log(data);
                $("#state").html(data);
            })
        })
       // alert('okk');
    })
</script>

@endsection