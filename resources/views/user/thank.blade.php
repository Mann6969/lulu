@extends('user.index')
@section('content')
    {{-- <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Subscribe</h4>
                    <button id="closeBtn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="form3" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form3">Your name</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="form2" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form2">Your email</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-indigo">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
            data-target="#modalSubscriptionForm">Launch
            Modal Subscription Form</a>
    </div> --}}

    <div id="modalSubscriptionForm" class="modal fade">
        <div class="modal-dialog modal-newsletter">
            <div class="modal-content">
                <form action="{{ route('subscribe') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h4>Subscribe to our newsletter</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                            id="closeBtn"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Signup for our weekly newsletter to get the latest news, updates and amazing offers delivered
                            directly in your inbox.</p>
                        <div class="input-group">
                            <input name="email" type="email" class="form-control" placeholder="Enter your email"
                                required>
                            <div class="input-group-append">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg" style="padding: 310px 0;padding-top:290px">
        <div class="container">
            <div class="row">
                @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Contact with Us</p>
                        <h1>Thank You</h1>
                    </div>
                </div>
            </div>
            <div class="row">hello</div>
        </div>
    </div>
    <!-- end breadcrumb section -->
@endsection
