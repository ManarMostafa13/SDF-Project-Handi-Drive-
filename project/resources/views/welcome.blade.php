
@extends('template')
@section("main")
    <section class="main" id="home">
      <div>
        <h2><span> handidrive </span></h2>
        <h3>I help disable people</h3>
        <a href="http://127.0.0.1:8000/trainercard" class="main-btn" style="margin-left: 20%">Book</a>
        <div class="social-icons">
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </section>

    <section class="cards" id="goals">
      <h2 class="title">goals</h2>
      <div class="content">
        <div class="card">
          <div class="icon">
            <i class="fas fa-edit"></i>
          </div>
          <div class="info">
            <h3>Social Services</h3>
          </div>
        </div>
        <div class="card">
          <div class="icon">
            <i class="fas fa-briefcase"></i>
          </div>
          <div class="info">
            <h3>Employment Support</h3>
          </div>
        </div>
        <div class="card">
          <div class="icon">
            <i class="fas fa-graduation-cap"></i>
          </div>
          <div class="info">
            <h3>Education and booking</h3>
          </div>
        </div>
      </div>
    </section>
    <section class="cards" id="goals">
      <h2 class="title"> Counters </h2>
      <div class="content">
        <div class="card">
          <div class="icon">
            <i> {{count($trainer)}} </i>
          </div>
          <div class="info">
            <h3>Trainers</h3>
          </div>
        </div>
        <div class="card">
          <div class="icon">
            <i> {{$trainee}} </i>
          </div>
          <div class="info">
            <h3>Trainees</h3>
          </div>
        </div>
        <div class="card">
          <div class="icon">
            <i> {{$sessions}} </i>
          </div>
          <div class="info">
            <h3>Sessions</h3>
          </div>
        </div>
      </div>
    </section>
     <section class="projects" id="register">
      <h2 class="title">Top Trainer</h2>
      <div class="content">
        @foreach($trainer as $item)
        <div class="project-card">
          <div class="project-image">
            <img src="/storage/imgs/{{$item->image}}" />
          </div>
          <div class="project-info">
            <strong class="project-title">
              <a class="link" href="book.html"> {{$item->name}} </a>
              <a href="{{route("trainer",['trainer'=>$item])}}" class="more-details">More details</a>
            </strong>
          </div>


          <p class="hidden"> you are welcome happy good.</p>
        </div>
       @endforeach

      </div>
    </section> 

    <section class="team" id="about us">
      <h2 class="title">about us</h2>
      <p class="center">
        A trainer driving team consists of a group of professionals who work
        together
      </p>
      <div class="teams">
        <div class="team1">
          <img src="./images/6.jpg" alt="" width="400" height="300"/>
          <div>
            <h4>Mohammed</h4>
            <p>
              Lead Driving Instructor: The lead driving instructor is the
              experienced
            </p>
          </div>
        </div>
        <div class="team1">
          <img src="./images/1.jpg" alt=""  width="400" height="300"/>
          <div>
            <h4>Mostafa</h4>
            <p>
              Lead Driving Instructor: The lead driving instructor is the
              experienced
            </p>
          </div>
        </div>

        {{-- <div class="team1">
          <img
            src=".\images\OIP (5).jpg"
            alt="" width="400" height="300" />

          
        </div> --}}
      </div>
    </section>
    <h2 class="title">Let's Training</h2>
    <section>
        <div class="how__use">
        <div class="left">
          <div class="text">
            <div class="left__text">
              {{-- <p>1</p> --}}
            </div>
            <div class="right__text">
              <p> Register as a Trainer   </p>
              <span> Rest assured, there's a specialist for you </span>
            </div>
         
          </div>
<div class="text">
    <div class="left__text">
                {{-- <p>2</p> --}}
              </div>
              <div class="right__text">
                <p> Choose your Available Dates  </p>
                <span> Contact each other and discuss all the details </span>
              </div>
</div>
<div class="text">

              <div class="left__text">
                {{-- <p>3</p> --}}
              </div>
              <div class="right__text">
                <p>  Complete your Profile  </p>
                <span> Enjoy and Benefit from the site </span>
              </div>
</div>

        </div>

        <div class="right">
          <img src=".\images\OIP (7).jpg" alt=""/>
        </div>
      </div>
    </section>

    <section class="cards contact" id="contact us">
      <h2 class="title">Contact Us</h2>
      <div class="content">
        <div class="card">
          <div class="icon">
            <i class="fas fa-phone"></i>
          </div>
          <div class="info">
            <h3>Phone</h3>
            <p>+20122222222</p>
          </div>
        </div>
        <div class="card">
          <div class="icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="info">
            <h3>Email</h3>
            <p>business@handidrive.com</p>
          </div>
        </div>
        <div class="card">
          <div class="icon">
            <i class="fab fa-facebook"></i>
          </div>
          <div class="info">
            <h3>facebook</h3>
            <p>handidrive</p>
          </div>
        </div>
      </div>
    </section>
@endsection
