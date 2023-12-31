@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div style="margin-top: 0px !important;" id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div id="home" class="first-section" style="background-image:url('{{ asset('assets/images/sliders/slider-02.jpg')}}');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right">
                                <div class="big-tagline">
                                    <h2><strong>Islamic </strong> Question Answer</h2>
                                    <p class="lead">With Landigoo responsive landing page template, you can promote
                                        your all hosting, domain and email services. </p>
                                    <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('{{ asset('assets/images/sliders/slider-02.jpg')}}');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-left">
                                <div class="big-tagline">
                                    <h2 data-animation="animated zoomInRight">Islamic <strong>Question Answer</strong></h2>
                                    <p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive
                                        landing page template, you can promote your all hosting, domain and email
                                        services. </p>
                                    <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('{{ asset('assets/images/sliders/slider-02.jpg')}}');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <h2 data-animation="animated zoomInRight"><strong>Islamic </strong> Question Answer</h2>
                                    <p class="lead" data-animation="animated fadeInLeft">1 IP included with each
                                        server
                                        Your Choice of any OS (CentOS, Windows, Debian, Fedora)
                                        FREE Reboots</p>
                                    <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>


        <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>About</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                    lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="message-box">
                    <h4>BEST Islamic Question Answers</h4>
                    <h2>Welcome to Islamic Question Answers</h2>
                    <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam
                        risus. Sed a tellus quis mi rhoncus dignissim.</p>

                    <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
                        bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis
                        montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="post-media wow fadeIn">
                    <img src="{{ asset('assets/images/qrcode.png') }}" alt="" class="img-fluid img-rounded">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section cl">
    <div class="container">
        <div class="row text-left stat-wrap">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
                <p class="stat_count">1200</p>
                <h3>Question User</h3>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
                <p class="stat_count">24000</p>
                <h3>Total Question</h3>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
                <p class="stat_count">20000</p>
                <h3>Total Answer</h3>
            </div>
        </div>
    </div>
</div>

<section class="section lb page-section">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>Our history</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                    lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
            </div>
        </div>
        <div class="timeline">
            <div class="timeline__wrap">
                <div class="timeline__items">
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-01">
                            <h2>2018</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                condimentum lacus dapibus. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-02">
                            <h2>2015</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                condimentum lacus dapibus. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-03">
                            <h2>2014</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                condimentum lacus dapibus. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-04">
                            <h2>2012</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                condimentum lacus dapibus. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-01">
                            <h2>2010</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                condimentum lacus dapibus. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-02">
                            <h2>2007</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                condimentum lacus dapibus. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-03">
                            <h2>2004</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                condimentum lacus dapibus. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-04">
                            <h2>2002</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                condimentum lacus dapibus. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('assets/images/parallax_04.jpg');">
    <div class="container">
        <div class="section-title text-center">
            <h3>Testimonials</h3>
            <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. </p>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="{{ asset('assets/images/testi_01.png') }}" alt="" class="img-fluid">
                            <h4>James Fernando </h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly
                                skilled, and experienced & professional team.</p>
                        </div>
                    </div>

                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="{{ asset('assets/images/testi_01.png') }}" alt="" class="img-fluid">
                            <h4>Jacques Philips </h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                praising pain was born and I will give you completed.</p>
                        </div>
                    </div>

                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="{{ asset('assets/images/testi_01.png') }}" alt="" class="img-fluid ">
                            <h4>Venanda Mercy </h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                            <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                    </div>

                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="{{ asset('assets/images/testi_01.png') }}" alt="" class="img-fluid">
                            <h4>James Fernando </h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly
                                skilled, and experienced & professional team.</p>
                        </div>
                    </div>

                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="{{ asset('assets/images/testi_01.png') }}" alt="" class="img-fluid">
                            <h4>Jacques Philips </h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                praising pain was born and I will give you completed.</p>
                        </div>
                    </div>

                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="{{ asset('assets/images/testi_01.png') }}" alt="" class="img-fluid">
                            <h4>Venanda Mercy </h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                            <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection