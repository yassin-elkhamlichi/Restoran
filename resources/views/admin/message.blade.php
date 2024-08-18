<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style>
        .table-deg{
            border: 2px solid #DB6574;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 80px;


        }
        th{
            background-color:#1a202c ;
            padding:10px;
            border: 3px solid #DB6574
        }
        tr{
            border: 3px solid #DB6574;
        }
        td{
            padding: 10px;
            border: 3px solid #DB6574;
            max-width: 80ch;
            word-break: break-word;
        }
        img{
            width:80px;
        }
        .problem {
            width:500px;
        }

    </style>
</head>
<body>
@include('admin.header')

@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <table class="table-deg">
                <tr>
                    <th> Name </th>
                    <th > Email </th>
                    <th> Phone </th>
                    <th > Message </th>
                    <th> Send Email </th>

                </tr>
                @foreach($data as $data)
                    <tr>
                        <td> {{$data->name}} </td>
                        <td>{{$data->email}}  </td>
                        <td> {{$data->phone}}</td>
                        <td>{{$data->message}} </td>

                        <td>
                            <a  class="btn btn-danger"  href="{{url('send_email',$data->id)}}"> Send Email</a>
                        </td>

                    </tr>
                @endforeach
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>


        </div>
    </div>
</div>
@include('admin.footer')

</body>
</html>
