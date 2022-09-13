<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changa-K</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="images/jeep.png" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css') }}">

    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
        rel="stylesheet">
</head>

<body>

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="#" class="logo">
                <img src="images/jeep.png" alt="Changa-K" />
                <p class="logo-text"> Changa-K</p>
            </a>
            @if (!Auth::guest())
                <nav class="navbar" data-navbar>
                    <ul class="navbar-list">

                        <li>
                            <a href="#" class="navbar-link active" data-nav-link>Home</a>
                        </li>


                        <li>
                            <a href="#" class="navbar-link" data-nav-link>Bookings</a>
                        </li>


                        <li>
                            <a href="/" data-toggle="modal" data-target="#aboutUs" class="navbar-link"
                                data-nav-link>About us</a>
                        </li>



                    </ul>
                </nav>
            @else
                <nav class="navbar" data-navbar>
                    <ul class="navbar-list">

                        <li>
                            <a href="{{ url('/') }}" class="navbar-link active" data-nav-link>Home</a>
                        </li>

                        <li>
                            <a href="#featured-car" class="navbar-link" data-nav-link>Explore cars</a>
                        </li>

                        <li>
                            <a href="/" data-toggle="modal" data-target="#aboutUs" class="navbar-link"
                                data-nav-link>About us</a>
                        </li>



                    </ul>
                </nav>
            @endif

            <div class="header-actions">

                <div class="header-contact">
                    <a href="tel:88002345678" class="contact-link">+265 880 911 935</a>

                    <span class="contact-time">Mon - Sat: 9:00 am - 6:00 pm</span>
                </div>

                @if (!Auth::guest())
                    <a href="#featured-car" class="btn" aria-labelledby="aria-label-txt">
                        <ion-icon name="car-outline"></ion-icon>


                        <span id="aria-label-txt">{{ auth()->user()->name }}</span>
                    </a>
                @else
                    <a href="#featured-car" class="btn" aria-labelledby="aria-label-txt">
                        <ion-icon name="car-outline"></ion-icon>

                        <span id="aria-label-txt">Explore cars</span>
                    </a>
                @endif

                @if (!Auth::guest())
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"
                        class="btn user-btn" aria-label="Profile">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a data-toggle="modal" data-target="#reservation" class="btn user-btn" aria-label="Profile">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                @endif

                <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>

            </div>

        </div>
    </header>


    <div class="content">



        @yield('content')


    </div>


    <!--
        - #FOOTER
      -->

    <footer class="footer">
        <div class="container">

            <div class="footer-top">

                <div class="footer-brand">
                    <a href="#" class="logo">
                        <h3>Changa-K</h3>
                    </a>

                    <p class="footer-text">
                        Search for cheap rental cars in Malawi. With a diverse fleet of many motor vehicles, changa-k
                        offers its
                        consumers an
                        attractive and fun selection.
                    </p>
                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Company</p>
                    </li>
                    <li>
                        <a href="#featured-car" class="footer-link">Explore</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#aboutUs" class="footer-link">About us</a>
                    </li>






                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Support</p>
                    </li>


                    <li>
                        <a href="#" data-toggle="modal" data-target="#privacyPolicy" class="footer-link">Privacy
                            policy</a>
                    </li>

                    <li>
                        <a href="#" data-toggle="modal" data-target="#terms_conditions"
                            class="footer-link">Terms
                            & conditions</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Branches in Malawi</p>
                    </li>


                    <li>
                        <a href="#" class="footer-link">Blantyre , Chilimba</a>
                    </li>





                </ul>

            </div>

            <div class="footer-bottom">

                <ul class="social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-skype"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="mail-outline"></ion-icon>
                        </a>
                    </li>

                </ul>

                <p class="copyright">
                    &copy; 2022 <a href="#">changa-k</a>. All Rights Reserved
                </p>

            </div>

        </div>
    </footer>

    <!--
      - #Terms & Conditions
    -->

    <form action="{{ url('/terms&conditions') }}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div style="color: black" class="modal  fade" id="terms_conditions" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 style="font-weight:600" class="modal-title" id="terms_conditions">Terms & Conditions
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <p><strong>Late Pick-ups </strong><strong>/ Early Drop-offs&nbsp;</strong><br>
                            Your rental starts and finishes according to the pick-up and drop-off dates and times
                            detailed on your voucher / eVoucher. Unfortunately, we are unable to provide refunds for
                            unused time if a car is picked up late or dropped off early. If you are unable to pick the
                            car up at the agreed time and date, it is essential you contact us as soon as possible. If
                            you do not, there is no guarantee that the car will still be available – and you will not be
                            entitled to any refund.<br>
                            <br>
                            <strong>One-Way Rentals</strong><br>
                            One-way rentals must be confirmed in advance and may be subject to one-way fees, payable to
                            the car hire company. We will advise you of the approximate costs after we receive your
                            booking request and receive confirmation from the car hire company regarding the one-way
                            rental.
                        </p>
                        <p><strong>Deliveries &amp; Collections&nbsp;</strong><br>
                            Some car hire companies will agree to deliver your car to / collect it from a specified
                            address. If so, there may be a fee for this service, payable to the car hire company. We
                            will advise you whether a fee will apply when you confirm your pick-up / drop-off times,
                            along with the full address details, in your booking request. Please note: car hire
                            companies generally do not deliver to or collect from private accommodation.</p>
                        <p><strong>Cancellations </strong></p>
                        <p><strong>If you cancel:</strong></p>
                        <ul>
                            <li>MORE THAN 48 hours before your rental is due to start, you’ll receive a full refund (if
                                you paid a booking deposit when you booked the car, you won’t get the deposit back).
                            </li>
                            <li>LESS THAN 48 hours before, or while you’re at the rental counter, we’ll refund what you
                                paid <em>minus</em> the cost of 3 days of your rental - so there won’t be any refund if
                                your car was booked for 3 days or less.</li>
                            <li>AFTER your rental is due to start (or you just don’t turn up) you’ll receive no refund
                            </li>
                        </ul>

                    </div>
                    <div class="modal-footer">


                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--
      - #Privacy Policy
    -->

    <form action="{{ url('/privacy policy') }}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div style="color: black" class="modal  fade" id="privacyPolicy" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 style="font-weight:600" class="modal-title" id="privacyPolicy">Privacy Policy
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Last Updated: August 2, 2022</p>
                        <p>Changa-k.com, (“we” or “us”) values you as our customer and recognizes that privacy is
                            important to you. This Privacy Statement explains how we collect, use, and disclose data
                            when you use our platform and associated services, and tells you how to contact us.</p>
                        <ol class="uitk-type-list-300 all-y-margin-two">
                            <li><b>What does this Privacy Statement cover?</b><br>This Privacy Statement is designed to
                                describe:<br>
                                <ul class="uitk-type-list-300 all-y-margin-two">
                                    <li>How and what type of personal information we collect and use</li>
                                    <li>When and with whom we share your personal information</li>
                                    <li>What choices you can make about how we collect, use, and share your personal
                                        information</li>
                                </ul>
                            </li>
                            <br>
                            <li><b>What personal information do we collect and use, and how do we collect it?</b><br>We
                                collect personal information when:<br>
                                <ul class="uitk-type-list-300 all-y-margin-two">
                                    <li>You give us the information</li>
                                    <li>We collect it automatically</li>
                                    <li>We receive it from others</li>
                                </ul>

                            </li>

                        </ol>

                    </div>
                    <div class="modal-footer">


                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--
      - #About Us
    -->

    <form action="{{ url('/about') }}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div style="color: black" class="modal  fade" id="aboutUs" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 style="font-weight:600" class="modal-title" id="aboutUs">About Us
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <b>Who are we ?</b>
                        <br>
                        <p>
                            Changa K was founded by Ian Changa in 2017. It has a fleet of 31 different kinds of vehicles
                            that meet a wide range of customer needs. The vehicles are categorized into two based on
                            capacity (size) i.e. big vehicles and small vehicles. Each category has its own fixed rate
                            (price per day). Apart from mere customers, its vehicles are mostly hired by people from
                            abroad during vacations and other tours. Currently, this car hire company has approximately
                            26 employees.</p>
                        <b>Where are we located ?</b>
                        <br>
                        <p>
                            Changa K, a small car hire company that has just been newly introduced in business. This car
                            hire company is situated in Chirimba, Blantyre.</p>



                    </div>
                    <div class="modal-footer">


                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--
      - #Vehicle Reservation Form
    -->

    @if (!Auth::guest())
        <form action="{{ url('/reserve') }}" method="POST" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div style="color: black" class="modal  fade" id="reservation" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 style="font-weight:600" class="modal-title" id="reservation">Vehicle Reservation Form
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">

                                <div class="col-md-6">


                                    <div class="input-wrapper">
                                        <label for="input-2" class="input-label">Fullname</label>

                                        <input type="text" name="Hourly-pay" id="input-2"
                                            class="modal-input-field" placeholder="Add fullname">
                                    </div>

                                    <div class="input-wrapper">
                                        <label for="input-3" class="input-label">Phone no</label>

                                        <input type="phone" name="year" id="input-3"
                                            class="modal-input-field" placeholder="Add phone number">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="input-3" class="input-label">Pickup Date</label>

                                        <input type="date" name="year" id="input-3"
                                            class="modal-input-field" placeholder="Add pickup date">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="input-3" class="input-label">Return Date</label>

                                        <input type="date" name="year" id="input-3"
                                            class="modal-input-field" placeholder="Add derivery date">
                                    </div>
                                </div>



                                <div class="col-md-6">

                                    <div class="input-wrapper">
                                        <label for="input-3" class="input-label">Email</label>

                                        <input type="email" name="year" id="input-3"
                                            class="modal-input-field" placeholder="Add email">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="input-1" class="input-label">Car, model, or brand</label>


                                        <input type="text" name="Hourly-pay" id="input-2"
                                            class="modal-input-field" placeholder="Mazda Demio | 2500/Hour">

                                    </div>
                                    <div class="input-wrapper">
                                        <label for="input-3" class="input-label">Pickup Time</label>

                                        <input type="time" name="year" id="input-3"
                                            class="modal-input-field" placeholder="Add pickup time">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="input-3" class="input-label">Return Time</label>

                                        <input type="time" name="year" id="input-3"
                                            class="modal-input-field" placeholder="Add derivery time">
                                    </div>
                                </div>





                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>


                            </div>
                        </div>
                    </div>
                </div>
        </form>
    @else
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div style="color: black" class="modal  fade" id="reservation" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 style="font-weight:600" class="modal-title" id="reservation">Login
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label text-md-end">{{ __('Email') }}</label>
                           
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-12 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      

                        <div class="row mb-0">
                            <div class="col-md-12  px-10">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                             
                                    <a class="" href="{{ route('register') }}">
                                        dont have an account yet? Register
                                    </a>
                            
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
   
        </form>
    @endif




    <!--
        - custom js link
      -->
    <script src="js/script.js"></script>
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/sweetalert.js') }}"></script>
    <script src="{{ url('js/dataTables.min.js') }}"></script>

    <!--
        - ionicon link
      -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
