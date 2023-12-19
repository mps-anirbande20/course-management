<!doctype html>
<html lang="en">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- link css  -->
	<link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}">
	@if(Request::segment(1)=='course')
	<link rel="stylesheet" href="{{asset('front/assets/css/course.css')}}">
	@endif
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<title>MyMerc Academy</title>
  </head>
  <body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
			  <a class="navbar-brand" href="{{url('/')}}">
				<img src="{{asset('front/assets/image/MyMerc Logo1 1.png')}}" alt="" class="img-fluid">
			  </a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				  <li class="nav-item">
					<a class="nav-link" href="#course">Courses</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#contact">Contact Us</a>
				  </li>
				</ul>
				<form class="d-flex">
				  <button type="button" class="btn register" data-bs-toggle="modal" data-bs-target="#exampleModal1">Register</button>
				  <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Log In</button>
				</form>
			  </div>
			</div>
		  </nav>
	</header>

	@yield('content')

	<!-- footer section start  -->
	<footer class="footer">
		<div class="container">
			<div class="row gy-3">
				<div class="col-lg-6">
					<a class="d-flex justify-content-start align-items-center" href="#">
						<img src="{{asset('front/assets/image/MyMerc Logo1 1.png')}}" alt="">
					  </a>
					  <p class="para">Lorem ipsum dolor sit amet consectetur. Consectetur in curabitur consectetur quis diam ut tortor. Arcu sagittis adipiscing non aliquam donec id nibh diam.</p>
				</div>
				<div class="col-lg-3 col-12">
					<h2 class="head">Quick Links</h2>
					<div class="links d-flex flex-column">
						<a href="">About Us</a>
						<a href="">Services</a>
						<a href="">Privacy Policy</a>
						<a href="">Terms & Condition</a>
						<a href="">Contact</a>
					</div>
				</div>
				<div class="col-lg-3 col-12">
					<h2 class="head">Contact Us</h2>
					<div class="d-flex justify-content-start align-items-center contact-us">
						<div class="location-icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="card-body">
						  <p>+340 Buckridge Green,Apt<br>:051,St.Charles</p>
						</div>
					  </div>
					<div class="d-flex justify-content-start align-items-center">
						<div class="location-icon">
							<i class="fa-solid fa-phone-volume"></i>
						</div>
						<div class="card-body">
						  <p>+919874204044 <br>+919874042067</p>
						</div>
					  </div>
					<div class="d-flex justify-content-start align-items-center">
						<div class="location-icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="card-body">
						  <p>example@gmil.com</p>
						</div>
					  </div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright">
		<p>Copyright 2023 Company Name.All right reserved.</p>
	</div>

	<!-- Modal 1-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body px-4">
		<div class="img text-center mb-4">
		  <img src="{{asset('front/assets/image/MyMerc Logo1 1.png')}}" alt="">
		</div>
		<form method="post" action="{{url('csignup')}}">
		  <div class="mb-3">
			<input type="text" class="form-control" required name="name" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Full Name">
		  </div>
		  <div class="mb-3">
			  <input type="email" class="form-control" required name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
			</div>
			<div class="mb-3">
			  <input type="password" class="form-control" required name="password" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="mb-3">
			  <input type="password" class="form-control" required name="cpassword" id="exampleInputPassword1" placeholder="Confirm Password">
			</div>
			<div class="modal-text">
			  <span>Already Registered ?</span>
			  <a href="" >Login Now</a>
			</div>
			<input type="hidden" name="curl" value="{{Request::url()}}">
			<div class="button d-flex align-items-stretch mt-2">
			  <button type="submit" class="btn btn-success w-100">Register</button>
			</div>
		</form>
		
	  </div>
	</div>
  </div>
</div>
	<!-- Modal 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body px-4">
		<div class="img text-center mb-4">
		  <img src="{{asset('front/assets/image/MyMerc Logo1 1.png')}}" alt="">
		</div>
		<form method="post" action="{{url('clogin')}}">
		  <div class="mb-3">@csrf
			  <input type="email" class="form-control" required name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
			</div>
			<div class="mb-3">
			  <input type="password" class="form-control" required name="password" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="modal-text">
			  <span>New Here ?</span>
			  <a href="" >Register Now</a>
			</div>
			<div class="button d-flex align-items-stretch mt-2">
			  <button type="submit" class="btn btn-success w-100">Log In</button>
			</div>
		</form>
		
	  </div>
	</div>
  </div>
</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- font awesome icon cdn  -->
	<script src="https://kit.fontawesome.com/5cac7ad27a.js" crossorigin="anonymous"></script>
	<script src="{{asset('front/assets/js/app.js')}}"></script>
  </body>
</html>