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
    <h1 class="display-4">Project Showcase</h1>
                <h4 class="display-6">Summative Activities</h4>
    </div>
    <div class="col-md-4">
    <img width="350px" height="250px" class="img-fluid" src="{{ asset('img/skylinepigeonfly.gif') }}"></img>
    </div>

  </div>
</div>
                <hr>
                </br></br></br></br>
@foreach($users as $user)
<section id="{{ $user->id }}"></section>
<h1 class="display-6"><b>{{$user->first_name}} {{$user->last_name}}</b></h1>
</BR></BR>
@foreach($user->showcases as $showcase)

<div class="row">
<div class="col-md-8 embed-responsive embed-responsive-16by9">

<video width="640" height="480" autoplay muted controls loop>
  <source src="{{asset("video/$showcase->file_name")}}"  type="video/mp4">
</video>
    </div>
    <div class="col-md-4">
    <h1 class="display-8"><b>{{$showcase->activity_name}}</b></h1>
    <h4 class="display-5">{{$showcase->activity_title}}</h4>
    </BR>
    <p class="lead">{{$showcase->activity_description}}
    </p>
    </div>
  </div>
  </BR></BR></BR></BR></BR></BR></BR></BR></BR></BR>
@endforeach

@endforeach





                </div>
            </div>
        </div>
    </div>
</div>
@endsection

