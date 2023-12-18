@section('title')



{{$title}}



@endsection



@extends('front.layout')



@section('content')

    <div class="hero">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-12 left">
                      <h2>It’s a big world out there,go explore</h2>
                      <p>Distinctio modi perspiciatis autem. Eos provident similique impedit iusto dolorem in. Nisi numquam modi quasi est ipsa quia non perspiciatis iste. </p> 
                      <button class="btn contact" type="submit" data-toggle="modal" data-target="#exampleModal">Book Now</button>
                      <div class="social-link">
                          <p class="mb-4">Connect with Us</p>
                          <div class="social-icon d-flex">
                            <a href="" class="mr-2 d-flex justify-content-center align-items-center"><i class="fa-brands fa-facebook mr-1"></i> <span>Facebook</span></a>
                            <a href="" class="d-flex justify-content-center align-items-center"><i class="fa-brands fa-whatsapp mr-1"></i> <span>Whatsapp</span></a>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 right d-flex">
                      <div class="first-column column">
                        <img src="{{asset('front/assets/images/hero image 1.png')}}" alt="" class="img-fluid img-1">
                        <img src="{{asset('front/assets/images/hero image 2.png')}}" alt="" class="img-fluid">
                      </div>
                      <div class="second-column column">
                        <img src="{{asset('front/assets/images/hero image 3.png')}}" alt="" class="img-fluid h-100">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>

    <main>

      <!-- about section start  -->

      <section class="about section" id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12 left">
              <div class="first-row my-row">
                <img src="{{asset('front/assets/images/about img 1.png')}}" alt="" class="img-fluid">
              </div>
              <div class="second-row my-row">
                <img src="{{asset('front/assets/images/about img 2.png')}}" alt="" class="img-fluid">
                <img src="{{asset('front/assets/images/about img 3.png')}}" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6 col-12 right">
              <h4>About us</h4>
              <h2>Explore the world with us</h2>
              <p>Distinctio modi perspiciatis autem. Eos provident similique impedit iusto dolorem in. Nisi numquam modi quasi est ipsa quia non perspiciatis iste. </p>
              <h5>Features are as follows : </h5>
              <div class="box">
                <p><img src="{{asset('front/assets/images/Forward Button.png')}}" alt=""><span>Natus ipsum eveniet.</span></p>
                <p>At perspiciatis pariatur illo fuga cum. Quam minus sit dolorum et. Exercitationem necessitatibus eius minus quam. Facere labore </p>
              </div>
              <div class="box">
                <p><img src="{{asset('front/assets/images/Forward Button.png')}}" alt=""><span>Natus ipsum eveniet.</span></p>
                <p>At perspiciatis pariatur illo fuga cum. Quam minus sit dolorum et. Exercitationem necessitatibus eius minus quam. Facere labore </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- about section end  -->

      <!-- packages section start  -->

        <section class="packages section" id="packages">
          <div class="container">
            <h4>PACKAGES</h4>
            <div class="tab-section d-flex justify-content-between">
              <div class="left">
                <p><span>Our Top Packages</span><a href="packages.html">EXPLORE ALL</a></p>
              </div>
              <div class="right d-flex">
                <div class="tab-button tab-button-1 active-btn" data-tab="tab1"><i class="fa-solid fa-car mr-1"></i>Domestic</div>
                <div class="tab-button tab-button-2" data-tab="tab2"><i class="fa-solid fa-plane-departure mr-1"></i>International</div>
              </div>
          </div>
          <div id="tab1" class="tab active-tab">
            <div class="owl-carousel tab-box owl-theme">
                @if($packages)
                    @foreach($packages as $pkgs)
                        @if($pkgs->ptype == 'Domestic')
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="{{asset('front/assets/images/hotel image.png')}}" alt="">
                    </div>
                    <div class="item">
                      <img src="{{asset('front/assets/images/hotel image.png')}}" alt="">
                    </div>
                    <div class="item">
                      <img src="{{asset('front/assets/images/hotel image.png')}}" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <h5>Kerala1</h5>
                  <p class="para-time"><img src="{{asset('front/assets/images/Open Parcel.png')}}" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
        @endif


              
              
              
          </div>
          <p class="para-packages">Packages</p>
          <hr class="line">
          </div>
          <div id="tab2" class="tab">
            <div class="owl-carousel tab-box owl-theme">
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <h5>America1</h5>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <h5>America2</h5>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <h5>America3</h5>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <h5>America4</h5>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <h5>America5</h5>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
          </div>
          <p class="para-packages">Packages</p>
          <hr class="line">
          </div>
          </div>
        </section>
        <!-- packages section end  -->

        <!-- hotel section start  -->
        <section class="hotels packages section" id="hotels">
          <div class="container">
            <h4>HOTELS</h4>
            <div class="tab-section d-flex justify-content-between">
              <div class="left">
                <p><span>Our Top Packages</span><a href="hotels.html">EXPLORE ALL</a></p>
              </div>
          </div>
          <div class="tab active-tab active-1">
            <div class="owl-carousel tab-box owl-theme">
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <div class="hotel-title d-flex justify-content-between align-items-center">
                    <h5>Hotel Name</h5>
                    <h6>📍Delhi</h6>
                  </div>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <div class="hotel-title d-flex justify-content-between align-items-center">
                    <h5>Kerala1</h5>
                    <h6>📍Delhi</h6>
                  </div>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <div class="hotel-title d-flex justify-content-between align-items-center">
                    <h5>Kerala1</h5>
                    <h6>📍Delhi</h6>
                  </div>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <div class="hotel-title d-flex justify-content-between align-items-center">
                    <h5>Kerala1</h5>
                    <h6>📍Delhi</h6>
                  </div>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
              <div class="item tab-box-item">
                <div class="tab-box-img-slider">
                  <div class="owl-carousel img-slider owl-theme">
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                    <div class="item">
                      <img src="./images/package-tab-image.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-box-details">
                  <div class="hotel-title d-flex justify-content-between align-items-center">
                    <h5>Kerala1</h5>
                    <h6>📍Delhi</h6>
                  </div>
                  <p class="para-time"><img src="./images/Open Parcel.png" alt="" class="small-img"><span>2 day 3 nights</span><img src="./images/Car1.png" alt="" class="small-img"><span>Travel arrangeme</span></p>
                  <div class="money d-flex justify-content-between align-items-center">
                    <p>&#x20b9; 10,000</p>
                    <button class="btn contact" type="submit" data-toggle="modal" data-target="#book-now">Book Now</button>
                  </div>
                </div>
              </div>
          </div>
          <p class="para-packages">Hotels</p>
          <hr class="line line-2">
          </div>
          </div>
        </section>

        <!-- hotel section end  -->

        <!-- service section start  -->

        <section class="services section" id="services">
          <div class="container">
            <h4>SERVICES</h4>
            <h2>Services we offer ?</h2>
            <p class="para">Distinctio modi perspiciatis autem. Eos provident similique impedit iusto dolorem in. Nisi numquam modi quasi est ipsa quia non perspiciatis iste. </p>
            <div class="row">
              <div class="col-lg-4 col-12">
                <div class="box">
                  <div class="img-box d-flex">
                    <div class="img">
                      <img src="{{asset('front/assets/images/service image 1.png')}}" alt="">
                    </div>
                    <div class="text">
                      <h5><span>International</span> travels</h5>
                      <p>We provide the following :</p>
                    </div>
                  </div>
                  <p class="para-1">🚕 Travel arrangement. <br> 
                    ✈️ Flight tickets , passport and visa. <br>
                    🛌 Hotel stays.</p>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <div class="box">
                  <div class="img-box d-flex">
                    <div class="img">
                      <img src="{{asset('front/assets/images/service image 2.png')}}" alt="">
                    </div>
                    <div class="text">
                      <h5><span>Domestic</span> travels</h5>
                      <p>We provide the following :</p>
                    </div>
                  </div>
                  <p class="para-1">🚕 Travel arrangement. <br> 
                    ✈️ Flight tickets , passport and visa. <br>
                    🛌 Hotel stays.</p>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <div class="box">
                  <div class="img-box d-flex">
                    <div class="img">
                      <img src="{{asset('front/assets/images/service image 3.png')}}" alt="">
                    </div>
                    <div class="text">
                      <h5><span>Solo</span> travels</h5>
                      <p>We provide the following :</p>
                    </div>
                  </div>
                  <p class="para-1">🚕 Travel arrangement. <br> 
                    ✈️ Flight tickets , passport and visa. <br>
                    🛌 Hotel stays.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- service section end -->
    </main>



@endsection