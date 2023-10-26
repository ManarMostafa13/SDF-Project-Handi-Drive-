@extends('template')
@section("main")
  {{-- <div class="container"> --}}

    <div class="row" style="width:100% ;padding-left:10%;padding-top:15vh ">

  @foreach($trainer as $item)
      <div class="col-12 col-md-4 ">
        <div class="card h-60 p-3 mb-4  card border-dark mb-3">
          <img src="/storage/imgs/{{$item['image']}}" width="500px" height="200px""="card-img-top" alt="...">
          <div class="card-body" style="padding-left:20px ">
            <h5 class="card-title">{{$item['name']}}</h5>
            <p class="card-text"> <b> model </b> :{{$item['car_model']}}</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <a href="{{route('trainer',['trainer'=>$item])}}" class="btn btn-dark  btn-block " style="margin-bottom:20px;margin-left:-20px;padding:20px">Available Dates</a>
          </div>
        </div>
      </div>
@endforeach

    </div>
  {{-- </div> --}}
@endsection
