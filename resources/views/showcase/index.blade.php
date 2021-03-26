@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                <div style="background:transparent !important" class="jumbotron">
                <h1 class="display-6"><b>Showcases</b></h1>
                </BR>
                <div class="table-responsive">
                <table id="example" class="display table table-hover" style="width:100%">
  <thead>
    <tr>

      <th style="width: 35%;">File Preview</th>
      <th>Name</th>
      <th>Title</th>
      <th>Description</th>
      <th style="width: 25%;">Action</th>

    </tr>
  </thead>
          <tbody>
    @foreach($users_ids as $users_id)
    <tr>
      
      <td>


  <video class="embed-responsive" width="320" height="240" autoplay muted controls loop>
  <source src="{{asset("video/$users_id->file_name")}}"  type="video/mp4">
Your browser does not support the video tag.
</video>


</td> 
      <td>{{$users_id->activity_name}}</td>
      <td>{{$users_id->activity_title}}</td>
      <td>{{$users_id->activity_description}}</td>
      <td><a href="{{route('showcase.edit', $users_id->id)}}"><button type="button" style="width: 100px" class="btn btn-outline-primary float-left edit">Edit</button></a>
      <a href="{{route('showcase.destroy', $users_id->id)}}"><button type="button" style="width: 100px" class="btn btn-outline-danger float-right delete">Delete</button></a></td>
    </tr>
    @endforeach

  </tbody>
    </table>
</div>


</BR>


<h1 class="display-6"><b>Add Showcase</b></h1>
                </BR>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                <form action="{{ route('showcase.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  </BR>
                  <input type="hidden" name="users_id" value = "{{$user_id}}">

                        <div class="form-group row">
                            <label for="activity_name" class="col-md-3 col-form-label text-md-right">Activity Name</label>

                            <div class="col-md-7">
                                <input id="activity_name" type="text" class="form-control @error('activity_name') is-invalid @enderror" name="activity_name" value="" required autocomplete="activity_name" autofocus>

                                @error('activity_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="activity_title" class="col-md-3 col-form-label text-md-right">Activity Title</label>

                            <div class="col-md-7">
                                <input id="activity_title" type="text" class="form-control @error('activity_title') is-invalid @enderror" name="activity_title" value="" required autofocus>

                                @error('activity_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="activity_description" class="col-md-3 col-form-label text-md-right">Activity Description</label>

                            <div class="col-md-7">
                                <input id="activity_description" type="text" class="form-control @error('activity_description') is-invalid @enderror" name="activity_description" value="" required autofocus>

                                @error('activity_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="file_name" class="col-md-3 col-form-label text-md-right">SWF File Upload</label>

                            <div class="col-md-7">
                                <input id="file_name" type="file" class="form-control @error('file_name') is-invalid @enderror" name="file_name"  required autofocus>

                                @error('file_name')
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