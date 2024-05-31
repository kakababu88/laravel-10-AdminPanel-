<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>
    ChutiHolidays
  </title>

  <!-- range selctor slider style -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="#">
            <span>
              <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo" width="30%" height="28%">
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </a>
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="">Home
                    <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#service">
                    Service
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#TourFacility">
                    Tour Facility
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#package">Package</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#memories">Memories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contract">Contract</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          @foreach($slides as $slide)
          @if($slide['id']==1)
            <div class="carousel-item active">
            <div class="slider_container">
                <div class="box">
                  <div class="detail-box">
                    <h1>
                    {{$slide['title']}}
                    </h1>
                    <h2>
                    {{$slide['sub_title']}}
                    </h2>
                  </div>
                  <div class="img-box">
                    <div class="play_btn">
                      <!-- <a href="">
                        <img src="{{ asset('frontend/images/wa.jpg') }}" alt="">
                      </a> -->
                    </div>
                    </a>
                  </div>
                </div>
                <div class="btn-box">
                  <!-- <a href="">
                    Discover More
                  </a> -->
                </div>
              </div>
            </div>
            @else
            <div class="carousel-item">
            <div class="slider_container">
                <div class="box">
                  <div class="detail-box">
                    <h1>
                    {{$slide['title']}}
                    </h1>
                    <h2>
                    {{$slide['sub_title']}}
                    </h2>
                  </div>
                  <div class="img-box">
                    <div class="play_btn">
                      <!-- <a href="">
                        <img src="{{ asset('frontend/images/wa.jpg') }}" alt="">
                      </a> -->
                    </div>
                    </a>
                  </div>
                </div>
                <div class="btn-box">
                  <!-- <a href="">
                    Discover More
                  </a> -->
                </div>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

  <!-- trip section -->
