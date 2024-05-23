<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashoard') }}" class="brand-link">
      <!-- <img src="{{ asset('admin/images/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        @if(!empty(Auth::guard('admin')->user()->image))
          <img src="{{ url('admin/images/photos/'.Auth::guard('admin')->user()->image) }}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{ url('admin/images/no-image.png') }}" class="img-circle elevation-2" alt="User Image">
          
        @endif
        </div>

        <div class="info">
          <a href="{{url('admin/update-info')}}" class="d-block">{{ Auth::guard('admin')->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                @if(Session::get('page')=="dashboard")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/dashboard')}}" class="nav-link {{$active}}"> 
                <p>Dashoard</p>
                </a>
              </li>


               <li class="nav-header">Pages</li>
               @if(Session::get('page')=="cms-pages")
              @php $active="active"; $menu="menu-open"; @endphp
                @else
                  @php $active =""; $menu=""; @endphp
                @endif
          <li class="nav-item {{$menu}}">
            <a href="#" class="nav-link {{$active}}">
              <p>
                CMS Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('admin/cms-pages')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>CMS Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Setting</li>
          @if(Session::get('page')=="update-info" || Session::get('page')=="update-password")
              @php $active="active"; $menu="menu-open"; @endphp
                @else
                  @php $active =""; $menu=""; @endphp
                @endif
          <li class="nav-item {{$menu}}">

            <a href="#" class="nav-link {{$active}}">
              <p>
                User Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                @if(Session::get('page')=="update-info")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/update-info')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>Update Profile</p>
                </a>
              </li>
              <li class="nav-item">
                @if(Session::get('page')=="update-password")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/update-password')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>Update Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Site Info
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('admin/update-password')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>  
                <p>Logo & Header</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/update-password')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>  
                <p>Footer Info</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
