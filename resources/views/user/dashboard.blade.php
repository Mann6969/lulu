@extends('user.index')
@section('content')
    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <label for="">
                                <h1>Upload Your File Here</h1>
                                <h6 style="color: white">Upload in pdf or jpg format only.</h6>
                            </label>
                            <div>
                                @if (session('message'))
                                    <div class="alert alert-danger">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                                    @csrf
                                    {{-- <div> --}}
                                    <div class="input-group mb-3">
                                        <input name="file[]" type="file" class="form-control" id="inputGroupFile02"
                                            multiple>
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->
    <!-- profile -->
    <div class="latest-news pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Profiles</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="single-latest-news">
                                <a href="single-news.html">
                                    <div class="latest-news-bg news-bg-1"></div>
                                </a>
                                <div class="news-text-box">
                                    <h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
                                    <p class="blog-meta">
                                        <span class="author"><i class="fas fa-user"></i> Admin</span>
                                        <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                                    </p>
                                    <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                        Praesent vitae mattis nunc, egestas viverra eros.</p>
                                    <a href="single-news.html" class="read-more-btn">read more <i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="single-latest-news">
                                <a href="single-news.html">
                                    <div class="latest-news-bg news-bg-2"></div>
                                </a>
                                <div class="news-text-box">
                                    <h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
                                    <p class="blog-meta">
                                        <span class="author"><i class="fas fa-user"></i> Admin</span>
                                        <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                                    </p>
                                    <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                        Praesent vitae mattis nunc, egestas viverra eros.</p>
                                    <a href="single-news.html" class="read-more-btn">read more <i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="single-latest-news">
                                <a href="single-news.html">
                                    <div class="latest-news-bg news-bg-3"></div>
                                </a>
                                <div class="news-text-box">
                                    <h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>
                                    <p class="blog-meta">
                                        <span class="author"><i class="fas fa-user"></i> Admin</span>
                                        <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                                    </p>
                                    <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                        Praesent vitae mattis nunc, egestas viverra eros.</p>
                                    <a href="single-news.html" class="read-more-btn">read more <i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="{{ route('listing') }}" class="boxed-btn">More Profiles</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile -->
        {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> --}}
        <!-- testimonail-section -->
        <div class="testimonail-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="testimonial-sliders">
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('user/assets/img/avaters/avatar1.png') }}" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Saira Hakim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                        beatae
                                        vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('user/assets/img/avaters/avatar2.png') }}" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>David Niph <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                        beatae
                                        vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('user/assets/img/avaters/avatar3.png') }}" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                        beatae
                                        vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end testimonail-section -->
        <!-- latest news -->
        <div class="latest-news pt-150 pb-150">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h3><span class="orange-text">Our</span> News</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                                beatae optio.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news.html">
                                <div class="latest-news-bg news-bg-1"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Admin</span>
                                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                                </p>
                                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                    Praesent vitae mattis nunc, egestas viverra eros.</p>
                                <a href="single-news.html" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news.html">
                                <div class="latest-news-bg news-bg-2"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Admin</span>
                                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                                </p>
                                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                    Praesent vitae mattis nunc, egestas viverra eros.</p>
                                <a href="single-news.html" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-latest-news">
                            <a href="single-news.html">
                                <div class="latest-news-bg news-bg-3"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Admin</span>
                                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                                </p>
                                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                    Praesent vitae mattis nunc, egestas viverra eros.</p>
                                <a href="single-news.html" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="news.html" class="boxed-btn">More News</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end latest news -->
    @endsection
