@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>people-profile</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                     {{$name}} profile
                        </div>
                        <div class="card-body">

                            <a type="button" class="btn btn-success" href="{{route('requests')}}">Add</a>
                            <a type="button" class="btn btn-warning" style="margin-left: 5px">Delete</a>
                            <a type="button" class="btn btn-danger" style="margin-left: 5px">Block</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection
