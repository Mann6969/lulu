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
                        <h1>Listing</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <div class="row">
        <div class="col-sm-12 space_all">
            <div class="col-sm-3 space_all" style="padding-left: 50px">
                <div class="listing_main">
                    <div class="listing_1">
                        <h3>Filters</h3>
                    </div>
                    <div class="listing_3">
                        <form action="{{ route('filter') }}" method="GET">
                            <div class="listing_7">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Gender</h3>
                                    </div>
                                    <div class="panel-body" style="display: block;"><input type="checkbox" value="male"
                                            name="filter[]">
                                        Male </div>
                                    <div class="panel-body" style="display: block;"><input type="checkbox" value="female"
                                            name="filter[]">
                                        Female </div>
                                </div>
                            </div>

                            <div class="listing_7">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Caste</h3>
                                    </div>
                                    <div class="panel-body" style="display: block;"><input type="checkbox" name="caste[]"
                                            value="Digambar">
                                        Digambar
                                    </div>
                                    <div class="panel-body" style="display: block;"><input type="checkbox" name="caste[]"
                                            value="Shwetamber">
                                        Shwetamber
                                    </div>
                                    <div class="panel-body" style="display: block;"><input type="checkbox" name="caste[]"
                                            value="Porwal">
                                        Porwal
                                    </div>
                                    <div class="panel-body" style="display: block;"><input type="checkbox" name="caste[]"
                                            value="Vania">
                                        Vania
                                    </div>
                                    <div class="panel-body" style="display: block;"><input type="checkbox" name="caste[]"
                                            value="Others">
                                        Others
                                    </div>
                                </div>
                            </div>

                            <div class="listing_7">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            State & City</h3>
                                    </div>
                                    <div class="panel-body" style="display: block;">
                                        <select id="state" data-dependent="city">
                                            <option value="">Select state</option>
                                            @foreach ($states as $item)
                                                <option name="state[]" value="{{ $item->name }}">{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <meta name="csrf-token" content="{{ csrf_field() }}" > --}}
                                    {{-- {{ csrf_field() }} --}}
                                    {{-- <div class="panel-body" style="display: block;">
                                    <select name="city" id="city">
                                        <option value="">Select city</option>
                                    </select>
                                </div> --}}
                                </div>
                            </div>
                            <div class="listing_7">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Filters</h3>
                                    </div>
                                    <button type="submit" style="margin:5px 10px 5px 0"><a
                                            class="btn btn-success ">Submit</a></button>

                                    <a class="btn btn-info " style="margin:5px 10px 5px 0"
                                        href="{{ route('listing') }}">Clear</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 space_all" style="padding-left: 40px">
                <div class="listing_inner_2 clearfix">
                    <div class="listing_10">
                        <div class="col-sm-12 space_all">
                            @foreach ($values as $item)
                                <div class="col-sm-12 space_all">
                                    <div class="listing_inner_1 clearfix">
                                        <div class="col-sm-2 space_all">
                                            <a><img src="
                                                @if ($item->img == null) 
                                                    @if ($item->gender == 'male')
                                                        {{ asset('user/img/male.jpg') }}
                                                    @else
                                                        {{ asset('user/img/female.jpg') }} 
                                                    @endif
                                                @else
                                                    {{ asset('files/profile_img/' . $item->img) }}
                                                @endif
                                                "width="100%" oncontextmenu="return false;">
                                            </a>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="col-sm-12 space_all">
                                                <div class="col-sm-10 space_all">
                                                    <div class="listing_12 clearfix">
                                                        <h4><i class="fa fa-heart"></i><a>{{ $item->name }}</a>
                                                        </h4>
                                                        <ul>
                                                            <li><a><i
                                                                        class="fa fa-dot-circle-o"></i>D.O.B.:{{ $item->dob }}</a>
                                                            </li>
                                                            <li><a><i
                                                                        class="fa fa-dot-circle-o"></i>Religion:{{ $item->religion }}</a>
                                                            </li>
                                                            <li><a><i
                                                                        class="fa fa-dot-circle-o"></i>Caste:{{ $item->caste }}</a>
                                                            </li>
                                                            <li><a><i
                                                                        class="fa fa-dot-circle-o"></i>Education:{{ $item->education }}</a>
                                                            </li>
                                                            <li><a><i
                                                                        class="fa fa-dot-circle-o"></i>Occupation:{{ $item->occupation }}</a>
                                                            </li>
                                                        </ul>
                                                        <h5 class="text-right"><a
                                                                href="{{ route('profile', ['id' => $item->id]) }}">View
                                                                Full Profile</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">{{ $values->links() }}</div>
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

@section('script')
    {{-- <script>
        $(document).ready(function() {
            $('#state').on('change', function() {

                console.log("Hello world!");
                // e.preventDefault();
                // if ($(this).val() != '') {
                var value = $(this).val();
                console.log(value);
                if (value != '') {
                    $.ajax({
                        // headers: {
                        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        // },
                        method: "get",
                        url: "{{ route('state') }}",
                        data: {
                            value: value
                        },
                        success: function(result) {
                            console.log("Fumk You");
                            // $('#city').html(result);
                        }
                    });
                }
                //     $.ajax({
                //         method:"get",
                //         // url: "",
                //         data: {value:value},
                //         // dataType: "dataType",
                //         success: function (response) {
                //             // console()
                //             $('#city').html(result);
                //         }
                //     });
                // }

            });

            $('#sortgen').on('change', function() {
                this.form.submit();
            });

        });
    </script> --}}
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            /*****Fixed Menu******/
            var secondaryNav = $('.cd-secondary-nav'),
                secondaryNavTopPosition = secondaryNav.offset().top;
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > secondaryNavTopPosition) {
                    secondaryNav.addClass('is-fixed');
                } else {
                    secondaryNav.removeClass('is-fixed');
                }
            });

        });
    </script> --}}
    {{-- <script type="text/javascript">
        $(document).on('click', '.panel-heading span.clickable', function(e) {
            var $this = $(this);
            if (!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
            }
        });
        $(document).on('click', '.panel div.clickable', function(e) {
            var $this = $(this);
            if (!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
            }
        });
        $(document).ready(function() {
            $('.panel-heading span.clickable').click();
            $('.panel div.clickable').click();
        });
    </script> --}}
@endsection
