<!DOCTYPE html>
<html lang="en">

<head>
    <base href="\public">
    @include('css.css')
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    @include('layout.spinner')
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    @include('Tables.hero')
    <!-- Navbar & Hero End -->



    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s" >
        <div class="row g-0" >
            <div class="col-md-6" >
                <div class="container-xxl pt-5 pb-3">
                    <div class="container" style="margin-top: -63px">
                        <div class="row g-3 " >
                            <div class="col-md-12 col-sm-12">
                                <div id="serv_hover"   >
                                    <div  class=" overflow-hidden m-11">
                                        <img   class="img-fluid rounded w-100 wow zoomIn" src="tablesImg\{{$table->image}}" >
                                    </div>
                                    <div class="p-4 " style="text-align: center">
                                        <h3>{{$table->table_titel}}</h3>
                                        <br>
                                        <h5>description : {{$table->description}}</h5>
                                        <br>
                                        <h5>Type Table : {{$table->type_table}}</h5>
                                        <br>
                                        <h5> prix : {{$table->price}}</h5>
                                        <br>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center ">
                <div class="p-5 wow fadeInUp "  data-wow-delay="0.2s" >
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                    <h1 class="text-white mb-4">Book A Table Online</h1>
                    <div class>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                        {{session()->get('message')}}
                            <button type="button" class="close btn-primary " style=" background-color: #d1e7dd ; color:#FEA116; top: 0; right:-10px; border-color:#d1e7dd ; border: none  " data-bs-dismiss="alert" >X</button>
                        </div>
                    @endif
                    </div>
                    @if($errors)
                        @foreach($errors->all as $errors)
                            <li>
                                {{$errors}}
                            </li>
                         @endforeach
                    @endif
                    <form action="{{url('add_booking',$table->id)}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name"  name="name"
                                           @if(Auth::id())
                                        value="{{Auth::user()->name}}"
                                           @else
                                               placeholder="Your Name"
                                           @endif

                                           required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"   name="email"     @if(Auth::id())
                                        value="{{Auth::user()->email}}"
                                           @else
                                               placeholder="Your Email"
                                           @endif
                                           required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" style="margin-top: -20px "data-target-input="nearest" >
                                    <label for="datetime" style="color: #c69500 ; font-size: 18px ; ">Date & Time :</label>
                                    <br><br>
                                    <input  type="datetime-local"  id="date" name="datetime" id="datetime"  required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" name="NP" id="select1" required>
                                        <option value="1">People 1</option>
                                        <option value="2">People 2</option>
                                        <option value="3">People 3</option>
                                        <option value="4">People 4</option>
                                    </select>
                                    <label for="select1">No Of People</label>
                                </div>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    @include('layout.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
@include('js.js')
<script type="text/javascript">
    $(function()
    {
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString()
        var maxDate = year + '-' + month + '-' + day;
        $('#date').attr('min', maxDate);
    });

</script>
</body>

</html>
