<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style>
        .table-deg{
            border: 2px solid #DB6574;
            text-align: center;
            margin-top: 80px;
            width: 100%;


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
        td img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }
        .problem {
            width:500px;
        }

    </style>
<body>
@include('admin.header')

@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <table class="table-deg ">
                <tr>
                    <th> Table_id</th>
                    <th> Custumer Name </th>
                    <th class="problem"> Email </th>
                    <th> Date</th>
                    <th> Geuts </th>
                    <th> Table Title </th>
                    <th class="problem"> Price </th>
                    <th> Image </th>
                    <th> status </th>
                    <th> Delete </th>
                    <th> Update </th>
                </tr>
                @foreach($data as $data)
                    <tr>
                        <td>{{$data->table_id}}  </td>
                        <td>{{$data->name}}  </td>
                        <td class="problem">{{$data->email}}  </td>
                        <td class="problem">{{$data->date}}  </td>
                        <td>{{$data->guests}}  </td>
                        <td class="problem"> {{$data->table->table_titel}} </td>
                        <td class="problem"> {{$data->table->price}} </td>
                        <td> <img src="tablesImg\{{$data->table->image}}"></td>
                        <td  class="problem">
                            @if($data->status=='Approve')
                            <span style="color:green">Approved </span>
                                @elseif($data->status=='Rejected')
                                    <span style="color:darkred">Rejected</span>
                                @else
                                    <span >{{$data->status}}</span>
                            @endif
                        </td>
                        <td>
                            <a  class="btn btn-danger" onclick="return confirm('Are you sure to delete this ');" href="{{url('BookingDelete',$data->id)}}"> Delete</a>
                        </td>
                        <td>
                            <span style=" padding-bottom: 10px">
                            <a  class="btn btn-success"    href="{{url('approve_book',$data->id)}}"> Approve</a>
                            </span>
                            <a  class="btn btn-warning" href="{{url('rejected_book',$data->id)}}"> Rejected</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@include('admin.footer')
</body>
</html>
