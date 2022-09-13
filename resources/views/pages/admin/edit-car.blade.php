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

                  <form action="{{ url('/update-car/'.$cars->id) }}" method="POST" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
            <section class="section get-start">
                <div class="container">
                    <div class="get-start-card">
                        <div class="card-head">
                            <h5 class="pb-2">Edit car-details</h5>
                            <div class="text-center">
                             
                               
                            </div>
                           
                        </div>

                        <div class="row">

                            <div class="col-md-6">


                                <div class="input-wrapper">
                                    <label for="input-2" class="input-label">Name</label>

                                    <input type="text" name="name" id="input-2" class="modal-input-field"
                                        placeholder="add name" value="{{ $cars->name }}">
                                </div>

                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Model</label>

                                    <input type="text" name="model" id="input-3" class="modal-input-field"
                                        placeholder="add model" value="{{ $cars->model }}">
                                </div>
                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Capacity</label>

                                    <input type="text" name="capacity" id="input-3" class="modal-input-field"
                                        placeholder="add capacity" value="{{ $cars->capacity }}">
                                </div>
                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Fuel Type</label>

                                  
                                    <select name="fuel" class="modal-input-field form-select-sm" aria-label=".form-select-sm example">
                                      
                                     
                                        <option value="{{ $cars->fuel }}">{{ $cars->fuel }}</option>
                                        <option value="Petrol">Petrol</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Hybrid">Hybrid</option>
                                        
                                      
                                      </select>
                                </div>
                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Image</label>

                                    <input type="file" name="file" id="input-3" class="modal-input-field">
                                </div>
                                
                            </div>



                            <div class="col-md-6">

                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Quantity</label>

                                    <input type="text" name="quantity" id="input-3" class="modal-input-field"
                                        placeholder="add quantity" value="{{ $cars->quantity }}">
                                </div>
                                <div class="input-wrapper">
                                    <label for="input-1" class="input-label">Transmission</label>


                                  
                                    <select name="transmission" class="modal-input-field form-select-sm" aria-label=".form-select-sm example">
                                        <option value="{{ $cars->transmission }}">{{ $cars->transmission }}</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Automatic">Automatic</option>
                                      
                                      </select>

                                </div>
                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Amount</label>

                                    <input type="text" name="amount" id="input-3" class="modal-input-field"
                                        placeholder="add amount" value="{{ $cars->amount }}">
                                </div>
                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Status</label>

                                    <select name="status" class="modal-input-field form-select-sm" aria-label=".form-select-sm example">
                                        <option value="{{ $cars->status }}" selected>{{ $cars->status }}</option>
                                        <option value="1">Available</option>
                                        <option value="0">Booked</option>
                                      
                                      </select>
                                </div>
                            </div>





                        </div>
                            </div>
                            <div >
                                <button type="submit" class="add-button mt-3 text-center">Save</button>
                            </div>
                           
                </div>
              
                
            </section>

                  </form>







        </article>
    </main>
@endsection
@section('scripts')
@endsection
