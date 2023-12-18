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

					<h2>{{$title}}</h2>

					<ul class="breadcrumb_link">

						<li><a href="{{url('/')}}">Home</a></li>

						<li><a href="{{url('/blog')}}">Blog</a></li>

						<li><a href="#">{{$title}}</a></li>

					</ul>

				</div>

			</div>

		</div>

	</div>

</section>

<section class="listghor_single_blog section_padding wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

	<div class="container">

		<div class="row">

			<div class="col-lg-8">

				<div class="single_blog_wrapper">

					<div class="blog_box">

						<div class="listghor_img">

							<img src="{{asset('uploads/'.$data->image)}}" class="img-fluid" alt="">

						</div>

						<div class="blog_info">

							<div class="post_meta">

								<a href="#" class="meta_link"><i class="fas fa-user"></i>By French Contract</a>

								<a href="#" class="meta_link"><i class="fas fa-calendar-alt"></i>{{date('d M Y',strtotime($data->created_at))}}</a>

								<a href="#" class="meta_link"><i class="fas fa-comment-alt"></i>{{count($comments)}}</a>

							</div>

						</div>

					</div>

					<div class="single_blog_content">

						<h2>{{$data->title_en}}</h2>

						{!!$data->detail_en!!}

						<!--blockquote class="listghor_blockquote">

							<p>Horse play a blinding shot the little rotter nice one umm I'm telling bits and bobs grub boot that bevvy, cockup matie boy mush Jeffrey.!</p>

							<h6>Druid Wensleydale <span><i class="fas fa-quote-right"></i></span></h6>

						</blockquote>

						<div class="single_content">

							<div class="row">

								<div class="col-lg-6 col-md-6 col-sm-12">

									<div class="listghor_img">

										<img src="assets/images/single_blog_2.jpg" class="img-fluid" alt="">

									</div>

								</div>

								<div class="col-lg-6 col-md-6 col-sm-12">

									<div class="listghor_img">

										<img src="assets/images/single_blog_3.jpg" class="img-fluid" alt="">

									</div>

								</div>

							</div>

						</div>

						<p>Showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed kepping not sure over the horizon.</p-->

					</div>

					<div class="share_post">

						<div class="row">

							<div class="col-lg-5">

								<div class="share_text">

									<p><a href="#"><i class="fas fa-share-square"></i></a>Share this article</p>

								</div>

							</div>

							<div class="col-lg-7">

								<div class="share_link">

									<ul class="social_link_2">

										<li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>

										<li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>

										<li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>

										<li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>

									</ul>

								</div>

							</div>

						</div>

					</div>

					<!--div class="admin_blog">

						<div class="admin_img">

							<img src="assets/images/admin_2.jpg" alt="">

						</div>

						<div class="admin_info">

							<h5>Jennifer Lee</h5>

							<p>Ut enim ad minima veniam, quis nostrum exerci tationem ullam corporis suscipit laboriosam, nisi ut aliquid ex.</p>

							<ul class="social_link_2">

								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

								<li><a href="#"><i class="fab fa-twitter"></i></a></li>

								<li><a href="#"><i class="fab fa-instagram"></i></a></li>

								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

							</ul>

						</div>

					</div-->

					<div class="comment_area">

						<div class="ct_title">

							<h4>{{count($comments)}} Comments</h4>

						</div>

						@if($comments)

							@foreach($comments as $rec)

						<div class="single_comment">

							<!--div class="comment_thumb">

								<img src="assets/images/comment_1.jpg" alt="">

							</div-->

							<div class="comment_info">

								<h5><a href="#">{{$rec->name}}</a></h5>

								<h6>{{date('d M, Y',strtotime($rec->created_at))}}</h6>

								<p>{{$rec->message}}</p>

								<!--a href="#" class="reply">reply</a-->

							</div>

						</div>

						@endforeach

						@endif

					</div>

					@if(session()->get('completed'))

                            <div class="alert alert-success">

                                {{ session()->get('completed') }}  

                            </div><br />

                        @endif

					<div class="comment_form">

						<div class="ct_title">

							<h4>POST COMMENTS</h4>

						</div>

						<form method="post">

							<div class="row">

								<div class="col-lg-6">

									<div class="form_group">

										<input type="text" class="form_control" placeholder="Name" required name="name">

									</div>

								</div>

								<div class="col-lg-6">

									<div class="form_group">

										<input type="email" class="form_control" placeholder="Email" required name="email">

									</div>

								</div>

								<div class="col-lg-12">

									<div class="form_group">

										<textarea class="form_control" placeholder="Write your comment" required name="message"></textarea>

									</div>

								</div>@csrf

								<div class="col-lg-12">

									<div class="form_button">

										<button class="listghor_btn form_btn" type="submit">post comment</button>

									</div>

								</div>

							</div>		

						</form>

					</div>

				</div>

			</div>

			<div class="col-lg-4">

				<div class="listghor_sidebar blog_sidebar">

					<!--div class="widget_box search_box">

						<form>

							<div class="form_group">

								<input type="search" class="form_control" placeholder="Search">

								<i class="fas fa-search"></i>

							</div>

						</form>

					</div-->

					<div class="widget_box categories_box">

						<div class="wb_title">

							<h5>Categories</h5>

						</div>

						<ul class="wb_link">

							@if($categories)

							@foreach($categories as $rec)

							<li><a href="{{url('/blog-category/'.$rec->slug)}}">{{$rec->title_en}} <span>({{count_blog_in_cat($rec->id)}})</span></a></li>

							@endforeach

							@endif

						</ul>

					</div>

					<div class="widget_box news_box">

						<div class="wb_title">

							<h5>Latest Blogs</h5>

						</div>

						<div class="wb_news_list">

							@if($latest)

							@foreach($latest as $rec)

							<div class="single_wb_news">

								<div class="news_thumb">

									<img src="{{asset('uploads/'.$rec->thumb)}}" alt="" style="width: 70px;height: 70px;">

								</div>

								<div class="news_info">

									<h2><a href="{{url('blog/'.$rec->slug)}}">{{$rec->title_en}}</a></h2>

									<p>{{date('d M, Y',strtotime($rec->created_at))}}</p>

								</div>

							</div>

							@endforeach

							@endif							

						</div>

					</div>

					<!--div class="widget_box tags_box">

						<div class="wb_title">

							<h5>Sort By Tags</h5>

						</div>

						<ul class="wb_link">

							<li><a href="#">design</a></li>

							<li><a href="#">apps</a></li>

							<li><a href="#">hotel</a></li>

							<li><a href="#">restaurant</a></li>

							<li><a href="#">UI/UX design</a></li>

							<li><a href="#">amazing place</a></li>

						</ul>

					</div-->

				</div>

			</div>

		</div>

	</div>

</section>

@endsection
