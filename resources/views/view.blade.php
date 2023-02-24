<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/view.css')}}">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <div class="header">
        <div class="title">
            <h1>View Employee</h1>
        </div>     
    </div>
    <div class="shortcut">
        <a href="{{ route('welcome')}}">Home</a>
        <a href="{{ route('add')}}">Add Employee</a>
        <a href="{{ route('up')}}">Update Employee's Data</a>
        <a href="">Delete</a>
    </div>   

<div class="body">
    <div class="employee-table">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone Number</th>
                    </tr>
                </thead>
    
            <tbody>
                @php $num = 1; @endphp
                @foreach($employees as $employee)
                <tr class="table-light">
                    <th scope="row">{{$num}}</th>
                    <td class="employee-name">{{ $employee ->name}}</td>
                    <td class="employee-age">{{ $employee ->age}}</td>
                    <td class="employee-address">{{ $employee ->address}}</td>
                    <td class="employee-phone">{{ $employee ->phone}}</td>
                </tr>  
                @php $num++ @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    </div>


</body>
</html>