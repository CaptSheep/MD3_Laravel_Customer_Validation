<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Detail</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Customer Phone Number</th>
        <th>Customer Address</th>
    </tr>
    </thead>
    <tbody style="text-align: center">
    @foreach($customers as  $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->address}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
