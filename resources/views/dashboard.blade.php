<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
</head>
<body>
@include('admin.header')

<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->

        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class="active"><a href="home"> <i class="icon-home"></i>Home </a></li>

        </ul>
        </ul>
    </nav>


<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h1 style="font-size: 30px ; padding :20px"> welcom {{$name}}</h1>
        </div>
        </div>
        </div>
@include('admin.footer')
</body>
</html>
