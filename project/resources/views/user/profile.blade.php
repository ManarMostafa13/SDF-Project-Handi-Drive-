@extends('template')
@section("main")

<div class="container-fluid" >
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 bg-dark text-white" style="padding-top:20vh ;width:20%; color:#333">
      <div class="sidebar" style="height: 60vh" >
        <img src="/storage/imgs/{{auth()->user()['image']}}" height="100px" width="150px" alt="Profile Image" class="img-fluid">
        <h6>{{auth()->user()['name']}}</h6>
        <h6>{{auth()->user()['email']}}</h6>
        <h6>+{{auth()->user()['phone']}}</h6>
        <h6>{{auth()->user()['type_of_disapility']}}</h6>
      </div>
    </div>

    <!-- Content -->

@php
      use Carbon\Carbon;
@endphp

    <div class="col-md-9" style="padding-top:10vh ">
      <div class="row">
        @foreach(Auth::user()->session as $item)
        @php
      $currentDatetime = Carbon::now(); 
      $datetime = Carbon::parse($item->date['dates']);
      @endphp
      @if(!($datetime->lessThan($currentDatetime)))
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Date:{{$item->date['dates']}}</h5>
              <p class="card-text">Price:{{$item->date['price']}} L.E</p>
              <p class="card-text">Duration:{{$item->date['duration']}} h</p>
              <p class="card-text">Name:{{$item->date->trainer['name']}}</p>
              <p class="card-text">car model:{{$item->date->trainer['car_model']}}</p>
              <h5>Upcoming Date</h5>
              <a href="{{route("sessiondel",['session'=>$item])}}"><i class="fa-sharp fa-solid fa-trash"></i></a>
            </div>
          </div>
        </div>
        @endif
@endforeach
  </div>
  </div>
</div>
@endsection