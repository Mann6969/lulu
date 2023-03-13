@extends('user.index')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg" style="background-image:url({{ asset('../user/img/gallery-6.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Get 24/7 Support</p>
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Have you any question?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est,
                            assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse
                            natus!</p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form method="post" action="{{ route('contact.upload') }}">
                            @csrf
                            <div class="col-12">
                                <div class="col-6">
                                @error('name')
                                    <span class="text-danger col-6">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="col-6">
                                @error('email')
                                    <span class="text-danger col-6">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <p>
                                <input type="text" placeholder="Name" name="name" id="name" required>
                                <input type="email" placeholder="Email" name="email" id="email" required>
                            </p>
                            <p>
                                <input type="tel" placeholder="Phone" name="phone" id="phone">
                            </p>
                            <p>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                            </p>
                            <input type="hidden" name="token" value="FsWga4&@f6aw" />
                            <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                            {{-- <p><button type="submit" value="Submit"></p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->
@endsection
