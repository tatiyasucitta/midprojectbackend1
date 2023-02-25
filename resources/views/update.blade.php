<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/update.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="shortcut">
            <a href="/">View Employee</a>
            <a href="{{ route('add') }}">Add Employee</a>
        </div>
        <div class="title">
            <h1>Update Employee's Data</h1>
        </div>
    </div>
    <div class="body">
        <div class="form">
            <h2>Edit Data</h2>
            <div class="identitas">
            <form action="{{ url('updated.employee/'. $employee->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mules">
                        <label for="nama">Name</label>
                        <input type="text" name="nama" id="" value="{{ $employee ->name }}">
                  
                    
                        <label for="umur">Age</label>
                        <input type="number" name="umur" id="" value="{{ $employee ->age }}">
                   
                  
                        <label for="alamat">Address</label>
                        <input type="text" name="alamat" id="" value="{{ $employee ->address }}">
                  
                        <label for="tlp">Phone Number</label>
                        <input type="tel" name="tlp" id="" value="{{ $employee ->phone }}">
                    </div>
                    <input class= "button" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>