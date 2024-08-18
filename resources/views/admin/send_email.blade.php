<!DOCTYPE html>
<html>
<base>
    <base href="/public">
    @include('admin.css')
<style>
    .c{
        width: 40%;
    }
    label{
       margin-right: 30%;
        padding-bottom: 10px;
        padding-top: 10px;

    }
</style>
</head>
<body>
@include('admin.header')

@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h1 STYLE="font-size: 30px; font-weight: bolder">mail send to {{$data->name}}</h1>
            <form action="{{url('mail',$data->id)}}" method="POST" style="text-align: center ; margin: auto ;padding-top: 3%">
                @csrf
               <label  >Greetting :</label>
               <input type="text" class="c"    name="greetting">
                <br>
                <label >Mail Body :</label>
                <input type="text"  class="c"   name="mail_body" required>
                <label >Action Text :</label>
                <input type="text"  class="c"   name="action_text" >
                <label >Action Url :</label>
                <input type="text"  class="c"   name="action_url" >
                <label >End Line :</label>
                <input type="text"  class="c" name="end_line" required>
                <br>
                <br>
                    <div class="col-12">
                        <button class="btn btn-primary " type="submit">Send Email</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('admin.footer')
</body>
</html>
