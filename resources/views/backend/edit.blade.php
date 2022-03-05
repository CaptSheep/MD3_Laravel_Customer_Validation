<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update Customer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
    <form action="{{route('update',$customers->id)}}" method="post">
        @csrf
        <div class="error-message">
            @if ($errors->any())
                @foreach($errors->all() as $nameError)
                    <p style="color:red">{{ $nameError }}</p>
                @endforeach
            @endif
        </div>
        <div class="form-group has-success has-feedback">
            <label class="control-label" for="name">Customer Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="usernameStatus" name="name" value="{{$customers->name}}">
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="control-label" >Customer Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$customers->title }}">
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="control-label" >Customer Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{$customers->phone}}">
        </div> <div class="form-group has-warning has-feedback">
            <label class="control-label" >Customer Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$customers->address}}">
        </div>
        <div>
            <input type="submit" value="Update Customer">
        </div>
    </form>

</div>

<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
