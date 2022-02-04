@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Hello {{ Auth::user()->name }}  </div>

                <div class="card-body">
                    This is your profile
                    <br> <br>

                   <a href="{{route('profiles')}}" class="btn btn-outline-primary" >All Profiles</a>
                   <a href="{{route('requests.show')}}" class="btn btn-outline-primary" style="margin-left: 10px" > Friend Requests</a>
                   <a href="{{route('friends.show')}}" class="btn btn-outline-primary" style="margin-left: 10px" > My Friends</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