<!-- 
  <section class="trip_section layout_padding" id="bookTrip">
    <div class="container">
      <div class="heading_container">
        <h2>
          {{$title = DB::table('categories')->where('id', 2)->value('title');}}
        </h2>
        <p>
        {{$description = DB::table('categories')->where('id', 2)->value('description');}}
        </p>
      </div>
    </div>
    <div class="container ">
      <div class="box container-bg">
        <div class="img-box">
          <img src="{{ asset('frontend/images/form-img.png') }}" alt="">
        </div>
        <div class="form_container">
          <form>
            <div class="form-group">
              <div class="input-group ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <img src="{{ asset('frontend/images/location.png') }}" alt="">
                  </div>
                </div>
                <input type="text" class="form-control" id="inputDestination" placeholder="Where You Want Go? ">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <img src="{{ asset('frontend/images/location.png') }}" alt="">
                  </div>
                </div>
                <input type="text" class="form-control" id="inputLocation" placeholder="All Locations">
              </div>
            </div>
            <div class="form-group ">
              <div class="input-group ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <img src="{{ asset('frontend/images/language.png') }}" alt="">
                  </div>
                </div>
                <select id="inputLanguage" class="form-control">
                  <option selected>All Language</option>
                  <option>...</option>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <img src="{{ asset('frontend/images/down-arrow.png') }}" alt="">
                  </div>
                </div>
              </div>
              <div class="select_arrow"></div>
            </div>
            <div class="form-group">
              <div class="input-group ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <img src="{{ asset('frontend/images/earth.png') }}" alt="">
                  </div>
                </div>
                <input type="text" class="form-control" id="inputLocation" placeholder="All Tour Type">
              </div>
            </div>
            <div class="range_input">
              <label for="my_range">
                Select Price Range
              </label>
              <div class="form-group ">
                <input type="text" class="js-range-slider form-control" name="my_range" value="" />
              </div>
            </div> -->
            <!-- <div class="btn-box">
              <button type="submit" class="">Book Now</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end trip section -->


  <!-- package section -->

  <section class="package_section" id="service">
    <div class="container">
      <div class="heading_container">
      <br>
      <br>
      <br>
        <h2>
        {{$title = DB::table('categories')->where('id',3)->value('title');}}
        </h2>
        <p>
        {{$description = DB::table('categories')->where('id',3)->value('description');}}
        </p>
      </div>
    </div>
    <div class="container">
      <div class="box container-bg">
        <div class="img-box">
          <img src="{{ asset('frontend/images/package-img.png') }}" alt="">
        </div>
        <div class="detail-container">
        @foreach($services as $service)
          <div class="detail-box">
            <h4>
            {{$service['title']}}
            </h4>
            <h2>
              <span>{{$service['title_2']}}</span>
            </h2>
            <ul>
              <li>
              {{$service['line1']}}
              </li>
              <li>
              {{$service['line2']}}
              </li>
              <li>
              {{$service['line3']}}
              </li>
              <li>
              {{$service['line4']}}
              </li>
            </ul>
            <!-- <a href="">
              Book Now
            </a> -->
          </div>
        @endforeach
          </div>
        <div class="btn-box">
          <!-- <a href="">
            See More
          </a> -->
        </div>
      </div>
    </div>
  </section>

  <!-- end package section -->

  <!-- service section -->


  <section class="service_section layout_padding" id="TourFacility">
    <div class="container">
      <div class="heading_container">
        <h2>
        {{$title = DB::table('categories')->where('id',4)->value('title');}}
        </h2>
        <p>
        {{$description = DB::table('categories')->where('id',4)->value('description');}}
        </p>
      </div>
    </div>
    <div class="container">
      <div class="box container-bg">
        <div class="detail-box">
          <div class="img-box">
            <img src="{{asset('frontend/images/s-1.png')}}" alt="" class="img1">
            <img src="{{asset('frontend/images/s-1-blue.png')}}" alt="" class="img2">
          </div>
          <div class="text-box">
            <h6>
            {{$tour = DB::table('tour_services')->where('id',1)->value('title');}}
            </h6>
            <p>
            {{$tour = DB::table('tour_services')->where('id',1)->value('sub_title');}}
            </p>
          </div>
        </div>
        <div class="detail-box">
          <div class="img-box">
            <img src="{{asset('frontend/images/s-2.png')}}" alt="" class="img1">
            <img src="{{asset('frontend/images/s-2-blue.png')}}" alt="" class="img2">
          </div>
          <div class="text-box">
            <h6>
            {{$tour = DB::table('tour_services')->where('id',2)->value('title');}}
            </h6>
            <p>
            {{$tour = DB::table('tour_services')->where('id',2)->value('sub_title');}}
            </p>
          </div>
        </div>
        <div class="detail-box">
          <div class="img-box">
            <img src="{{asset('frontend/images/s-3.png')}}" alt="" class="img1">
            <img src="{{asset('frontend/images/s-3-blue.png')}}" alt="" class="img2">
          </div>
          <div class="text-box">
            <h6>
            {{$tour = DB::table('tour_services')->where('id',3)->value('title');}}
            </h6>
            <p>
            {{$tour = DB::table('tour_services')->where('id',3)->value('sub_title');}}
            </p>
          </div>
        </div>
        <div class="btn-box">
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- blog section -->

  <section class="blog_section" id="package">
    <div class="container">
      <div class="heading_container">
        <h2>
        {{$title = DB::table('categories')->where('id', 5)->value('title');}}
        </h2>
        <p>
        {{$description = DB::table('categories')->where('id', 5)->value('description');}}
        </p>
      </div>
    </div>
    <div class="container">
      <div class="box container-bg">
        <div class="blog_box">
          <div class="date-box">
            <h4>
            {{$data = DB::table('packages')->where('id', 1)->value('price');}}
            </h4>
          </div>
          <div class="detail-box">
            <div class="img-box">
              <img src="{{ url('admin/images/packages/photos/'.DB::table('packages')->where('id', 1)->value('image')) }}" alt="">
            </div>
            <div class="text-box">
              <h5>
              {{$data = DB::table('packages')->where('id', 1)->value('title');}}
              </h5>
              <h6>
              {{$data = DB::table('packages')->where('id', 1)->value('duration');}}
              </h6>
              <p>
              {{$data = DB::table('packages')->where('id', 1)->value('description');}}
              </p>
            </div>
          </div>
          <a href="{{$data = DB::table('packages')->where('id', 1)->value('url');}}">
            Book Now
          </a>
        </div>
        <div class="blog_box-cover">
          <div class="blog_box">
            <div class="date-box">
              <h4>
              {{$data = DB::table('packages')->where('id', 2)->value('price');}}
              </h4>
            </div>
            <div class="detail-box">
              <div class="img-box">
                <img src="{{ url('admin/images/packages/photos/'.DB::table('packages')->where('id', 2)->value('image')) }}" alt="">
              </div>
              <div class="text-box">
                <h5>
                {{$data = DB::table('packages')->where('id', 2)->value('title');}}
                </h5>
                <h6>
                {{$data = DB::table('packages')->where('id', 2)->value('duration');}}
                </h6>
                <p>
                {{$data = DB::table('packages')->where('id', 2)->value('description');}}
                </p>
              </div>
            </div>
            <a href="{{$data = DB::table('packages')->where('id', 2)->value('url');}}">
              Book Now
            </a>
          </div>
          <div class="blog_box">
          <div class="date-box">
            <h4>
            {{$data = DB::table('packages')->where('id', 3)->value('price');}}
            </h4>
          </div>
          <div class="detail-box">
            <div class="img-box">
              <img src="{{ url('admin/images/packages/photos/'.DB::table('packages')->where('id', 3)->value('image')) }}" alt="">
            </div>
            <div class="text-box">
              <h5>
              {{$data = DB::table('packages')->where('id', 3)->value('title');}}
              </h5>
              <h6>
              {{$data = DB::table('packages')->where('id', 3)->value('duration');}}
              </h6>
              <p>
              {{$data = DB::table('packages')->where('id', 3)->value('description');}}
              </p>
            </div>
          </div>
          <a href="{{$data = DB::table('packages')->where('id', 3)->value('url');}}">
            Book Now
          </a>
        </div>
        </div>
        <div class="blog_box">
          <div class="date-box">
            <h4>
            {{$data = DB::table('packages')->where('id', 4)->value('price');}}
            </h4>
          </div>
          <div class="detail-box">
            <div class="img-box">
              <img src="{{ url('admin/images/packages/photos/'.DB::table('packages')->where('id', 4)->value('image')) }}" alt="">
            </div>
            <div class="text-box">
              <h5>
              {{$data = DB::table('packages')->where('id', 4)->value('title');}}
              </h5>
              <h6>
              {{$data = DB::table('packages')->where('id', 4)->value('duration');}}
              </h6>
              <p>
              {{$data = DB::table('packages')->where('id', 4)->value('description');}}
              </p>
            </div>
          </div>
          <a href="{{$data = DB::table('packages')->where('id', 4)->value('url');}}">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->
  <section class="client_section layout_padding" id="memories">
    <div class="container">
      <div class="heading_container">
        <h2>
        {{$title = DB::table('categories')->where('id', 6)->value('title');}}
        </h2>
        <p>
        {{$description = DB::table('categories')->where('id', 6)->value('description');}}
        </p>
      </div>
    </div>
    <div class="container">
      <div id="carouselExample2Controls" class="carousel slide container-bg" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($memorys as $memory)
          @if($memory['id']==1)
          <div class="carousel-item active">
            <div class="box ">
              <div class="img-box">
                <img src="{{ url('admin/images/memorys/photos/'.$memory['image']) }}" alt="">
              </div>
              <div class="detail-box">
                <h2>
                {{ $memory['title'] }}
                </h2>
                <p>
                {{ $memory['description'] }}
                </p>
              </div>
            </div>
          </div>
          @else
          <div class="carousel-item">
            <div class="box ">
              <div class="img-box">
                <img src="{{ url('admin/images/memorys/photos/'.$memory['image']) }}" alt="">
              </div>
              <div class="detail-box">
                <h2>
                {{ $memory['title'] }}
                </h2>
                <p>
                {{ $memory['description'] }}
                </p>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- end client section -->

  <!-- info section -->

  <section class="info_section" id="contract">

    <div class="container">

      <div class="heading_container">
        <h2>
        {{$title = DB::table('categories')->where('id', 7)->value('title');}}
        </h2>
        <p>
        {{$description = DB::table('categories')->where('id', 7)->value('description');}}
        </p>
      </div>
    </div>
    
      <div class="container">
        <div class="social_container">
          <div class="info_social">
            <div>
              <a href="{{$data = DB::table('socals')->where('id', 1)->value('faceook');}}">
                <img src="{{ asset('frontend/images/facebook-logo-button.png') }}" alt="">
              </a>
            </div>
            <div>
              <a href="{{$data = DB::table('socals')->where('id', 1)->value('twitter');}}">
                <img src="{{ asset('frontend/images/twitter-logo-button.png') }}" alt="">
              </a>
            </div>
            <div>
              <a href="{{$data = DB::table('socals')->where('id', 1)->value('linkedin');}}">
                <img src="{{ asset('frontend/images/linkedin.png') }}" alt="">
              </a>
            </div>
            <div>
              <a href="{{$data = DB::table('socals')->where('id', 1)->value('instagram');}}">
                <img src="{{ asset('frontend/images/instagram.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class=" col-lg-4">
            <div class="info_nav_link">
              <h5>
                Useful link
              </h5>
              <ul>
              @foreach($cmspages as $cmspage)
                <li>
                  <a href="{{ $cmspage['url'] }}">
                  {{ $cmspage['title'] }}
                  </a>
                </li>
              @endforeach
              </ul>
            </div>
          </div>
          <div class=" col-lg-4">

          </div>
          <div class="col-lg-4">
            <h5>
              Address
            </h5>
            <div class="info_link-box">
              <a href="">
                <img src="{{ asset('frontend/images/location2.png') }}" alt="">
                <span> {{$address = DB::table('contracts')->where('id', 1)->value('address');}}</span>
              </a>
              <a href="">
                <img src="{{ asset('frontend/images/call.png') }}" alt="">
                <span>Call : {{$phone = DB::table('contracts')->where('id', 1)->value('phone');}}</span>
              </a>
              <a href="">
                <img src="{{ asset('frontend/images/mail.png') }}" alt="">
                <span> {{$email = DB::table('contracts')->where('id', 1)->value('email');}}</span>
              </a>
            </div>
          </div>
        </div>
        <!-- footer section -->
        <section class=" footer_section">
          <p>
            Copyright &copy; 2024 All Rights Reserved By
            <a href="https://dmtsd.com/">DMTS-BD</a>
              </p>
          </p>
        </section>
        <!-- footer section -->
      </div>
    
  </section>

  <!-- end info section -->



  <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.js') }}"></script>

  <!-- range selector slider script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>

  <script>
    $(".js-range-slider").ionRangeSlider({
      skin: "round",
      type: "double",
      min: 200,
      max: 10000,
      from: 200,
      to: 500,
      grid: true
    });
  </script>

</body>

</html>