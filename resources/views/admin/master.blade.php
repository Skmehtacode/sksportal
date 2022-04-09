<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Pannel</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="" class="navbar-brand">Admin-Panel</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="btn btn-danger">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2">
                <div class="list-group">
                    <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="{{route('admin.manage.student.active')}}" class="list-group-item list-group-item-action">ManageStudent</a>
                    <a href="{{route('admin.manage.student.new')}}" class="list-group-item list-group-item-action">NewAdmission</a>
                    <a href="" class="list-group-item list-group-item-action">Manage Payment</a>
                    <a href="" class="list-group-item list-group-item-action">Manage Courses</a>
                    <a href="" class="list-group-item list-group-item-action">Manage Placement</a>
                </div>
            </div>
            <div class="col-10">
                @section('content')
                    
                @show

            </div>
        </div>
    </div>
</body>
</html>