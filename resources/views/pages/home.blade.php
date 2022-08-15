@extends('layouts.guest')
@section('content')
    <main>
        <article>

            <!--
            - #HERO
          -->

            <section class="section hero" id="home">
                <div class="container">

                    <div class="hero-content">
                        <h2 class="h1 hero-title"> <span style="color:#FE673C">Looking </span>for a car  to rent ?</h2>

                        <p class="hero-text">
                            We got you covered with luxurious & affordable cars!
                        </p>
                    </div>

                    <div class="hero-banner"></div>

                    <form action="" class="hero-form">

                        

                        <div class="input-wrapper">
                            <label for="input-2" class="input-label">Fullname</label>

                            <input type="text" name="Hourly-pay" id="input-2" class="input-field"
                                placeholder="Add fullname">
                        </div>

                        <div class="input-wrapper">
                            <label for="input-3" class="input-label">Email</label>

                            <input type="email" name="year" id="input-3" class="input-field"
                                placeholder="Add email">
                        </div>
                        <div class="input-wrapper">
                            <label for="input-3" class="input-label">Phone no</label>

                            <input type="phone" name="year" id="input-3" class="input-field"
                                placeholder="Add phone number">
                        </div>
                        <div class="input-wrapper">
                            <label for="input-1" class="input-label">Car, model, or brand</label>

                            <select class="input-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Choose a vehicle</option>
                                <option value="2">Mazda Demio</option>
                                <option value="3">VW Pollo</option>
                                <option value="1">Mazda Verisa</option>
                                 <option value="1">Toyota Fortuner</option>
                              </select>
                        </div>
                        <div class="input-wrapper">
                            <label for="input-3" class="input-label">Pickup Date</label>

                            <input type="date" name="year" id="input-3" class="input-field"
                                placeholder="Add pickup date">
                        </div>
                        <div class="input-wrapper">
                            <label for="input-3" class="input-label">Pickup Time</label>

                            <input type="time" name="year" id="input-3" class="input-field"
                                placeholder="Add pickup time">
                        </div>
                        <div class="input-wrapper">
                            <label for="input-3" class="input-label">Return Date</label>

                            <input type="date" name="year" id="input-3" class="input-field"
                                placeholder="Add derivery date">
                        </div>
                        <div class="input-wrapper">
                            <label for="input-3" class="input-label">Return Time</label>

                            <input type="time" name="year" id="input-3" class="input-field"
                                placeholder="Add derivery time">
                        </div>
                        <button type="submit" class="btn">Rent A Car Now</button>

                    </form>

                </div>
            </section>





            <!--
            - #FEATURED CAR
          -->

            <section class="section featured-car" id="featured-car">
                <div class="container">

                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Featured Cars</h2>

                        <a href="{{url('/cars')}}" class="featured-car-link">
                            <span>View more</span>

                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>

                    <ul class="featured-car-list">

                        <li>
                            <div class="featured-car-card">

                                <figure class="card-banner">
                                    <img src="images/car-1.jpg" alt="Toyota RAV4 2021" loading="lazy" width="440"
                                        height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Mazda Demio</a>
                                        </h3>

                                        <data class="year" value="2021">2021</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Hybrid</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">6.1km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Manual</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>MK 2500</strong> / Hour
                                        </p>

                                       

                                        <button data-toggle="modal" data-target="#reservation" class="btn">Rent now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">

                                <figure class="card-banner">
                                    <img src="images/car-2.jpg" alt="BMW 3 Series 2019" loading="lazy" width="440"
                                        height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Volkswagen Golf</a>
                                        </h3>

                                        <data class="year" value="2019">2019</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">8.2km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Automatic</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>MK 3500</strong> / Hour
                                        </p>

                                       

                                        <button class="btn">Rent now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">

                                <figure class="card-banner">
                                    <img src="images/car-3.jpg" alt="Volkswagen T-Cross 2020" loading="lazy"
                                        width="440" height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Mazda Verisa</a>
                                        </h3>

                                        <data class="year" value="2020">2020</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">5.3km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Manual</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>MK 1500</strong> / Hour
                                        </p>

                                       

                                        <button class="btn">Rent now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">

                                <figure class="card-banner">
                                    <img src="images/car-4.jpg" alt="Cadillac Escalade 2020" loading="lazy"
                                        width="440" height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Mazda Bongo</a>
                                        </h3>

                                        <data class="year" value="2020">2020</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">7.7km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Automatic</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>MK 2000</strong> / Hour
                                        </p>

                                       

                                        <button class="btn">Rent now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">

                                <figure class="card-banner">
                                    <img src="images/car-5.jpg" alt="BMW 4 Series GTI 2021" loading="lazy"
                                        width="440" height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Toyota Hilux</a>
                                        </h3>

                                        <data class="year" value="2021">2021</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">7.6km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Automatic</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>MK 5000</strong> / Hour
                                        </p>

                                       

                                        <button class="btn">Rent now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">

                                <figure class="card-banner">
                                    <img src="images/car-6.jpg" alt="BMW 4 Series 2019" loading="lazy" width="440"
                                        height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Toyota Fortuner</a>
                                        </h3>

                                        <data class="year" value="2019">2019</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">7.2km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Manual</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>MK 7000</strong> / Hour
                                        </p>

                                       

                                        <button class="btn">Rent now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!--
            - #GET START
          -->

            <section class="section get-start">
                <div class="container">

                    <h2 class="h2 section-title">Get started with 4 simple steps</h2>

                    <ul class="get-start-list">

                        <li>
                            <div class="get-start-card">

                                <div class="card-icon icon-1">
                                    <ion-icon name="car-outline"></ion-icon>
                                </div>

                                <h3 class="card-title">Choose a car</h3>

                                <p class="card-text">
                                  Choose your desired vehicle from our wide range collection of cars     <a href="#" class="card-link">Get started</a>
                             
                                </p>

                              

                            </div>
                        </li>

                        <li>
                            <div class="get-start-card">

                                <div class="card-icon icon-2">
                                    <ion-icon name="card-outline"></ion-icon>
                                </div>

                                <h3 class="card-title">Make a reservation</h3>

                                <p class="card-text">
                                   Reserve your Desired motor vehicle using your personal credentials . Fast ,secure and Convenient
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="get-start-card">

                                <div class="card-icon icon-3">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </div>

                                <h3 class="card-title">Check your email</h3>

                                <p class="card-text">
                                   After reserving a motor vehicle , you will recieve an email notification with your reservation details
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="get-start-card">

                                <div class="card-icon icon-4">
                                    <ion-icon name="happy-outline"></ion-icon>
                                </div>

                                <h3 class="card-title">Pickup the car</h3>

                                <p class="card-text">
                                    Just show us your reservation receipt , pick up the motor vehicle and enjoy driving our luxurious cars
                                </p>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





        </article>
    </main>
@endsection
@section('scripts')
@endsection
