@extends('template')
@section("main")
    
<div class="container-fluid" >
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 bg-dark text-white" style="padding-top:20vh ;width:20%; color:#333">
      <div class="sidebar" style="height: 60vh" >
        <img src="/storage/imgs/{{$trainer['image']}}" height="100px" width="150px" alt="Profile Image" class="img-fluid">
        <h6>{{$trainer['name']}}</h6>
        <h6>{{$trainer['car_model']}}</h6>
        <h6>{{$trainer['email']}}</h6>
        <h6>+{{$trainer['phone']}}</h6>
        <h6>{{$trainer['type_of_disapility']}}</h6>
      </div>
    </div>
    @php
    use Carbon\Carbon;
    $flag=false
@endphp

    <!-- Content -->

    <div class="col-md-9" style="padding-top:10vh ">
      <div class="row">

        @foreach($trainer->date as $item)
        @php
        $currentDatetime = Carbon::now(); 
        $datetime = Carbon::parse($item['dates']);
        @endphp
          @if(!($datetime->lessThan($currentDatetime)) )
          @php
              $flag=true
          @endphp
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
                
              <h5 class="card-title">Date:{{$item['dates']}}</h5>
              <p class="card-text">Price:{{$item['price']}}L.E</p>
              <p class="card-text">Duration:{{$item['duration']}}h</p>
              
            @auth
            @if($item->session)
                <h5 style="color: red">reserved</h5>
        @else
            <a href="{{route('book',['date'=>$item])}}" class="btn btn-dark  btn-block " style="margin-bottom:30px;padding:20px;">Book</a>
                @endif
                @else
                <a href="/userlogin" class="btn btn-dark  btn-block " style="margin-bottom:30px;padding:20px;">Book</a>
            @endauth
            </div>
            </div>
        </div>
        @endif
@endforeach
@if(!$flag )
<div class="alert alert-primary" role="alert">
    No available date
</div>
        @endif

    </div>
</div>
</div>

@endsection