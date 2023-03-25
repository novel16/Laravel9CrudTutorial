<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    
<nav class="py-1 fixed bg-secondary">
    <div class="container">
        <h1 class="text-light">Laravel Crud Tutorial</h1>
    </div>
</nav>

<div class="container mt-5 ">
    <div class="card p-3 shadow w-75 m-auto">
        
        <form action="/info/{{$info->id}}" method="post" class="p-2">
            
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Firstname</label>
                <input type="text" name = "firstname" value="{{ $info->firstname }}" class="form-control">
               
            </div>
            @error('firstname')
                <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="">Lastname</label>
                <input type="text" name = "lastname" value="{{ $info->lastname }}" class="form-control">
            </div>
            @error('lastname')
                <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name = "email" value="{{ $info->email }}" class="form-control">
                
            </div>
            @error('email')
                <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="">Age</label>
                <input type="number" name = "age" value="{{ $info->age }}" class="form-control">
            </div>
            @error('age')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name = "address" value="{{ $info->address }}" class="form-control">
            </div>
            @error('address')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-success btn-block mt-2">Update</button>
            <a href="/info" class="btn btn-danger mt-2">Cancel</a>
        </form>
        
    </div>
</div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>