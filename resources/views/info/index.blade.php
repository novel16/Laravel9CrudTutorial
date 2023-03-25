<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

     <style>
        *{
            
            font-weight: 300;
        }
     </style>

</head>
<body>
    
<nav class="py-1 fixed bg-secondary">
    <div class="container">
        <h1 class="text-light">Laravel Crud Tutorial</h1>
    </div>
</nav>

<div class="container mt-5 ">
    <a href="/Add" class="btn btn-success my-2">Add New</a>
    <div class="card p-3 shadow">
        
        
            <table class="table table-borderless table-striped">
                <thead class="bg-secondary text-light">
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    
                    @foreach ($infos as $information)
                        <tr>
                            <td>{{$information->id}}</td>
                            <td>{{$information->firstname}}</td>
                            <td>{{$information->lastname}}</td>
                            <td>{{$information->email}}</td>
                            <td>{{$information->age}}</td>
                            <td>{{$information->address}}</td>

                            <td>
                                <a href="/info/{{ $information->id }}" class="btn btn-success btn-sm">Edit</a>
                                <a href="#" onclick="deleteInfo({{  $information->id }})" class="btn btn-danger btn-sm">Delete</a>

                                <form id="employee-edit-action-{{ $information->id }}" action="/info/delete/{{ $information->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>

            
        
    </div>
</div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

 <script>
    function deleteInfo(id) {
        if (confirm("Are you sure you want to delete?")) {
            document.getElementById('employee-edit-action-'+id).submit();
        }
    }
</script>
</body>
</html>