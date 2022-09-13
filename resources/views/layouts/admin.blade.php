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
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

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
                <img src="{{asset('images/jeep.png')}}" alt="Changa-K" />
                <p class="logo-text"> Changa-K</p>
            </a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">

                    <li>
                        <a href="{{ url('/dashboard') }}" class="navbar-link active" data-nav-link>Dashboard</a>
                    </li>

                    <li>
                        <a href="#featured-car" class="navbar-link" data-nav-link>Reservations</a>
                    </li>

                    <li>
                        <a href="{{ url('/car-management') }}" class="navbar-link" data-nav-link>Vehicles</a>
                    </li>

                    <li>
                        <a href="#featured-car" class="navbar-link" data-nav-link>Customers</a>
                    </li>
                    <li>
                        <a href="#featured-car" class="navbar-link" data-nav-link>Users</a>
                    </li>




                   



                </ul>
            </nav>

            <div class="header-actions">

            

                <a href="#" class="btn" aria-labelledby="aria-label-txt" >
                    <ion-icon name="car-outline"></ion-icon>

                    <span id="aria-label-txt"> {{ auth()->user()->name }}</span>
                </a>

                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" class="btn user-btn" aria-label="Profile">
                    <ion-icon name="log-out-outline"></ion-icon>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>

            </div>

        </div>
    </header>


    <div class="content">

        <div class="col-md-12  error" id="successMessage" style="color:white;background-color:green">
              
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
         
         </div>

        @yield('content')


    </div>





    <!--
      - #Vehicle Reservation Form
    -->
    <form action="{{ url('/add-car') }}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div style="color: black" class="modal  fade" id="add-car" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 style="font-weight:600" class="modal-title" id="add-car">Add Vehicle
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-6">


                                <div class="input-wrapper">
                                    <label for="input-2" class="input-label">Name</label>

                                    <input type="text" name="name" id="input-2" class="modal-input-field"
                                        placeholder="add name">
                                </div>

                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Model</label>

                                    <input type="text" name="model" id="input-3" class="modal-input-field"
                                        placeholder="add model">
                                </div>
                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Capacity</label>

                                    <input type="text" name="capacity" id="input-3" class="modal-input-field"
                                        placeholder="add capacity">
                                </div>
                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Fuel Type</label>

                                  
                                    <select name="fuel" class="modal-input-field form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Choose</option>
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
                                        placeholder="add quantity">
                                </div>
                                <div class="input-wrapper">
                                    <label for="input-1" class="input-label">Transmission</label>


                                  
                                    <select name="transmission" class="modal-input-field form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Choose</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Automatic">Automatic</option>
                                      
                                      </select>

                                </div>
                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Amount</label>

                                    <input type="text" name="amount" id="input-3" class="modal-input-field"
                                        placeholder="add amount">
                                </div>
                                <div class="input-wrapper">
                                    <label for="input-3" class="input-label">Status</label>

                                    <select name="status" class="modal-input-field form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Choose</option>
                                        <option value="1">Available</option>
                                        <option value="0">Booked</option>
                                      
                                      </select>
                                </div>
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
        - custom js link
      -->
    <script src="{{ url('js/script.js') }}"></script>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
</body>

</html>
