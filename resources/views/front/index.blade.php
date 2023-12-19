@section('title')

{{$title}}

@endsection

@extends('front.layout')

@section('content')

<main>
    <!-- hero section start  -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                <h1>Learn in-demand skills.</h1>
                <h3>with <span>audio books</span></h3>
                <p>The most efficient and supportive way for you to learn in-demand skills, get hired, and advance your career.</p>
                <div class="hero-button d-flex justify-content-center align-items-center gap-3">
                    <a href="" class="btn btn-success">See All Course</a>
                    <a href="" class="btn btn-outline-success">How To Study</a>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end  -->
    <!-- about section start  -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="about-img">
                        <img src="{{asset('front/assets/image/Rectangle 31.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-12">
                    <h2>About Us</h2>
                    <p>Necessitatibus laborum iusto. Deleniti velit nisi ex magni. Neque occaecati mollitia. Ad repudiandae nulla. Aut nesciunt aperiam harum. Tempora dignissimos placeat quod explicabo atque. <br>
                      Hic accusantium voluptatibus ad. Odit aspernatur ipsa. Voluptas nulla quos cumque repudiandae cum labore ea inventore. <br>
                      Atque dolorem reprehenderit. Velit fugit facilis. Sapiente quia illum voluptatum dolorum nesciunt impedit nulla beatae inventore. Atque nobis aspernatur fugiat aliquam voluptate laudantium nesciunt accusantium corporis. Velit amet eius voluptatum amet eum ipsa. Quaerat explicabo sapiente minima fugit accusamus amet in sed rem.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->
    <!-- course section start  -->
    <section class="course" id="course">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Courses</h2>
                    <hr>
                </div>
            </div>
            <div class="row card-section">
                @isset($courses)
                @foreach($courses as $c)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-2">
                    <div class="card">
                        <img src="{{asset('front/assets/image/image 1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$c->title}}</h5>
                          <p class="card-text">{{$c->short_info}}</p>
                          <div class="course-button d-flex justify-content-between align-items-center">
                            <a href="{{url('course/'.$c->slug)}}" class="btn btn-success">Start Learning</a>
                            <a href="#" class="btn btn-outline-success">{{count_lesson_in_course($c->id)}} modules</a>
                          </div>
                        </div>
                      </div>
                </div>
                @endforeach
                @endisset
                
                
                
            </div>
        </div>
    </section>
    <!-- course section end -->
    <!-- contact section start  -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 col-12 d-flex flex-column justify-content-between">
                    <div class="top-content">
                        <h4>Contact</h4>
                        <h1>Get In Touch</h1>
                        <p>Lorem ipsum dolor sit amet consectetur. Consectetur in curabitur consectetur quis diam ut tortor. Arcu sagittis adipiscing non aliquam donec id nibh diam.</p>
                    </div>
                    <div class="bottom-content d-flex gap-2">
                        <div class="card flex-row justify-content-center align-items-center w-100">
                            <div class="phone-icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="card-body">
                              <h5>Call Us</h5>
                              <p class="card-text">+91 874284872573</p>
                            </div>
                          </div>
                        <div class="card flex-row justify-content-center align-items-center w-100">
                            <div class="phone-icon">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div class="card-body">
                              <h5>Whatsapp</h5>
                              <p class="card-text">+91 874284872573</p>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 form">
                    <form method="post" action="{{url('contact-us')}}">
                        <div class="mb-3">
                          <input type="text" class="form-control" required name="name" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" required name="email" aria-describedby="emailHelp" placeholder="Email">
                          </div>
                        <div class="mb-3">
                            <textarea class="form-control" required name="message" id="" rows="5" placeholder="Type Your Message Here..."></textarea>
                          </div>@csrf
                          <div class="button d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->
</main>

@endsection