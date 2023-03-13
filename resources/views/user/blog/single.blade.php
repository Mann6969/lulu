@extends('user.index')
@section('content')
    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search arewa -->
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg"
        style="padding: 110px 0;padding-top:290px;background-image:url({{ asset('user/img/gallery-6.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        {{-- <p>Contact with Us</p> --}}
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <!-- single article section -->
    <div class="mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-article-section">
                        <div class="single-article-text">
                            <div> <img src="../files/blogs/{{$data->image}}" height="400px" width="800px"> </div>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> {{$user->name}}</span>
                                <span class="date"><i class="fas fa-calendar"></i>{{date('Y-m-d',strtotime($data->created_at))}}</span>
                            </p>
                            <h2>{{$data->blog_title}}</h2>
                            
                            {{!! $data->body !!}}

                        </div>

                        {{-- <div class="comments-list-wrap">
                            <h3 class="comment-count-title">Comments</h3>
                            <div class="comment-list">
                                <div class="single-comment-body">
                                    <div class="comment-user-avater">
                                        <img src="assets/img/avaters/avatar1.png" alt="">
                                    </div>
                                    <div class="comment-text-body">
                                        <h4>Jenny Joe <span class="comment-date">Aprl 26, 2020</span> <a
                                                href="#">reply</a></h4>
                                        <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna,
                                            maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros
                                            porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor,
                                            in interdum ante faucibus.</p>
                                    </div>
                                    <div class="single-comment-body child">
                                        <div class="comment-user-avater">
                                            <img src="assets/img/avaters/avatar3.png" alt="">
                                        </div>
                                        <div class="comment-text-body">
                                            <h4>Simon Soe <span class="comment-date">Aprl 27, 2020</span> <a
                                                    href="#">reply</a></h4>
                                            <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna,
                                                maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros
                                                porttitor, in interdum ante faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-comment-body">
                                    <div class="comment-user-avater">
                                        <img src="assets/img/avaters/avatar2.png" alt="">
                                    </div>
                                    <div class="comment-text-body">
                                        <h4>Addy Aoe <span class="comment-date">May 12, 2020</span> <a
                                                href="#">reply</a></h4>
                                        <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna,
                                            maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros
                                            porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor,
                                            in interdum ante faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="comment-template">
                            <h4>Leave a comment</h4>
                            <p>If you have a comment dont feel hesitate to send us your opinion.</p>
                            <form action="index">
                                <p>
                                    <input type="text" placeholder="Your Name">
                                    <input type="email" placeholder="Your Email">
                                </p>
                                <p>
                                    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Your Message"></textarea>
                                </p>
                                <p><input type="submit" value="Submit"></p>
                            </form>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-section">
                        <div class="recent-posts">
                            <h4>Recent Posts</h4>
                            <ul>
                                @foreach($posts as $blog)
                                <li><a href="{{ route('singleBlog',$blog->slug) }}">{{$blog->meta_key}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="archive-posts">
                            <h4>Archive Posts</h4>
                            <ul>
                                <li><a href="{{ route('singleBlog') }}">JAN 2019 (5)</a></li>
                                <li><a href="{{ route('singleBlog') }}">FEB 2019 (3)</a></li>
                                <li><a href="{{ route('singleBlog') }}">MAY 2019 (4)</a></li>
                                <li><a href="{{ route('singleBlog') }}">SEP 2019 (4)</a></li>
                                <li><a href="{{ route('singleBlog') }}">DEC 2019 (3)</a></li>
                            </ul>
                        </div>
                        <div class="tag-section">
                            <h4>Tags</h4>
                            <ul>
                                <li><a href="{{ route('singleBlog') }}">Apple</a></li>
                                <li><a href="{{ route('singleBlog') }}">Strawberry</a></li>
                                <li><a href="{{ route('singleBlog') }}">BErry</a></li>
                                <li><a href="{{ route('singleBlog') }}">Orange</a></li>
                                <li><a href="{{ route('singleBlog') }}">Lemon</a></li>
                                <li><a href="{{ route('singleBlog') }}">Banana</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single article section -->
@endsection
