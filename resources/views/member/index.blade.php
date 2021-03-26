@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                <div style="background:transparent !important" class="jumbotron">
                <div class="container">
  <div class="row align-items-center">
    <div class="col-md-8">
    <h1 class="display-4">M.A.G Members</h1>
                <h4 class="display-6"><i>(Marc, Anthony, Gabriel)</i></h4>
    </div>
    <div class="col-md-4">
    <img width="350px" height="250px" class="img-fluid" src="{{ asset('img/mag.png') }}"></img>
    </div>

  </div>
</div>
                <hr>
                </br></br></br></br>

                @foreach($users as $user)
                <h1 class="display-6"><b> {{$user->last_name}}, {{$user->first_name}} {{$user->mi}}</b></h1>
                <h4 class="display-5">{{$user->course}}</h4>
                </BR>
                <div class="row align-items-center">

                <div class="col-md-3">
                <img height="100" width="300" class="img-fluid" src="{{ asset("img/$user->image_file")}}"></img>
                </div>
                <div class="col-md-9">


                <p class="lead">&emsp;&emsp;{{$user->background}}
                </p>
                <a href="showcase#{{$user->id}}">View Showcase</a>

                </div>

                </div>
</BR></BR></BR></BR></BR>
@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

