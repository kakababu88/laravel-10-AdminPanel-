@extends('admin.layout.layout')

@section('containt')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Socal Page
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Socal edit</li>
              <li class="breadcrumb-item active">Add Socal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Socal Submition From</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
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
          
            <form method="post" name="SocalFrom" id="SocalFrom" @if(empty($socal['id'])) action="{{ url('admin/add-edit-socal') }}" @else action="{{ url('admin/add-edit-socal/'.$socal['id']) }}" @endif >@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="faceook">Faceook Link</label>
                    <input type="text" class="form-control" id="faceook" name="faceook" placeholder="Enter Slide Title" @if(!empty($socal['faceook'])) value="{{ $socal['faceook'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="twitter">twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter 2nd Title" @if(!empty($socal['twitter'])) value="{{ $socal['twitter'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="linkedin">linkedin Link</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Enter 1st Line" @if(!empty($socal['linkedin'])) value="{{ $socal['linkedin'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="instagram">instagram Link</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Enter 2nd Line" @if(!empty($socal['instagram'])) value="{{ $socal['instagram'] }}" @endif>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.row -->


            <!-- /.row -->
          </div>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->


        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div> 

@endsection