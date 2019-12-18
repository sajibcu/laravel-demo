<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laravel E-commarce</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('resources/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel='stylesheet' href="{{ asset('resources/css/slick.css')}}">
  <link rel='stylesheet' href="{{ asset('resources/css/animate.min.css')}}">

  <!-- Custom styles CSS -->
  <link href="{{ asset('resources/css/frontend_style.css')}}" rel="stylesheet">

</head>

<body>
  <!--Header-->
  <div class="container mt-2 mb-2">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-3">
        <a class="site-nav-nsbd-logo" href="/" role="banner">
          <img class="site_logo" src="resources/images/onlineEducation_Landing1.png">
          <div class="site_title d-none d-sm-block">Laravel E-commarce</div>
        </a>
      </div>
      <div class="col-lg-7 col-md-6 col-9">
        <div class="topbar_login d-block d-sm-none"><a href="login.html"><i class="fa fa-user"></i></a></div>
        <div class="topbar_login d-none d-sm-block"><a href="login.html"><i class="fa fa-user"></i> Login</a></div>
        <form class="nsbd_search">
          <input class="form-control top_search" type="text" placeholder="Search" aria-label="Search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </form>
        <!--<form class="form-inline" action="/action_page.php">
          <input type="email" class="form-control" id="login_email" placeholder="Enter email" name="login_email"> &emsp;
          <input type="password" class="form-control" id="login_pwd" placeholder="Enter password" name="login_pwd"> &emsp;
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>-->
      </div>
    </div>
  </div>
  <!--Header-->
  <!--Navbar-->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-5"
        aria-controls="navbarSupportedContent-5" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <div id="navbar-close" class="hidden">
          <span class="glyphicon glyphicon-remove"></span>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect waves-light" href="{{ url('/') }}"><i class="fa fa-home"></i>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light"href="{{ url('/product') }}">Add Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="{{ url('/products') }}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="math.html">Math</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
            </a>
            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
              <a class="dropdown-item waves-effect waves-light" href="privacy.html">Action</a>
              <a class="dropdown-item waves-effect waves-light" href="termsofservice.html">Another action</a>
              <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a href="membership.html" class="nav-link waves-effect waves-light">
              <i class="fa fa-users"></i> Membership
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Navbar-->
  <!--Banner-->
  <!--Banner-->
  <!--Classes-->
  <div class="container">
    <div class="row text-center">
      <h1 class="course_title">Products</h1>
    </div>
    <div class="row">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    </div>
    <div class="row">
      <form action="{{ url('/product/store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="form-group">
          <label for="email">Product Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
          <label for="pwd">Description:</label>
          <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
        </div>

        <div class="form-group">
          <label for="pwd">File:</label>
          <input type="file" class="form-control" id="file"  name="file">
        </div>

        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
  <!--Classes-->
  <!--support-->
  <div class="nsbd_support padding-lg mt-5">
    <div class="container">
      <div class="row heading heading-icon">
        <h2>Discover how Nice school supports success for every learner</h2>
        <h5>Nice school gives teachers everything they need to personalize instruction</h5>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure>
              <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63">
                <g fill="none" fill-rule="evenodd">
                  <circle cx="31.5" cy="31.5" r="29.5" stroke="#00AEEF" stroke-width="4" />
                  <g fill="#00AEEF">
                    <path d="M35.037 37.128c-.574 1.645-2.077 2.819-3.84 2.819-1.808 0-3.342-1.236-3.88-2.947-4.21 1.434-7.042 5.314-8.288 9.964-.141.527.251 1.036.772 1.036h22.398c.52 0 .913-.509.772-1.036-1.212-4.519-3.92-8.309-7.934-9.836M31.28 33.678a7.721 7.721 0 0 1-4.706-1.592c-2.418-1.95-2.032-5.4-1.241-7.139a1.923 1.923 0 0 1 1.509-1.117 1.91 1.91 0 0 1 1.731.71c1.549 1.943 5.228 2.439 7.862 1.153a.199.199 0 0 0 .109-.204.197.197 0 0 0-.157-.17c-.977-.195-1.69-1.006-1.652-1.91l.024-.008c2.9.123 3.996 1.43 4.13 3.977a7.738 7.738 0 0 1-7.61 6.3m16.525-15.723l-15.551-5.82a2.153 2.153 0 0 0-1.506 0l-15.551 5.82a.3.3 0 0 0 0 .564l1.75.655v5.803h-.228a.321.321 0 0 0-.322.32v3.514c0 .177.144.32.322.32h.453a.321.321 0 0 0 .322-.32v-2.713h.685v2.713c0 .177.144.32.322.32h.453a.321.321 0 0 0 .322-.32v-3.514a.321.321 0 0 0-.322-.32h-.145V19.87l2.51.939v3.67c-.072.483-.11.976-.11 1.478C21.208 31.495 25.726 36 31.28 36c5.554 0 10.072-4.505 10.072-10.042 0-.255-.013-.506-.031-.755l.007-2.404c0-.639-.058-1.236-.163-1.796l6.64-2.484a.3.3 0 0 0 0-.564" />
                  </g>
                </g>
              </svg>
            </figure>
            <h3><a href="http://www.webcoderskull.com/">Comprehensive Curriculum</a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <span class="discover-lk blue-color"><a href="#">Browse skills <i class="fa fa-angle-double-right"></i></a></span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure>
              <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63">
                <g fill="none" fill-rule="evenodd">
                  <circle cx="31.5" cy="31.5" r="29.5" stroke="#5EA300" stroke-width="4" />
                  <path fill="#5EA300" d="M46 23.229a5.002 5.002 0 0 1 0 9.542V48.5a1.5 1.5 0 0 1-3 0V32.771a5.002 5.002 0 0 1 0-9.542V15.5a1.5 1.5 0 0 1 3 0v7.729zm-13 10a5.002 5.002 0 0 1 0 9.542V48.5a1.5 1.5 0 0 1-3 0v-5.729a5.002 5.002 0 0 1 0-9.542V15.5a1.5 1.5 0 0 1 3 0v17.729zm-13-13a5.002 5.002 0 0 1 0 9.542V48.5a1.5 1.5 0 0 1-3 0V29.771a5.002 5.002 0 0 1 0-9.542V15.5a1.5 1.5 0 0 1 3 0v4.729z" />
                </g>
              </svg>
            </figure>
            <h3><a href="#">Continuous Diagnostic </a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <span class="discover-lk green-color"> <a href="#">Learn how it works <i class="fa fa-angle-double-right"></i></a></span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure>
              <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63">
                <g fill="none" fill-rule="evenodd">
                  <path fill="#7A67D7" d="M31 38.5v10.576L33 49V33c9-1.667 12.275-7.333 9.825-17C34.239 17.121 30.297 22.788 31 33c-2.405-5.902-7.405-7.532-15-4.891 1.727 9.044 6.727 12.508 15 10.391z" />
                  <circle cx="31.5" cy="31.5" r="29.5" stroke="#7A67D7" stroke-width="4" />
                </g>
              </svg>
            </figure>
            <h3><a href="http://www.webcoderskull.com/">Personalized Guidance </a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <span class="discover-lk purple-color"><a href="#">Explore recommendations <i class="fa fa-angle-double-right"></i></a></span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure>
              <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63">
                <g fill="none" fill-rule="evenodd">
                  <circle cx="31.5" cy="31.5" r="29.5" stroke="#F5A623" stroke-width="4" />
                  <rect width="33" height="3" x="15" y="42" fill="#F5A623" rx="1.5" />
                  <path fill="#F5A623" d="M20 22h3a2 2 0 0 1 2 2v16h-7V24a2 2 0 0 1 2-2zM30 27h3a2 2 0 0 1 2 2v11h-7V29a2 2 0 0 1 2-2zM40 17h3a2 2 0 0 1 2 2v21h-7V19a2 2 0 0 1 2-2z" />
                </g>
              </svg>
            </figure>
            <h3><a href="http://www.webcoderskull.com/">Nice School<br>Analytics </a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <span class="discover-lk orange-color"><a href="#">View insights <i class="fa fa-angle-double-right"></i></a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--support-->
  <!--Impact-->
  <div class="nsbd_impact padding-lg">
    <div class="container">
      <div class="row heading heading-icon">
        <h2>See the impact Nice School has made on student learning!</h2>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
          <div class="cnt-block equal-hight">
            <figure>
              <img alt="Proven<br/>effective" src="resources/images/research-proves-effective.jpg">
            </figure>
            <h3><a href="">Proven effective</a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a class="nsbd_impact_btn" href="#">See the research</a>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
          <div class="cnt-block equal-hight">
            <figure>
              <img alt="valueable<br/>instructions" src="resources/images/valueable-for-instructions.jpg">

            </figure>
            <h3><a href="#">Flexible for any classroom</a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a class="nsbd_impact_btn" href="#">Hear their stories</a>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
          <div class="cnt-block equal-hight">
            <figure>
              <img alt="TeacherProven<br/>effective" src="resources/images/teachers-tell-why.jpg">
            </figure>
            <h3><a href="">Trusted by top teachers</a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a class="nsbd_impact_btn" href="#">Get inspired</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Impact-->
  <!--Newsletter-->
  <section class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="content">
            <form>
              <h2>Subscribe to our newsletter</h2>
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Enter your email">
                <span class="input-group-btn">
                  <button class="btn" type="submit">Subscribe Now</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Newsletter-->
  <!--Footer-->
  <footer class="page-footer font-small indigo mt-lg-3">
    <div class="footer-container container mt-4">
      <div class="col-sm-12 p-0">
        <div class="row">
          <div class="col-md-5 col-sm-12">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <h6 class="font-weight-bold text-uppercase mt-3 mb-4">What we offer</h6>
                <ul class="list-unstyled">
                  <li><a href="#!">For families</a></li>
                  <li><a href="#!">For classrooms</a></li>
                  <li><a href="#!">For schools & districts</a></li>
                  <li><a href="#!">Math</a></li>
                  <li><a href="#!">Language arts</a></li>
                  <li><a href="#!">Science</a></li>
                  <li><a href="#!">Social studies</a></li>
                  <li><a href="#!">Spanish</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Resources</h6>
                <ul class="list-unstyled">
                  <li><a href="#!">Help center</a></li>
                  <li><a href="#!">Tell us what you think</a></li>
                  <li><a href="#!">Blog</a></li>
                  <li><a href="#!">Testimonials</a></li>
                  <li><a href="#!">Case studies</a></li>
                  <li><a href="#!">Research</a></li>
                  <li><a href="#!">Nice School Live</a></li>
                  <li><a href="#!">Professional learning</a></li>
                  <li><a href="#!">Contact us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-12">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <h6 class="font-weight-bold text-uppercase mt-3 mb-4">About</h6>
                <ul class="list-unstyled">
                  <li><a href="#!">School information</a></li>
                  <li><a href="#!">Terms of service</a></li>
                  <li><a href="#!">Privacy policy</a></li>
                  <li><a href="#!">Press room</a></li>
                  <li><a href="#!">Careers</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <h6 class="font-weight-bold text-uppercase mt-3 mb-4">International</h6>
                <ul class="list-unstyled">
                  <li><a href="#!">Professional learning</a></li>
                  <li><a href="#!">Press room</a></li>
                  <li><a href="#!">Careers</a></li>
                  <li><a href="#!">Help center</a></li>
                  <li><a href="#!">Testimonials</a></li>
                  <li><a href="#!">Research</a></li>
                  <li><a href="#!">Awards</a></li>
                  <li><a href="#!">Standards</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="footer_icon" src="resources/images/onlineEducation_Landing1.png" />
                <p class="footer_join_now_text">
                  Nice School is personalized learning. With a comprehensive K-12 curriculum, individualized guidance,
                  and
                  real-time analytics, Nice School meets the unique needs of each learner.
                </p>
                <button type="button" class="btn btn_join_now">Join now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Social-->
    <div class="footer_social text-center">
      <ul>
        <li><a href="#"><img src="resources/images/facebook.png"></a></li>
        <li><a href="#"><img src="resources/images/twitter.png"></a></li>
        <li><a href="#"><img src="resources/images/youtube.png"></a></li>
        <li><a href="#"><img src="resources/images/linkedin.png"></a></li>
      </ul>
    </div>
    <!--Social-->
    <!--Copyright -->
    <div class="footer-copyright text-center py-3">
      <p class="m-0 text-center text-white"> &copy; 2019 niceschoolbd. All rights reserved. </p>
    </div>
    <!--Copyright -->
  </footer>
  <!-- Footer -->
  <script src="{{ asset('resources/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('resources/js/bootstrap.min.js')}}"></script>

  <script src="{{ asset('resources/js/slick.min.js')}}"></script>
  <script src="{{ asset('resources/js/slick-animation.min.js')}}"></script>
  <script src="{{ asset('resources/js/frontend.js')}}"></script>

</body>