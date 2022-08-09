@extends('front.master.master')
@section('content')
    <div class="main-body">


        <section class="page-banner-wrap bg-cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12 text-center text-white">
                        <h1 class="fs-lg">Blog Grid</h1>
                        <p>Keensaas is the best software platform for running an internet</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-page-wrap section-padding">
            <div class="container">
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
                        <div class="page-navigtion">
                            <ul>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next <i class="fal fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
