<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="tables/styles.css">
</head>
<body>
<div class="container">
    <h1>Update Tables  </h1>
    <br>
    <!-- Form to add a new table -->
    <form id="tableForm" method="POST" enctype="multipart/form-data" action="{{url('editTable',$data->id) }}"  >
        @csrf
        <label for="tableTitle">Table Title:</label>
        <input type="text" id="tableTitle" name="tableTitle"  value="{{$data->table_titel}}" required>
        <br>
        <br>
        <label for="image">Currant Image :   </label>
        <img  width="100px" src="/tablesImg/{{$data->image}}">

        <label for="image"> update Image :   </label>
        <input type="file" id="image" name="image"  >
        <br>
        <br>
        <label for="price">Price:    </label>
        <input type="text" id="price" name="price" value="{{$data->price}}" required>
        <br>
        <br>
        <label for="typeTable">Table Type:</label>
        <select name="Type" >
            <option  selected value="{{$data->table_titel}}" selected >{{$data->table_titel}}</option>
            <option  selected value="reguler">A</option>
            <option value="premium">B</option>
            <option value="deluxe">C</option>
        </select>
        <br>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" >
            {{$data->description}}
        </textarea>
        <br>
        <br>
        <label for="nombrePer">Number of Persons:</label>
        <input type="number" id="nombrePer" name="nombrePer" value="{{$data->nombre_per}}" required>
        <br>
        <br>
        <input type="submit" class="btn btn-danger" value="Update Table ">
        <br>
        <br>
    </form>

    <!-- Section to display existing tables -->
    <div id="tableList">
        <!-- Tables will be dynamically added here -->
    </div>
</div>


</body>
</html>
