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
             
            <div class="get-start-card  pb-5 px-5">
              <div class="card-head">
                <h5 class="pb-4 pt-4">Dashboard</h5>

                

            </div>
               <div class="row">

             
                 <div class="col-md-3"><a href=""> <a href="">
                        <div class="card bg-light mb-3" >
                   
                            <div class="card-body">
                              <h5 class="card-title text-center"> Reservations</h5>
                             
                            </div>
                            
                          </div></a>
                    </div>
                 <div class="col-md-3"><a href="{{url('/car-management')}}"> 
                        <div class="card bg-light mb-3" >
                   
                            <div class="card-body">
                              <h5 class="card-title text-center"> Vehicles</h5>
                             
                            </div>
                            
                          </div></a>
                    </div>
                 <div class="col-md-3"><a href=""> 
                        <div class="card bg-light mb-3" >
                   
                            <div class="card-body">
                              <h5 class="card-title text-center"> Customers</h5>
                             
                            </div>
                            
                          </div></a>
                    </div>
                 <div class="col-md-3"><a href=""> 
                        <div class="card bg-light mb-3" >
                   
                            <div class="card-body">
                              <h5 class="card-title text-center"> Users</h5>
                             
                            </div>
                            
                          </div></a>
                    </div>
                 <div class="col-md-3"><a href="" data-toggle="modal" data-target="#editAbout"  > 
                        <div class="card bg-light mb-3" >
                   
                            <div class="card-body">
                              <h5 class="card-title text-center"> About Us</h5>
                             
                            </div>
                            
                          </div></a>
                    </div>
                       
                 <div class="col-md-3"><a href=""> 
                        <div class="card bg-light mb-3" >
                   
                            <div class="card-body">
                              <h5 class="card-title text-center"> Contacts</h5>
                             
                            </div>
                            
                          </div></a>
                    </div>
                 <div class="col-md-3"><a href=""  data-toggle="modal" data-target="#editTerms"> 
                        <div class="card bg-light mb-3" >
                   
                            <div class="card-body">
                              <h5 class="card-title text-center"> Terms & Conditions</h5>
                             
                            </div>
                            
                          </div></a>
                    </div>
                 <div class="col-md-3"><a href="" data-toggle="modal" data-target="#editPolicy"> 
                        <div class="card bg-light mb-3"  >
                   
                            <div class="card-body">
                              <h5 class="card-title text-center"> Privacy Policy</h5>
                             
                            </div>
                            
                          </div></a>
                    </div>
                 
                </div>

            </div>
            </div>
        </section>









        </article>
    </main>
    <!--
      - #about Form
    -->
    <form action="{{ url('/update-about/1') }}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <div style="color: black" class="modal  fade" id="editAbout" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 style="font-weight:600" class="modal-title" id="editAbout">Add Vehicle
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                 

                                
                          <div class="form-group">
                              <label> Description :</label>
                              @foreach($aboutInfo as $info )
                              <textarea class="ckeditor editMessageDescription" name="description" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;
                    border: 1px solid #dddddd; padding: 10px;"
                            >{{$info->description}}"</textarea>
                              @endforeach
                           
                          </div>

                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>


                        </div>
                    </div>
                </div>
            </div>
    </form>

    <!--
      - #Terms
    -->
    <form action="{{ url('/update-terms/1') }}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <div style="color: black" class="modal  fade" id="editTerms" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 style="font-weight:600" class="modal-title" id="editTerms">Add Vehicle
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                 

                                
                          <div class="form-group">
                              <label> Description :</label>
                              @foreach($termsInfo as $info )
                              <textarea class="ckeditor editMessageDescription" name="description" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;
                    border: 1px solid #dddddd; padding: 10px;"
                            >{{$info->description}}"</textarea>
                              @endforeach
                           
                          </div>

                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>


                        </div>
                    </div>
                </div>
            </div>
    </form>

    <!--
      - #Policy
    -->
    <form action="{{ url('/update-policy/1') }}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <div style="color: black" class="modal  fade" id="editPolicy" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 style="font-weight:600" class="modal-title" id="editPolicy">Add Vehicle
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                 

                                
                          <div class="form-group">
                              <label> Description :</label>
                              @foreach($policyInfo as $info )
                              <textarea class="ckeditor editMessageDescription" name="description" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;
                    border: 1px solid #dddddd; padding: 10px;"
                            >{{$info->description}}"</textarea>
                              @endforeach
                           
                          </div>

                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>


                        </div>
                    </div>
                </div>
            </div>
    </form>

@endsection
@section('scripts')
@endsection
