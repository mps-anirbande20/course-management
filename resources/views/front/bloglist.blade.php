@section('title')



{{$title}}



@endsection



@extends('front.layout')



@section('content')



<section class="listghor_breadcrumb listghor_breadcrumb_1">

	<svg id="shape_1" width="272px" height="272px">

		<path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M136.000,-0.000 C211.111,-0.000 272.000,60.889 272.000,136.000 C272.000,211.111 211.111,272.000 136.000,272.000 C60.889,272.000 -0.000,211.111 -0.000,136.000 C-0.000,60.889 60.889,-0.000 136.000,-0.000 Z"/>

	</svg>

	<svg id="shape_2" width="272px" height="272px">

		<path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M136.000,-0.000 C211.111,-0.000 272.000,60.889 272.000,136.000 C272.000,211.111 211.111,272.000 136.000,272.000 C60.889,272.000 -0.000,211.111 -0.000,136.000 C-0.000,60.889 60.889,-0.000 136.000,-0.000 Z"/>

	</svg>

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-12">

				<div class="breadcrumb_content text-center">

					<h2>Blog</h2>

					<ul class="breadcrumb_link">

						<li><a href="{{url('/')}}">Home</a></li>

						<li><a href="{{url('/blog')}}">Blog</a></li>

					</ul>

				</div>

			</div>

		</div>

	</div>

</section>

<section class="listghor_blog_v4 section_padding wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

	<div class="container">

		<div class="row">

			@if($records)

			@foreach($records as $rec)

			<div class="col-lg-4 col-md-6 col-sm-12">

				<div class="blog_box">

					<div class="listghor_img">

						<a href="{{url('blog/'.$rec->slug)}}"><img src="{{asset('uploads/'.$rec->thumb)}}" class="img-fluid" alt=""></a>

					</div>

					<div class="blog_info">

						<div class="post_meta">

							<a href="#" class="admin"><i class="fas fa-user-alt"></i>French Contract</a>

							<a href="#" class="date"><i class="fas fa-calendar-alt"></i>{{date('d M, Y',strtotime($rec->created_at))}}</a>

							<a href="#" class="comment"><i class="fas fa-comment-alt"></i>5</a>

						</div>

						<div class="post_text">

							<h2><a href="{{url('blog/'.$rec->slug)}}">{{$rec->title_en}}</a></h2>

							<p>{{$rec->info_en}}</p>

							<a href="{{url('blog/'.$rec->slug)}}" class="listghor_link">Read more</a>

						</div>

					</div>

				</div>

			</div>

			@endforeach

			@endif

		</div>

		<!--div class="row">

			<div class="col-lg-12">

				<div class="listghor_pagination text-center">

					<ul>

						<li class="prev"><a href="#"><i class="fas fa-arrow-left"></i></a></li>

						<li><a href="#">1</a></li>

						<li><a href="#">2</a></li>

						<li><a href="#">3</a></li>

						<li class="next"><a href="#"><i class="fas fa-arrow-right"></i></a></li>

					</ul>

				</div>

			</div>

		</div-->

	</div>

</section>

@endsection