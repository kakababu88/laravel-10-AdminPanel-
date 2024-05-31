@extends('admin.layout.layout')

@section('containt')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Service Page
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service edit</li>
              <li class="breadcrumb-item active">Add Service</li>
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
            <h3 class="card-title">Service Submition From</h3>

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
          
            <form method="post" name="ServiceFrom" id="ServiceFrom" @if(empty($service['id'])) action="{{ url('admin/add-edit-service') }}" @else action="{{ url('admin/add-edit-service/'.$service['id']) }}" @endif >@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Slide Title" @if(!empty($service['title'])) value="{{ $service['title'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="title_2">2nd Title</label>
                    <input type="text" class="form-control" id="title_2" name="title_2" placeholder="Enter 2nd Title" @if(!empty($service['title_2'])) value="{{ $service['title_2'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="line1">1st Line</label>
                    <input type="text" class="form-control" id="line1" name="line1" placeholder="Enter 1st Line" @if(!empty($service['line1'])) value="{{ $service['line1'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="line2">2nd Line</label>
                    <input type="text" class="form-control" id="line2" name="line2" placeholder="Enter 2nd Line" @if(!empty($service['line2'])) value="{{ $service['line2'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="line3">3rd Line</label>
                    <input type="text" class="form-control" id="line3" name="line3" placeholder="Enter 3rd Line" @if(!empty($service['line3'])) value="{{ $service['line3'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="line4">4th Line</label>
                    <input type="text" class="form-control" id="line4" name="line4" placeholder="Enter 4th Line" @if(!empty($service['line4'])) value="{{ $service['line4'] }}" @endif>
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