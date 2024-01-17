<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>Sixteen Clothing - About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>JENJALAN <em>MY</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
              @if (Route::has('login'))
    @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ url('showcart') }}"> <i class="fas fa-shopping-cart"></i>Cart[{{ $count }}]</a>
        </li>
        <x-app-layout></x-app-layout>
    @else
        <li> <a class="nav-link" href="{{ route('login') }}">Log in</a> </li>
        @if (Route::has('register'))
            <li> <a class="nav-link" href="{{ route('register') }}">Register</a> </li>
        @endif
    @endauth
@endif
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>JENJALAN MY</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">

            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/travel-about.jpg" alt="" width="220" height="460">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Who we are &amp; What we do?</h4>
              <p>Introducing our Travel Booking System—a user-friendly web app for easy and enjoyable trip planning. Explore curated travel packages, including accommodations, transportation, and itineraries, all with a simple and efficient interface.
                <br><br>Discover the joy of stress-free travel planning with our Travel Booking System. We are here to make your trips not only memorable but also incredibly convenient. Say goodbye to complex planning. And hello to hassle-free travel!</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Milestones</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/1.png" alt="">
                <div class="hover-effect">

                </div>
              </div>
              <div class="down-content">
                <h4>95% Satisfaction Stories</h4>
                <span>High Ratings, Higher Satisfaction</span>
                <p>It's not just ratings; it's a joyous dance with our happy customers. Join the party, let's groove through seamless and delightful journeys together!</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/2.png" alt="">
                <div class="hover-effect">

                </div>
              </div>
              <div class="down-content">
                <h4>100,000+ Bookings</h4>
                <span>Thousands trust us</span>
                <p>Be part of the community that trusts us for their journeys. Join millions of happy travelers who have chosen confidence in every booking :)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/3.png" alt="">
                <div class="hover-effect">

                </div>
              </div>
              <div class="down-content">
                <h4>Worldwide Wonders Await</h4>
                <span>Now in 10+ Asean Countries</span>
                <p>Our travel magic knows no bounds! You can now plan your dream escapes in over 100 countries. Get ready to embark on a global adventure like never before! </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/4.png" alt="">
                <div class="hover-effect">

                </div>
              </div>
              <div class="down-content">
                <h4>Best Travel Booking Platform</h4>
                <span>Our trophy collection just got bigger</span>
                <p>We're thrilled to be crowned 'Best Travel Booking Platform' at the Nevo Awards, showcasing our commitment to excellence and superior service.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/5.png" alt="">
                <div class="hover-effect">

                </div>
              </div>
              <div class="down-content">
                <h4> 24/7 Service for a Decade</h4>
                <span>Always here for you</span>
                <p>We've been providing round-the-clock support. Trust us to be there for you at every step of your journey, anytime, day or night!</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/6.png" alt="">
                <div class="hover-effect">

                </div>
              </div>
              <div class="down-content">
                <h4>Preferred Partner of Top Airlines</h4>
                <span>In the Skies and Beyond!</span>
                <p>We're honored to be the preferred partner of top airlines, ensuring you access to the best deals and seamless travel experiences. Fly high with us!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<br><br><br><br>


    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i><br><br><br>
              </div>
              <div class="down-content">
                <h4>Seamless Packages</h4>
                <p>Embark on hassle-free adventures with our curated packages—blending accommodations, transportation, and itineraries seamlessly.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i><br><br><br>
              </div>
              <div class="down-content">
                <h4>Personalized Journeys</h4>
                <p>Dive into tailored adventures, crafted just for you. Unleash your style with our unique travel experiences. From us, for you.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i><br><br><br>
              </div>
              <div class="down-content">
                <h4>3X Installment</h4>
                <p>Enjoy budget-friendly travel with our 3x installment option through ShopBack and Atome, spreading the cost of your journey effortlessly. </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Crew</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/man1.png" alt="1">
              </div>

              <div class="client-item">
                <img src="assets/images/man2.png" alt="2">
              </div>

              <div class="client-item">
                <img src="assets/images/man3.png" alt="3">
              </div>

              <div class="client-item">
                <img src="assets/images/woman1.png" alt="4">
              </div>

              <div class="client-item">
                <img src="assets/images/woman2.png" alt="5">
              </div>

              <div class="client-item">
                <img src="assets/images/client-01.png" alt="6">


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2024 JenjalanMy

            
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
