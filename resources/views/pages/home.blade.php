@extends('layouts.guest')
@section('content')
    <main>
        <article>



            <section class="section hero" id="home">
                <div class="container">

                    <div class="hero-content">
                        <h2 class="h1 hero-title"> <span style="color:#FE673C">Looking </span>for a car to rent ?</h2>

                        <p class="hero-text">
                            We got you covered with luxurious & affordable cars!
                        </p>
                    </div>

                    <div class="hero-banner"></div>

                    <form method="POST" action="{{ route('register') }}" class="hero-form">
                        @csrf



                        <div class="input-wrapper">
                            <label for="input-2" class="input-label">Fullname</label>

                            <input type="text" name="name" id="input-2" class="input-field"
                                placeholder="Add fullname">
                        </div>

                        <div class="input-wrapper">
                            <label for="input-3" class="input-label">Email</label>

                            <input type="email" name="email" id="input-3" class="input-field" placeholder="Add email">
                        </div>
                        <div class="input-wrapper">
                            <label for="input-3" class="input-label">Phone</label>

                            <input type="phone" name="phone" id="input-3" class="input-field"
                                placeholder="Add phone number">
                        </div>

                        <div class="input-wrapper">
                            <label for="input-3" class="input-label">Password</label>

                            <input type="password" name="password" id="input-3" class="input-field"
                                placeholder="Add pickup date">
                        </div>

                        <button type="submit" class="btn">Register</button>
                        <div style="margin-top: 20px ;padding-left:20px">
                            Alrady Have an account ?
                            <a href="{{ url('login') }}">Login</a>
                        </div>


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

                        <a href="{{ url('/cars') }}" class="featured-car-link">
                            <span>View more</span>

                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>

                    <ul class="featured-car-list">
                        @foreach ($cars as $car)
                            <li>
                                <div class="featured-car-card">

                                    <figure class="card-banner">
                                        <img src="{{ asset('images/vehicles/' . $car->img) }}" alt="Toyota RAV4 2021"
                                            loading="lazy" width="440" height="300" class="w-100">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-title-wrapper">
                                            <h3 class="h3 card-title">
                                                <a href="#">{{ $car->name }}</a>
                                            </h3>

                                            <data class="year" value="2021">{{ $car->model }}</data>
                                        </div>

                                        <ul class="card-list">

                                            <li class="card-list-item">
                                                <ion-icon name="people-outline"></ion-icon>

                                                <span class="card-item-text"> {{ $car->capacity }} People</span>
                                            </li>

                                            <li class="card-list-item">
                                                <ion-icon name="flash-outline"></ion-icon>

                                                <span class="card-item-text">{{ $car->fuel }}</span>
                                            </li>

                                            <li class="card-list-item">
                                                <ion-icon name="car-outline"></ion-icon>
                                                @if ($car->quantity == 1)
                                                    <span class="card-item-text">{{ $car->quantity }} Vehicle</span>
                                                @else
                                                    <span class="card-item-text">{{ $car->quantity }} Vehicles</span>
                                                @endif
                                            </li>

                                            <li class="card-list-item">
                                                <ion-icon name="hardware-chip-outline"></ion-icon>

                                                <span class="card-item-text">{{ $car->transmission }}</span>
                                            </li>

                                        </ul>

                                        <div class="card-price-wrapper">

                                            <p class="card-price">
                                                <strong>MK {{ $car->amount }}</strong> / Hour
                                            </p>



                                            <button data-toggle="modal" data-target="#reservation" class="btn">Rent
                                                now</button>

                                        </div>

                                    </div>

                                </div>
                            </li>
                        @endforeach
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
                                    Choose your desired vehicle from our wide range collection of cars <a href="#"
                                        class="card-link">Get started</a>

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
                                    Reserve your Desired motor vehicle using your personal credentials . Fast ,secure and
                                    Convenient
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
                                    After reserving a motor vehicle , you will recieve an email notification with your
                                    reservation details
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
                                    Just show us your reservation receipt , pick up the motor vehicle and enjoy driving our
                                    luxurious cars
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
