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
          
            <form method="post" name="ServiceFrom" enctype="multipart/form-data" id="ServiceFrom" @if(empty($package['id'])) action="{{ url('admin/add-edit-package') }}" @else action="{{ url('admin/add-edit-package/'.$package['id']) }}" @endif >@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Slide Title" @if(!empty($package['title'])) value="{{ $package['title'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter Duration" @if(!empty($package['duration'])) value="{{ $package['duration'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" @if(!empty($package['description'])) value="{{ $package['description'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" @if(!empty($package['price'])) value="{{ $package['price'] }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Enter URL" @if(!empty($package['url'])) value="{{ $package['url'] }}" @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image" >
                    @if(!empty($package['image']))
                    <input type="hidden" name="current_image" value="{{$package['image'] }}">
                    @endif
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