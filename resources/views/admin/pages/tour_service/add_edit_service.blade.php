@extends('admin.layout.layout')

@section('containt')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Tour Service Page
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tour Service edit</li>
              <li class="breadcrumb-item active">Add Tour Service</li>
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
            <h3 class="card-title">Tour Service Submition From</h3>

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
          
            <form method="post" name="TourServiceFrom" id="TourServiceFrom" @if(empty($tourservice['id'])) action="{{ url('admin/add-edit-tour_service') }}" @else action="{{ url('admin/add-edit-tour_service/'.$tourservice['id']) }}" @endif >@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Slide Title" @if(!empty($tourservice['title'])) value="{{ $tourservice['title'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="sub_title">2nd Title</label>
                    <input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="Enter 2nd Title" @if(!empty($tourservice['sub_title'])) value="{{ $tourservice['sub_title'] }}" @endif>
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