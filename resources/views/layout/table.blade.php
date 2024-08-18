<div class="container-xxl pt-5 pb-3" id="b">
    <div class="container" id="b">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Resturant Tables</h5>
            <h1 class="mb-5">Our Tables</h1>
        </div>
        <div class="row g-3">
            @foreach($table as $tables)
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover"  >
                    <div class=" overflow-hidden m-4">
                        <img class="img-fluid rounded w-100 wow zoomIn" src="tablesImg/{{$tables->image}}" >
                    </div>
                    <div class="p-4">
                        <h3>{{$tables->table_titel}}</h3>
                        <p>{!! Str::limit($tables->description) !!}</p>
                        <h4>{{$tables->price}}</h4>
                    </div>
                </div>
                <a style=" border-radius: 5px; margin-left: 90px" href="{{url('tableDetalils',$tables->id)}}" class="btn btn-primary py-sm-2 px-sm-3 me-3 animated slideInLeft">Table Details</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
