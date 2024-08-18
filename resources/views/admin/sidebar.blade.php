<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->

        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li ><a href="home"> <i class="icon-home"></i>Home </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Restaurant Table</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_table')}}">create Table</a></li>
                    <li><a href="{{url('view_table')}}">View Table</a></li>
                </ul>
            </li>
        </ul>
        <ul class="list-unstyled">
            <li ><a href="{{url('bookings')}}"> <i class="icon-contract"></i>Booking </a></li>
        </ul>
        <ul class="list-unstyled">
            <li ><a href="{{url('all_messages')}}"> <i class="icon-contract"></i>Messages </a></li>
        </ul>
        <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse" style="" > <i class="icon-chart"></i>Chefs</a>
                <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                    <li><a href="{{url('add_chef')}}">add Chef</a></li>
                    <li><a href="{{url('all_chefs')}}">View CHef</a></li>
                </ul>
        </li>
    </nav>
