@extends('template')
@section("main")

    <title>trainer Registration</title>

    <main>
      <div class="row" style="width:100% ;padding-left:10%;padding-top:10vh ">
      <div class="container">
        <form id="registration-form" class="registration-form"method="post" enctype="multipart/form-data" action="{{route('trainerstore')}}"> 
          @csrf
          <div class="form-row">
            <div class="form-group">
              <input type="text" name="name"id="name" placeholder="Full Name" required>
            </div>
            @error('name')
             {{$message}}   
            @enderror
            <div class="form-group">
              <input type="tel" name="phone" id="phone" placeholder="Phone Number" required>
            </div>
          </div>
          @error('phone')
          {{$message}}   
         @enderror
          <div class="form-row">
            <div class="form-group">
              <input type="email" name="email" id="email" placeholder="Email Address" required>
            </div>
            @error('email')
          {{$message}}   
         @enderror
            <div class="form-group">
              <input type="number" name="age" id="age"placeholder="Age" required>
            </div>
            @error('age')
          {{$message}}   
         @enderror
<div class="form-group">
    <input type="file" id="img" name="image">
</div>
@error('img')
          {{$message}}   
         @enderror
<div class="form-group">
    <input type="text" id="car_model" name="car_model" placeholder="car model">
</div>
@error('car_model')
          {{$message}}   
         @enderror
          <div class="form-group">
            <input id="driving_licence" type="text"  name="driving_licence"  required autocomplete="car_licence" autofocus placeholder="driving licence">
          </div>
          @error('phone')
          {{$message}}   
         @enderror
          <div class="form-group">
            <input id="car_licence" type="text"  name="car_licence"  required autocomplete="car_licence" autofocus placeholder="car licence">
          </div>
          
          @error('car_licence')
          {{$message}}   
         @enderror
          <div class="form-row">
            <div class="form-group">
              <label for="national-id"></label>
              <input type="text" name="national_id" id="national-id"placeholder="National ID" required>
            </div>
            @error('national_id')
          {{$message}}   
         @enderror
            <div class="form-group">
              <select id="state" name="state" required>
                <option value="">Select State</option>
                <option value="alexandria">Alexandria</option>
                <option value="aswan">Aswan</option>
                <option value="cairo">Cairo</option>
                <option value="luxor">Luxor</option>
              </select>
            </div>
          </div>
          @error('state')
          {{$message}}   
         @enderror
          <div class="form-row">
            <div class="form-group">
              <select id="disability-type" name="type_of_disapility"placeholder="Type of Disability" required>
                <option value="">Select Disability Type</option>
                <option value="upper body disapility">upper body disability</option>
                <option value="lower body disapility">lower body disability</option>
                <option value="deaf and dump">deaf and dumb</option>
              </select>
            </div>
            @error('type_of_disapility')
          {{$message}}   
         @enderror
            <div class="form-group">
              <label class="Gender">Gender</label>
              <div class="radio-group">
                <div class="radio">
                  <input type="radio" id="male" name="gender" value="male" required>
                  <label for="male">Male</label>
                </div>
                <div class="radio">
                  <input type="radio" id="female" name="gender" value="female" required>
                  <label for="female">Female</label>
                </div>
                </div>
            </div>
          </div>
          @error('gender')
          {{$message}}   
         @enderror
          <div class="form-row">
            <div class="form-group">
              <input type="password" name="password" id="password" placeholder="password" required>
            </div>
            @error('password')
          {{$message}}   
         @enderror
            <div class="form-group">
              <input type="password" name="password_confirmation" id="confirm"placeholder="Confirm password" required>
            </div>
            @error('password_confirmation')
          {{$message}}   
         @enderror
          </div>
          <button type="submit" class="btn">Register</button>
        </form>
      </div>
    </main>
  </div>

@endsection