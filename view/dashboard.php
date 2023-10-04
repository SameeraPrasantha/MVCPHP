
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 style="padding-left: 120px">Simple MVC Project</h1>
<div class="container">
<form onsubmit="insertData(event)" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputEmail4">ID</label>
        <input type="text" class="form-control" name="nid">
        </div>
    <div class="form-group col-md-2">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-2 ">
        <label for="inputEmail4">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="male">
            <label for="" class="form-check-label">Male</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female">
            <label for="" class="form-check-label">Female</label>
        </div>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-2">
        <label for="inputEmail4">Blood Group</label>
        <select class="form-control" name="group1" id="">
            <option value="A+">A+</option>
            <option value="B">B</option>
        </select>
    </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <input type="date" class="form-control" name="bdate">
        </div>
    </div>

    <input type="button" value="Save"class="btn btn-primary" onclick="insertData(event)">
    <!-- <a href="/HRMS/view/404"><input type="button" value="404"></a> -->
</form>
</div>
<script src="http://localhost/MVCPHP/min/js/handle.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

