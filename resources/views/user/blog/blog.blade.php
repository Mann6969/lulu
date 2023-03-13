@extends('user.index')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg"
        style="padding: 110px 0;padding-top:290px;background-image:url({{ asset('user/img/gallery-6.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        {{-- <p>Contact with Us</p> --}}
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <!-- latest news -->
    <div class="latest-news mt-150 mb-150">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <!-- <input type="hidden" name="id" value="{{$blog->id}}"> -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('singleBlog', $blog->slug) }}">
                            <div class="latest-news-bg" ><img src="files/blogs/{{$blog->image}}" height="200px" width="600px">
</div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('singleBlog', $blog->slug) }}">{{ $blog->blog_title }}</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> {{$user->name}}</span>
                                <span class="date"><i class="fas fa-calendar"></i>{{ date('Y-m-d',strtotime($blog->created_at)) }} </span>
                            </p>
                            <p class="excerpt">{{ $blog->meta_description }}</p>
                            <a href="{{ route('singleBlog', $blog->slug) }}" class="read-more-btn">Read more 
                                <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('singleBlog') }}">
                            <div class="latest-news-bg news-bg-2"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('singleBlog') }}">A man's worth has its season, like tomato.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('singleBlog') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('singleBlog') }}">
                            <div class="latest-news-bg news-bg-3"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('singleBlog') }}">Good thoughts bear good fresh juicy fruit.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('singleBlog') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('singleBlog') }}">
                            <div class="latest-news-bg news-bg-4"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('singleBlog') }}">Fall in love with the fresh orange</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('singleBlog') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('singleBlog') }}">
                            <div class="latest-news-bg news-bg-5"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('singleBlog') }}">Why the berries always look delecious</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('singleBlog') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('singleBlog') }}">
                            <div class="latest-news-bg news-bg-6"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('singleBlog') }}">Love for fruits are genuine of John Doe</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2018</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('singleBlog') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="pagination-wrap">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a class="active" href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->
@endsection
