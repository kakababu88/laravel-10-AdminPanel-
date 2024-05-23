@extends('admin.layout.layout')
@section('containt')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  @if(!empty(Auth::guard('admin')->user()->image))
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ url('admin/images/photos/'.Auth::guard('admin')->user()->image) }}"
                        alt="User profile picture">
                  @else
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{url('admin/images/no-image.png') }}"
                        alt="User profile picture">      
                  @endif
                </div>

                <h3 class="profile-username text-center">{{ Auth::guard('admin')->user()->name}}</h3>

                <p class="text-muted text-center">Role: {{Auth::guard('admin')->user()->type}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email:</b> <a class="float-right">{{Auth::guard('admin')->user()->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Moile:</b> <a class="float-right">{{Auth::guard('admin')->user()->mobile}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Dipartment:</b> <a class="float-right">Admin</a>
                  </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
        <!-- Main content -->
        <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Edit Info</h3>
                  </div>
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                  @endif
                  @if(Session::has('error_message'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{Session::get('error_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  @if(Session::has('success_message'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" action="{{ url('admin/update-info') }}" enctype="multipart/form-data">@csrf
                    <!-- <div class="card-body">
                      <div class="form-group">
                        <label for="admin_email">Email address</label>
                        <input class="form-control" name="admin_email" id="admin_email" value="{{Auth::guard('admin')->user()->email}}" readonly="" style="background-color:#666;color:#6ef538;">
                      </div>                    
                    </div> -->
                    <div class="card-body">
                      <div class="form-group">
                        <label for="admin_name">Name</label>
                        <input class="form-control" name="admin_name" id="admin_name" value="{{Auth::guard('admin')->user()->name}}">
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="admin_mobile">Mobile Number</label>
                        <input class="form-control" name="admin_mobile" id="admin_mobile" value="{{Auth::guard('admin')->user()->mobile}}">
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="admin_image">Image</label>
                        <input type="file" class="form-control" name="admin_image" id="admin_image" >
                        @if(!empty(Auth::guard('admin')->user()->image))
                        <input type="hidden" name="current_image" value="{{Auth::guard('admin')->user()->image }}">
                        @endif
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              <!-- </div>
            </div> -->
    </div>
  </div>
</div>
@endsection