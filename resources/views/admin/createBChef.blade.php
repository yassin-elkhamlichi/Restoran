<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Chefs Management</title>
    <link rel="stylesheet" href="tables/styles.css">
</head>
<body>
<div class="container">
    <h1>Restaurant Chefs Management</h1>
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
    <!-- Form to add a new chef -->
    <form id="tableForm" method="POST" enctype="multipart/form-data" action="{{url('create_chef')}}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <br>

        <label for="speciality">Speciality:</label>
        <select id="speciality" name="speciality" required>
            <option value="" disabled selected>Select Speciality</option>
            <option value="Saucier">Saucier</option>
            <option value="Garde Manager">Garde Manager</option>
            <option value="Patissier">Patissier</option>
        </select>
        <br>
        <br>

        <label for="experience">Experience (years):</label>
        <input type="number" id="experience" name="experience" required>
        <br>
        <br>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" required>
        <br>
        <br>

        <input type="submit" class="btn btn-danger" value="Add Chef">
        <br>
        <br>
    </form>
</div>
</body>
</html>
