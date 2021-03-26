@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                <div style="background:transparent !important" class="jumbotron">
                <h1 class="display-6"><b>Administrator Accounts</b></h1>
                </BR>
                <div class="table-responsive">
                <table id="example" class="display table table-hover" style="width:100%">
  <thead>
    <tr>
      <th>ID</th>
      <th >First Name</th>
      <th >Last Name</th>
      <th >Email</th>
      <th >Add Showcases</th>
      <th >Edit Account</th>
      <th >Delete Account</th>

    </tr>
  </thead>
          <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->first_name}}</td>
      <td>{{$user->last_name}}</td>
      <td>{{$user->email}}</td>
      <td><a href="{{route('showcase.index', $user->id)}}"><button type="button" style="width: 100px" class="btn btn-outline-success float-left create">Add</button></a></td>
      <td><a href="{{route('member.edit', $user->id)}}"><button type="button" style="width: 100px" class="btn btn-outline-primary float-left create">Edit</button></a></td>
      <td><a href="{{route('dashboard.destroy', $user->id)}}"><button type="button" style="width: 100px" class="btn btn-outline-danger float-left delete">Delete</button></a></td>

    </tr>
    @endforeach

  </tbody>
    </table>
</div>



</BR>

<h1 class="display-6"><b>Register Accounts</b></h1>
                </BR>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                <form method="POST" action="{{ route('register') }}">
                        @csrf
</BR>
                        <div class="form-group row">
                            <label for="first_name" class="col-md-3 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-7">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-3 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-7">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-9 offset-md-3">
                                <button type="submit" style="width: 100px" class="btn btn-outline-success float-right">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
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