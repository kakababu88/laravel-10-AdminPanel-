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
                <i class="nav-icon fas fa-tachometer-alt"></i> 
                <p>Dashoard</p>
                </a>
              </li>
              <li class="nav-header">Section</li>
               @if(Session::get('page')=="headline")
              @php $active="active"; $menu="menu-open"; @endphp
                @else
                  @php $active =""; $menu=""; @endphp
                @endif
          <li class="nav-item {{$menu}}">
            <a href="#" class="nav-link {{$active}}">
            <i class="nav-icon fas fa-table"></i>
              <p>
                Heading
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('admin/headline')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>Name & Title</p>
                </a>
              </li>
              </ul>


               <li class="nav-header">Pages</li>
               @if(Session::get('page')=="slide" || 
                    Session::get('page')=="service" || 
                    Session::get('page')=="tour_service" || 
                    Session::get('page')=="package" || 
                    Session::get('page')=="memory" || 
                    Session::get('page')=="contract"
                    
                    )
              @php $active="active"; $menu="menu-open"; @endphp
                @else
                  @php $active =""; $menu=""; @endphp
                @endif
          <li class="nav-item {{$menu}}">
            <a href="#" class="nav-link {{$active}}">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Main Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Session::get('page')=="slide")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/slide')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>Slide</p>
                </a>
            </li>
            </ul>
            <!-- <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Session::get('page')=="booking")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/booking')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>{{$title = DB::table('categories')->where('id', 2)->value('title');}}</p>
                </a>
            </li>
            </ul> -->
            <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Session::get('page')=="service")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/service')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>{{$title = DB::table('categories')->where('id', 3)->value('title');}}</p>
                </a>
            </li>
            </ul>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Session::get('page')=="tour_service")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/tour_service')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>{{$title = DB::table('categories')->where('id', 4)->value('title');}}</p>
                </a>
            </li>
            </ul>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Session::get('page')=="package")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/package')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>{{$title = DB::table('categories')->where('id', 5)->value('title');}}</p>
                </a>
            </li>
            </ul>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Session::get('page')=="memory")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/memory')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>{{$title = DB::table('categories')->where('id', 6)->value('title');}}</p>
                </a>
            </li>
            </ul>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Session::get('page')=="contract")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/contract')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>{{$title = DB::table('categories')->where('id', 7)->value('title');}}</p>
                </a>
            </li>
            </ul>
          </li>
               @if(Session::get('page')=="cms-pages" || Session::get('page')=="socal")
              @php $active="active"; $menu="menu-open"; @endphp
                @else
                  @php $active =""; $menu=""; @endphp
                @endif
          <li class="nav-item {{$menu}}">
            <a href="#" class="nav-link {{$active}}">
            <i class="nav-icon fas fa-th"></i>
              <p>
                CMS Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Session::get('page')=="cms-pages")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/cms-pages')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>USEFUL LINK</p>
                </a>
              </li>
              </ul>
              <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Session::get('page')=="socal")
                  @php $active="active" @endphp
                @else
                  @php $active ="" @endphp
                @endif
                <a href="{{url('admin/socal')}}" class="nav-link {{$active}}">
                <i class="far fa-circle nav-icon"></i>  
                <p>Social Network</p>
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
            <i class="nav-icon fas fa-user"></i>
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

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
