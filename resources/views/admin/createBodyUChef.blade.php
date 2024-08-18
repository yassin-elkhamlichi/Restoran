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
    <h1>Update Chef</h1>
    <br>
    <!-- Form to update an existing chef -->
    <form id="chefForm" method="POST" enctype="multipart/form-data" action="{{url('editchef',$data->id)}}">
        @csrf
        <label for="name">Chef Name:</label>
        <input type="text" id="name" name="name" value="{{$data->name}}" required>
        <br>
        <br>
        <label for="image">Current Image:</label>
        <img width="100px" src="/chefsImg/{{$data->image}}">
        <br>
        <br>
        <label for="image">Update Image:</label>
        <input type="file" id="image" name="image">
        <br>
        <br>
        <label for="speciality">Speciality:</label>
        <select name="speciality" id="speciality" required>
            <option selected value="{{$data->speciality}}">{{$data->speciality}}</option>
                <option value="Saucier">Saucier</option>
                <option value="Garde Manager">Garde Manager</option>
                <option value="Patissier">Patissier</option>
        </select>
        <br>
        <br>
        <label for="experience">Experience (years):</label>
        <input type="number" id="experience" name="experience" value="{{$data->experience}}" required>
        <br>
        <br>
        <input type="submit" class="btn btn-danger" value="Update Chef">
        <br>
        <br>
    </form>
</div>
</body>
</html>
