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
                    <th class="problem"> Table Title </th>
                    <th class="problem"> Price </th>
                    <th> Description </th>
                    <th class="problem"> Type </th>
                    <th> Number personne </th>
                    <th> Image </th>
                    <th> Delete </th>
                    <th> Update </th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td> {{$data->table_titel}} </td>
                    <td> {{$data->price}} </td>
                    <td> {!! Str::limit($data->description) !!} </td>
                    <td> {{$data->type_table}}</td>
                    <td> {{$data->nombre_per}} </td>
                    <td> <img src="tablesImg\{{$data->image}}"></td>

                    <td>
                        <a  class="btn btn-danger" onclick="return confirm('Are you sure to delete this ');" href="{{url('tableDelete',$data->id)}}"> Delete</a>
                    </td>
                    <td>
                        <a  class="btn btn-warning" href="{{url('tableUpdate',$data->id)}}"> Update</a>
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
