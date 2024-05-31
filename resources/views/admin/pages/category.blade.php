@extends('admin.layout.layout')

@section('containt')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sections Title</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Page</li>
              <li class="breadcrumb-item active">Section</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

              <!-- /.card-body -->
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sections DATA</h3>
              
              @if(Session::has('success_message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{Session::get('success_message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
                <!-- <a style=" max-width: 150px; float:right; display: inline-black;"  href="{{url('admin/add-edit-category')}}" class="btn btn-block btn-primary">Add CMS Page</a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="cmspages" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Created on</th>
                    <!-- <th>Status</th> -->
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($Categorys as $category)
                  <tr>
                    <td>{{$category['id']}}</td>
                    <td>{{$category['title']}}</td>
                    <td>{{$category['description']}}</td>
                    <td>{{date("F j, Y, g:i a", strtotime($category['created_at']));}}</td>
                    <td>
                      <a class="editCmsPageStatus" style='margin-top:-5px;' href="{{ url('admin/add-edit-category/'.$category['id']) }}"> <i class="fas fa-edit"></i></a>
                      &nbsp&nbsp
                      <!-- <a class="editCmsPageStatus" style='margin-top:-5px;' href="{{ url('admin/headline/'.$category['id']) }}"> <i class="fas fa-trash"></i></a> -->
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection