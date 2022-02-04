@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Friends</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pannel">
                    <div class="pannel-header">
                       <div style="font-weight: bold">Friend Requests</div>
                    </div>
                    <div class="pannel-body">
<table class="table">
<thead>
<tr>
    <th>#</th>
    <th>Name</th>

    <th>Actions</th>
</tr>
</thead>
<tbody>
<?php  $i=0?>
@foreach ($friends as $item)
<tr>
    <td>{{++$i}}</td>
    <td>{{$item->user2->name}}</td>

    <td>

        <a type="button" class="btn btn-success" >Accept</a>
        <a type="button" class="btn btn-danger" style="margin-left: 5px">Reject</a>
        <a type="button" class="btn btn-info" href="{{route('people.profile',['name'=>$item->user2->name])}}"  style="margin-left: 5px">Show</a>

    </td>
</tr>
@endforeach

</tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection

