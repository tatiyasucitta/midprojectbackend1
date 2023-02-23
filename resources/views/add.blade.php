<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/form.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h1>Add Employee</h1>
    </div>
    <div class="body">
        <div class="form">
            <h2>Employee's Data</h2>
            <div class="identitas">
                <form action="/" method="POST">
                    @csrf
                    <div class="mules">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="">
                  
                    
                        <label for="age">Age</label>
                        <input type="number" name="age" id="">
                   
                  
                        <label for="address">Address</label>
                        <input type="text" name="address" id="">
                  
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" id="">
                    </div>
                    <input class= "button" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>