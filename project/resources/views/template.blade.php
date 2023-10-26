<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{asset('css/master.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/Regestration.css">
    <link rel="stylesheet" href="{{asset('trainercard.css')}}" />
    <link rel="stylesheet" href="{{asset('trainerinfo.css')}}" />
    <style>
        /* Additional custom styles */
        .card {
          border: 1px solid #ddd;
          margin-bottom: 20px;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
        }
    
        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
    
        .card-title {
          color: #333;
          font-size: 18px;
          font-weight: bold;
        }
    
        .card-text {
          color: #777;
          margin-bottom: 10px;
        }
      </style>
    <title>Landing Page</title>
</head>

<body>
    <header style="position: fixed">
    <a href="/" class="logo"><img src=" {{asset('images/1-removebg-preview.png')}}" width="120px" alt="handidrive"></a>
    <nav class="navigationg">
        <a href="/"> home </a>
        </div>
        <a href="/aboutus"> about us</a>
        <a href="/contactus">Contact us</a>
        <a href="/trainercard">Book</a>
        <a>
        <div class="dropdown-menug">
            <i class="fa-regular fa-user" style="color: #fafafa;"></i>
        <div class="menu-content"></a>
            @guest
            <a class="links-hidden" href="/userlogin">Login</a>
            <a class="links-hidden" href="trainee_register"> Trainee </a>
            <a class="links-hidden" href="trainer_register"> Trainer </a>
            @endguest
            @auth
            <a  class="links-hidden" href="/mylogout">Logout</a>
            <a class="links-hidden" href="/user/profile">profile</a>
            @endauth


        </div>
    </nav>
    </header>

    @yield('main')
</div>
    <footer>
        <section class="grid4">
            <div id="grid4_div_1">
                <img id="logo" src="images/1-removebg-preview.png" alt="logo">
                <p>Generate outside the box thinking with the possibility to targtet the low.</p>
                <section style="margin-right:80px">
                    <input type="email"  id="" placeholder="Enter email..." style="width: 300px ;">
                    <button>Submit</button>
                </section>
            </div>
            <div>
                <h5>Why Choose Us?</h5>
                
                    <a href="#home"> Home </a>
                    <a href="#register">Register</a>
                    <a href="#Trainee">Trainee</a>
                    <a href="#Trainer">Trainer</a>
                    <a href="#about us">About Us</a>
                    <a href="#contact us">Contact Us</a>
            </div>
            <div>
                <h5>Company</h5>
                
                    <a href="#contact us"> Contact Us </a>
                    <a href="#login"> login </a>
                    <a href="#Investor Relations"> Investor Relations </a>
                    <a href="#Media Kit"> Media Kit </a>
                
            </div>
            <div>
                <h5>Resources</h5>
                    <a href="#Community">Community</a>
                    <a href="#Events">Events</a>
                    <a href="#Help Center">Help Center</a>
                    <a href="#Partners">Partners</a>
            </div>
        </section>
        <hr>
    </footer>
    {{-- <script src="Registration.js"></script> --}}
    {{-- <script src="../../public/js/script.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-GX5RhAJTSxfAp80mSUfJ79enrS3h3pEKg8OrwsZSs1wKyrTROVat0pvgP5RS5DAHXeSXON6T4FoKapNDmTrdOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>    
</body>
</html>
