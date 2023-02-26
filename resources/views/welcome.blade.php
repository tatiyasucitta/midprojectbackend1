<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/view.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @php $employee = $employees; @endphp
    <div class="content">
        <div class="header">
            <div class="shortcut">
                <a href="{{ route('add') }}">Add Employee</a>
                
            </div>
            <div class="title">
                <h1>Employee</h1>
            </div>
        </div>

        <div class="body">
            <br>
        @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success')}}</p>
        @endif
        
            <div class="employee-table">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $num = 1; @endphp
                        @foreach ($employees as $employee)
                            <tr class="table-light">
                                <th scope="row">{{ $num }}</th>
                                <td class="employee-name">{{ $employee->name }}</td>
                                <td class="employee-age">{{ $employee->age }}</td>
                                <td class="employee-address">{{ $employee->address }}</td>
                                <td class="employee-phone">{{ $employee->phone }}</td>
                                <td class="update"><a href="{{ url('update/'. $employee->id) }}" class = "upbutton">Update</a></td>
                                <td class="delete">
                                    <form action="{{  url('delete/'. $employee->id)  }}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                           Delete
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Are you sure to delete this record?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                                                <button class="btn btn-primary" type="submit">No</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>                           
                                    {{-- <button class="delete_btn" type="submit">Delete</button>   --}}
                                    </form>
                                </td>
                            </tr>
                            @php $num++ @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
