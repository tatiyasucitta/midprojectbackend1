<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backendmidproj</title>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h1>Employees Data</h1>
    </div>

    <div class="body">
        <div class="option">
        <h2>Select Menu:</h2>
        <ul class="afaantuh">
            <li><h3><a href="">View Employees</a></h3></li>
            <li><h3><a href="{{ route('add')}}">Add Employee</a></h3></li>
            <li><h3><a href="{{ route('up')}}">Update Employee's Data</a></h3></li>
            <li><h3><a href="">Delete</a></h3></li>
        </ul>
       </div>
        
    </div>
</body>
</html>