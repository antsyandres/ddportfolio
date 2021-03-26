@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-start">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">

               <div class="card-body"> 
               <div class="container">
                <div style="background:transparent !important" class="jumbotron">
                <h1 class="display-4">M.A.G Members</h1>
                </div>

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

