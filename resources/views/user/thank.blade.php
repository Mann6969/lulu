@extends('user.index')
@section('content')
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


@section('script')
    <script>
        $(document).ready(function() {
            $("#modalSubscriptionForm").modal('show');
        });
    </script>
    <script>
        $('#closeBtn').click(function() {
            var APP_URL = {!! json_encode(url('/')) !!};
            // console.log(APP_URL);
            setTimeout(function() {
                window.location.href = APP_URL;
            }, 5000);
        });
    </script>
@endsection
