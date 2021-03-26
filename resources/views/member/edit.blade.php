@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                <div style="background:transparent !important" class="jumbotron">
                <h1 class="display-6"><b>Edit Profile</b></h1>
</BR>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                <form action="{{ route('member.update')}}" method="POST" enctype="multipart/form-data">
                  @csrf
</BR>
                  <input type="hidden" name="users_id" value = "{{$user_id}}">


                  <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>

                            <div class="col-md-7">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" required autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="first_name" class="col-md-3 col-form-label text-md-right">First Name</label>

                            <div class="col-md-7">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $users->first_name}}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="last_name" class="col-md-3 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-7">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $users->last_name }}" required autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="mi" class="col-md-3 col-form-label text-md-right">Initials</label>

                            <div class="col-md-7">
                                <input id="mi" type="text" class="form-control @error('mi') is-invalid @enderror" name="mi" value="{{ $users->mi }}"  autofocus>

                                @error('mi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="course" class="col-md-3 col-form-label text-md-right">Course</label>

                            <div class="col-md-7">
                                <input id="course" type="text" class="form-control @error('course') is-invalid @enderror" name="course" value="{{ $users->course }}"  autofocus>

                                @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="background" class="col-md-3 col-form-label text-md-right">Introduction</label>

                            <div class="col-md-7">
                                <input id="background" type="text" class="form-control @error('background') is-invalid @enderror" name="background" value="{{ $users->background }}"  autofocus>

                                @error('background')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="image_file" class="col-md-3 col-form-label text-md-right">Photo Image</label>

                            <div class="col-md-7">


<img class="img-fluid" style="width: 100%" src="{!! asset('img/' . $users->image_file) !!}">

                                <input id="image_file" type="file" class="form-control @error('image_file') is-invalid @enderror" name="image_file" value="{{ $users->image_file }}" autofocus>

                                @error('image_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                  
                   <button type="submit" style="width: 100px" class="btn btn-outline-success float-right">Submit</button>
                </form>

</div>
</div>
</div>
</div>
</div>
</div>









                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection