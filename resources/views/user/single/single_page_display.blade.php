@extends('user.index')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg" style="padding: 110px 0;padding-top:290px;background-image:url({{ asset('user/img/gallery-6.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        {{-- <p>Contact with Us</p> --}}
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <div class="mt-100 mb-100">
        {{-- <section id="details"> --}}
        <div class="container" style="margin-left: 450px; margin-right:250px">
            <div class="row" style="margin-left: -350px; margin-right:-250px">
                <div class="col-sm-12 space_all">
                    <div class="col-sm-12 space_all">
                        <div class="col-sm-12 space_all">
                            <div class="col-sm-11 space_all">
                                <div class="details_1">
                                    <h3>{{ $values->name }}</h3>
                                    {{-- <p>H1234567 | Sed Dignissim Lacinia Nunc</p> --}}
                                </div>
                            </div>
                            <div class="col-sm-1 space_all">
                            </div>
                        </div>
                        <div class="col-sm-12 space_all">
                            <div class="details_main clearfix">
                                <div class="col-sm-4 space_all">
                                    <div class="details_3">
                                        <p>
                                            <a href="#"><img src="
                                                @if ($values->img == null)
                                                    @if ($values->gender == 'male')
                                                        {{ asset('user/img/male.jpg') }}
                                                    @else
                                                        {{ asset('user/img/female.jpg') }}
                                                    @endif
                                                @else
                                                    {{ asset('files/profile_img/'.$values->img) }}
                                                @endif
                                                "width="100%">
                                            </a>
                                        </p>
                                    </div>
                                    {{-- <div class="details_4">
                                        <p><a href="#"><i class="fa fa-chevron-left"></i><img src="img/30.jpg"
                                                    alt="Texto Alternativo" class="img-circle img-thumbnail"><span
                                                    class="well_21"><i class="fa fa-chevron-right"></i><span></a></p>
                                    </div> --}}
                                    {{-- <div class="details_5">
                                        <p>Last Login : 1 hour ago</p>
                                    </div> --}}
                                </div>
                                <div class="col-sm-8 space_all">
                                    <div class="col-sm-12 space_all">
                                        <div class="col-sm-8">
                                            <div class="details_6">
                                                <p>Age: <a> {{ $values->age }} </a></p>
                                                <p>Religion: <a> {{ $values->religion }} </a></p>
                                                <p>Caste: <a> {{ $values->caste }} </a></p>
                                                <p>Location: <a> {{ $values->address }} </a></p>
                                                <p>Eduction: <a> {{ $values->education }} </a></p>
                                                <p>Profession: <a> {{ $values->occupation }} </a></p>
                                            </div>
                                            <div class="details_7">
                                                <h3>Want to Marry Then Find Your Partner?</h3>
                                                <p>Let me Help you with that.</p>
                                                <ul>
                                                    <li class="well_22"><a href="#">YES</a></li>
                                                    <li class="well_23"><a href="#">No</a></li>
                                                    {{-- <li><select class="span3" name="expiry_month" id="expiry_month">
                                                            <option></option>
                                                            <option value="01">Shortlist</option>
                                                            <option value="02">Send Mail</option>
                                                            <option value="03">Forward</option>
                                                            <option value="04">Print</option>
                                                        </select>
                                                    </li> --}}
                                                </ul>
                                                <h4>Contact her directly through Mobile, Email & Chat. <a
                                                        href="#">Upgrade Now!</a></h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            {{-- <div class="details_8">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-mobile"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i></a></li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 space_all">
                            <div class="details_13 clearfix" style="padding-left: 30px">
                                <div class="details_12">
                                    <h2>Personal Information</h2>
                                </div>
                                <div class="row">
                                    <div class="details_14">
                                        <h4><i class="fa fa-pinterest"></i>About my daughter</h4>
                                        <p>My daughter is a Manager with a Master's degree currently working in Private
                                            sector
                                            in Gurgaon.</br>
                                            We come from a Middle class, Nuclear family background with Traditional values.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 space_all">
                                        <div class="details_15">
                                            <h4><i class="fa fa-user"></i>Basic Details</h4>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="col-sm-3">
                                                <div class="details_16">
                                                    <ul>
                                                        <li>Name</li>
                                                        <li>Age</li>
                                                        <li>Height</li>
                                                        <li>Marital Status</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="details_16">
                                                    <ul>
                                                        <li>: {{ $values->name }}</li>
                                                        <li>: {{ $values->age }}</li>
                                                        <li>: {{ $values->height }}</li>
                                                        <li>: Never married</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 space_all">
                                        <div class="details_15">
                                            <h4><i class="fa fa-mobile"></i>Contact Details</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="details_17">
                                                <ul>
                                                    <li>Contact Number</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="details_16">
                                                <ul>
                                                    <li>: {{ $values->phone }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 space_all">
                                        <div class="details_15">
                                            <h4><i class="fa fa-book"></i>Religion Information</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="details_17">
                                                <ul>
                                                    <li>Religion</li>
                                                    <li>Caste / Sub Caste</li>
                                                    <li>Gothram</li>
                                                    <li>Star / Raasi</li>
                                                    <li>Manglik</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="details_16">
                                                <ul>
                                                    <li>: {{ $values->religion }}</li>
                                                    <li>: {{ $values->caste }}</li>
                                                    <li>: {{ $values->gotra }}</li>
                                                    <li>: {{ $values->rashi }}</li>
                                                    <li>:
                                                        @if ($values->manglik == 1)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-3"></div>
                                    </div>
                                    <div class="col-sm-6 space_all">
                                        <div class="details_15">
                                            <h4><i class="fa fa-map"></i>Bride's Location</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="details_17">
                                                <ul>
                                                    <li>Country</li>
                                                    <li>State</li>
                                                    <li> City</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="details_16">
                                                <ul>
                                                    <li>: India</li>
                                                    <li>: {{ $values->state }}</li>
                                                    <li>: {{ $values->city }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 space_all">
                                        <div class="details_15">
                                            <h4><i class="fa fa-user"></i>Professional Information</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="details_17">
                                                <ul>
                                                    <li>Education</li>
                                                    <li>Employed in</li>
                                                    <li>Occupation</li>
                                                    <li>Annual Income</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="details_16">
                                                <ul>
                                                    <li>: {{ $values->education }}</li>
                                                    <li>: {{ $values->employed_in }}</li>
                                                    <li>: {{ $values->occupation }}</li>
                                                    <li>: {{ $values->annualincome }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('head')
    {{-- single and listing css and js --}}
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/font-awesome.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="{{ asset('user/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('user/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <style>
        p {
            font-size: 2rem;
        }

        li {
            font-size: 2rem;
        }
    </style>
@endsection
