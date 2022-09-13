@extends('layouts.admin')
@section('content')
    <br>
    <br>
    <br>
    <main>
        <article>






            <!--
                    - #DASHBOARD
                  -->


            <section class="section get-start">
                <div class="container">
                    <div class="get-start-card">
                        <div class="card-head">
                            <h5 class="pb-2">Manage Cars</h5>

                            <a data-toggle="modal" data-target="#add-car" class="add-button" href="">Add</a>

                        </div>


                        <table class="table">
                            <thead class="thead-light">
                                <tr>

                                    <th scope="col">Name</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Capacity</th>
                                    <th scope="col">Fuel-Type</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Transmission</th>
                                    <th scope="col">Charge/Hr</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    <tr>

                                        <td>{{ $car->name }}</td>
                                        <td>{{ $car->model }}</td>
                                        <td>{{ $car->capacity }}</td>
                                        <td>{{ $car->fuel }}</td>
                                        <td>{{ $car->quantity }}</td>
                                        <td>{{ $car->transmission }}</td>
                                        <td>{{ $car->amount }}</td>
                                        @if ($car->status == 1)
                                            <td>Available</td>
                                        @else
                                            <td>Booked</td>
                                        @endif

                                        <td>

                                            <div class="dropdown">
                                                <i class="fa fa-list " type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                </i>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="{{url('edit-car/'.$car->id)}}">Edit</a>
                                                    <a class="dropdown-item"  href="{{url('delete-car/'.$car->id)}}">Delete</a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>









        </article>
    </main>
@endsection
@section('scripts')
@endsection
