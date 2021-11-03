@extends('layout')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-8 mt-5">
            <form action="{{url('pays')}}" type="GET" enctype="multipart/form-data">
            @csrf
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                    <select name="query" id="countries" class="form-control" type="search">
                        <option value="Select Country"></option>
                        @foreach($data as $data)
                                <option value="{{$data->country_id}}">{{$data->country->name}}</option>
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
               <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Année</label>
                    <input type="number" name="annee" class="form-control" id="exampleInputPassword1">
                </div>-->

                <br>
                <button type="submit" class="btn btn-primary">Recherche</button>
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