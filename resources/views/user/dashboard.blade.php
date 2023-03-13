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
                    </div>
                </div>
            </div>
            {{-- iske niche --}}
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('listing') }}">
                        <div class="single-team-item">
                            <div class="team-bg"
                                style="background-image: url({{ asset('files/profile_img/' . $values[0]->img) }});">
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="details_16">
                                        <ul>
                                            <li>Caste</li>
                                            <li>Religion</li>
                                            <li>City</li>
                                            <li>State</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="details_16">
                                        <ul>
                                            <li>: {{ $values[0]->caste }}</li>
                                            <li>: {{ $values[0]->religion }}</li>
                                            <li>: {{ $values[0]->city }}</li>
                                            <li>: {{ $values[0]->state }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('listing') }}">
                        <div class="single-team-item">
                            <div class="team-bg"
                                style="background-image: url({{ asset('files/profile_img/' . $values[1]->img) }});">
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="details_16">
                                        <ul>
                                            <li>Caste</li>
                                            <li>Religion</li>
                                            <li>City</li>
                                            <li>State</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="details_16">
                                        <ul>
                                            <li>: {{ $values[1]->caste }}</li>
                                            <li>: {{ $values[1]->religion }}</li>
                                            <li>: {{ $values[1]->city }}</li>
                                            <li>: {{ $values[1]->state }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <a href="{{ route('listing') }}">
                        <div class="single-team-item">
                            <div class="team-bg"
                                style="background-image: url({{ asset('files/profile_img/' . $values[2]->img) }});">
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="details_16">
                                        <ul>
                                            <li>Caste</li>
                                            <li>Religion</li>
                                            <li>City</li>
                                            <li>State</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="details_16">
                                        <ul>
                                            <li>: {{ $values[2]->caste }}</li>
                                            <li>: {{ $values[2]->religion }}</li>
                                            <li>: {{ $values[2]->city }}</li>
                                            <li>: {{ $values[2]->state }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

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
                        <a href="{{ route('blog') }}" class="boxed-btn">More News</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end latest news -->
    </div>
@endsection

{{-- @section('head')
    <link rel="stylesheet" href="{{ asset('carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carousel/https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carousel/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('carousel/css/style.css') }}">
@endsection --}}

{{-- @section('script')
    <script src="{{ asset('carousel/js/jquery.min.js') }}"></script>
    <script src="{{ asset('carousel/js/popper.js') }}"></script>
    <script src="{{ asset('carousel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('carousel/js/main.js') }}"></script>
@endsection --}}
