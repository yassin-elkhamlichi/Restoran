<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tables/styles.css">
</head>
<body>
<div class="container">
    <h1>Restaurant Tables Management </h1>
    <br>
    <br>
    <div class>
        @if(session()->has('message'))
            <div class="alert alert-success " style="paddin:30px; width: 40%">
                {{session()->get('message')}}
                <button type="button" class="close btn-primary " style=" background-color: #d1e7dd ; color:#FEA116; top: 0; right:-10px; border-color:#d1e7dd ; border: none  " data-bs-dismiss="alert" >X</button>
            </div>
        @endif
    </div>
    <br>
    <!-- Form to add a new table -->
    <form id="tableForm" method="POST" enctype="multipart/form-data" action="{{url('add_table')}}">
        @csrf
        <label for="tableTitle">Table Title:</label>
        <input type="text" id="tableTitle" name="tableTitle" required>
        <br>
        <br>

        <label for="image">Image :   </label>
        <input type="file" id="image" name="image" required>
        <br>
        <br>
        <label for="price">Price:    </label>
        <input type="text" id="price" name="price" required>
        <br>
        <br>
        <label for="typeTable">Table Type:</label>
        <select name="Type">
            <option  selected value="reguler">A</option>
            <option value="premium">B</option>
            <option value="deluxe">C</option>
        </select>
        <br>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <br>
        <br>
        <label for="nombrePer">Number of Persons :</label>
        <input type="number" id="nombrePer" name="nombrePer" required>
        <br>
        <br>
        <input type="submit"  class="btn btn-danger" value="Add Table ">
        <br>
        <br>
    </form>


</div>


</body>
</html>
