@extends('layouts.guest')
@section('content')

<br>
<br>
<br>
    <main>
        <article>

       




            <!--
            - #FEATURED CAR
          -->

            <section class="section featured-car" id="featured-car">
                <div class="container">

                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Featured Cars</h2>

                      
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










        </article>
    </main>
@endsection
@section('scripts')
@endsection
