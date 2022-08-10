@extends('front.master.master')
@section('content')
    <div class="main-body">


        <section class="hero-agency d-flex align-items-center"
            data-bg='{{ asset('/') }}assets/front/img/agency-hero-shape.svg'>
            <div class="animate-elements">
                <img src="{{ asset('/') }}assets/front/img/icon/ydot.png" alt="" class="shape e1">
                <img src="{{ asset('/') }}assets/front/img/icon/pinkdot.png" alt="" class="shape e2">
                <img src="{{ asset('/') }}assets/front/img/icon/fgdot.png" alt="" class="shape e3">
            </div>
            <div class="container">
                <div class="row align-items-center text-center text-lg-left">
                    <div class="col-12 col-xl-6 col-lg-6 offset-lg-0 col-sm-10 offset-sm-1">
                        <div class="hero-agency-content">
                            {{-- <span>Digital Agency</span> --}}
                            <h1 class="fs-lg">{{ $content->slogan }}</h1>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 col-sm-10 offset-sm-1 col-lg-6 mt-5 mt-lg-0 offset-lg-0">
                        <div class="agency-banner">
                            <div class="animate-element">
                                <img src="{{ asset('/') }}assets/front/img/icon/video.png" class="e1 shape wow zoomIn"
                                    data-wow-delay="200ms" alt="">
                                <img src="{{ asset('/') }}assets/front/img/icon/stock.png" class="e2 shape wow zoomIn"
                                    data-wow-delay="500ms" alt="">
                                <img src="{{ asset('/') }}assets/front/img/icon/like.png" class="e3 shape wow zoomIn"
                                    data-wow-delay="800ms" alt="">
                                <img src="{{ asset('/') }}assets/front/img/icon/chat.png" class="e4 shape wow zoomIn"
                                    data-wow-delay="1s" alt="">
                            </div>
                            <img src="{{ asset('/') }}assets/front/img/digital-hero.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="agency-service-wrap section-padding pt-0" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12 text-center">
                        <div class="section-title two">
                            <span>Services</span>
                            <h1>Our Amazing Services</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="single-service-box-item box1">
                                <div class="icon">
                                    <img src="{{ asset('/') }}images/{{ $service->image }}" alt="">
                                </div>
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->detail }}</p>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <section class="progress-work-wrap section-padding pt-0">
            <div class="dew-line" data-bg='{{ asset('/') }}assets/front/img/dew-line.png'></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center col-12">
                        <div class="section-title two">
                            <span>Working Process</span>
                            <h1>How Does It Work</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 text-center">
                        <div class="single-progress-work progress1">
                            <div class="icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h4>listen</h4>
                            <p>When an unknown printer took a
                                Type and scrambled it to make.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 text-center">
                        <div class="single-progress-work progress2">
                            <div class="icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <h4>Plan & Budget</h4>
                            <p>When an unknown printer took a
                                Type and scrambled it to make.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 text-center">
                        <div class="single-progress-work progress3">
                            <div class="icon">
                                <i class="fas fa-cubes"></i>
                            </div>
                            <h4>Work and Revision</h4>
                            <p>When an unknown printer took a
                                Type and scrambled it to make.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 text-center">
                        <div class="single-progress-work progress4">
                            <div class="icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>Delivery & Feedback</h4>
                            <p>When an unknown printer took a
                                Type and scrambled it to make.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="agency-featured-wrap section-padding pt-0" id="feature">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="cross-featured-shots mml-200 pb-5 pb-lg-0" data-aos="fade-right"
                            data-aos-duration="1200">
                            <img src="{{ asset('/') }}assets/front/img/vision.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-12 offset-xl-1">
                        <div class="section-title two">
                            <span>about us</span>
                            <h1>{{ $content->about_title }}</h1>
                            <p>{{ $content->about }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="funfact-wrap section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12 text-center">
                        <div class="section-title two">
                            <span>Statistics</span>
                            <h1>We Completed 1500+ Projects Successfully & Counting</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="single-funfact sf1">
                            <span class="counter">1200</span>
                            <p>Global Customer</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="single-funfact sf2">
                            <span class="counter">1500</span>
                            <p>Complet Project</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="single-funfact sf3">
                            <span class="counter">450</span>
                            <p>Expert Worker</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="single-funfact sf3">
                            <span class="counter">30</span>
                            <p>Event Sponsored</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-area section-padding pt-0">
            <div class="container">
                <div class="row align-items-center text-center text-lg-left">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="section-title two">
                            <span>gallery</span>
                            <h1>Check Some of Our Recent Work</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-6 col-sm-12 col-xs-12">
                        <div class="gallery-menu">
                            <button data-filter="*">View Gallery</button>
                            <button data-filter=".ui">Ux/ui design</button>
                            <button data-filter=".brand">Brand Design</button>
                            <button data-filter=".web">Web Design</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row grid">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 grid-item brand web">
                        <div class="portfolio text-center">
                            <a href="{{ asset('/') }}assets/front/img/gallery/1.jpg" class="gallery-item">
                                <img class="img-fluid" src="{{ asset('/') }}assets/front/img/gallery/1.jpg"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 grid-item web ui">
                        <div class="portfolio text-center">
                            <a href="{{ asset('/') }}assets/front/img/gallery/2.jpg" class="gallery-item">
                                <img class="img-fluid" src="{{ asset('/') }}assets/front/img/gallery/2.jpg"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 grid-item brand web ui">
                        <div class="portfolio text-center">
                            <a href="{{ asset('/') }}assets/front/img/gallery/3.jpg" class="gallery-item">
                                <img class="img-fluid" src="{{ asset('/') }}assets/front/img/gallery/3.jpg"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 grid-item ui">
                        <div class="portfolio text-center">
                            <a href="{{ asset('/') }}assets/front/img/gallery/4.jpg" class="gallery-item">
                                <img class="img-fluid" src="{{ asset('/') }}assets/front/img/gallery/4.jpg"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-page-wrap section-padding">
            <div class="container">
                <div class="section-title two">
                    <span>Blogs</span>
                    <h1>Read Our Blogs</h1>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="blog-post-list row">
                            @foreach ($blogs as $item)
                                <div class="blog-item col-lg-6 col-md-12 post" data-aos='fade-up' data-aos-duration='700'
                                    data-aos-delay='100'>
                                    <div class="featured-thumb">
                                        <img src="images/{{ $item->image }}" alt="">
                                    </div>
                                    <div class="post-date">
                                        <div class="date">{{ $item->created_at }}</div>
                                    </div>

                                    <div class="post-content">
                                        <h3><a href="#">{{ $item->title }}</a></h3>
                                        <p>{{ $item->detail }}</p>
                                        <a href="{{ url('/view_blogs', $item->id) }}" class="read-btn">Read More <i
                                                class="far fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>



    </div>
@endsection
