@extends('user.index')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg" style="padding: 110px 0;padding-top:290px">
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
    {{-- <section id="listing" class="clearfix"> --}}
    <div class="row">
        <div class="col-sm-12 space_all">
            <div class="col-sm-3 space_all" style="padding-left: 50px">
                <div class="listing_main">
                    <div class="listing_1">
                        <h3>Filters</h3>
                    </div>
                    {{-- <div class="listing_2">
                        <h5>DIGNISSIM</h5>
                        <p><a href="#"><i>
                                    << /i>Integer & Vestibulum</a></p>
                        <h6><a href="#">Praesent</a></h6>
                    </div> --}}
                    <div class="listing_3">
                        {{-- <h5>FUSCE</h5>
                        <div class="listing_main_1 clearfix">
                            <div class="col-sm-12 space_all">
                                <div class="col-sm-5 space_all">
                                    <div class="listing_5">
                                        <div class="controls clearfix">
                                            <select class="span3" name="expiry_month" id="expiry_month">
                                                <option>+15000</option>
                                                <option value="01">+25000</option>
                                                <option value="02">+35000</option>
                                                <option value="03">+45000</option>
                                                <option value="04">+55000</option>
                                                <option value="05">+65000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 space_all">
                                    <div class="listing_4">
                                        <p>to</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 space_all">
                                    <div class="listing_6">
                                        <div class="controls clearfix">
                                            <select class="span3" name="expiry_month" id="expiry_month">
                                                <option>+25000</option>
                                                <option value="01">+75000</option>
                                                <option value="02">+85000</option>
                                                <option value="03">+95000</option>
                                                <option value="04">+15000</option>
                                                <option value="05">+25000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="listing_7">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">SED</h3>
                                    <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                                </div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Nisi </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Quis </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Ante </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Fusce </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Augue </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Porta </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Massa </a></div>
                            </div>
                        </div>
                        <div class="listing_7">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        MAURIS</h3>
                                    <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                                </div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox"> 11
                                        GB </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox"> 22
                                        GB </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox"> 13
                                        GB </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox"> 24
                                        GB </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        15
                                        GB </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox"> 16
                                        GB </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        700 MB </a></div>
                            </div>
                        </div>
                        <div class="listing_7">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        CONUBIA NOSTRA</h3>
                                    <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                                </div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Augue </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Porta </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Massa </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input type="checkbox">
                                        Nisi </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input
                                            type="checkbox"> Quis </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input
                                            type="checkbox"> Ante </a></div>
                                <div class="panel-body" style="display: block;"><a href="#"><input
                                            type="checkbox"> Fusce </a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-9 space_all" style="padding-left: 40px">
                <div class="listing_inner_2 clearfix">
                    <div class="listing_10">
                        <div class="col-sm-12 space_all">
                            <div class="chance">
                                {{-- <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Elementum</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Dignissim Lacinia</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Fusce Nec Tellus</a></li>
                                    <li><a data-toggle="tab" href="#menu3">Lacinia Nunc</a></li>
                                </ul> --}}
                                <div class="tab-content clearfix">
                                    <div id="home" class="tab-pane fade in active clearfix">
                                        <div class="click clearfix">
                                            @foreach ($values as $item)
                                                <div class="col-sm-12 space_all">
                                                    <div class="listing_inner_1 clearfix">
                                                        <div class="col-sm-2 space_all">
                                                            {{-- <div class="listing_11"> --}}
                                                                <a><img src="{{ asset('user/img/male.jpg') }}" width="100%"></a>
                                                            {{-- </div> --}}
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="col-sm-12 space_all">
                                                                <div class="col-sm-10 space_all">
                                                                    <div class="listing_12 clearfix">
                                                                        <h4><i class="fa fa-heart"></i><a>{{ $item->name }}</a></h4>
                                                                        <ul>
                                                                            <li><a><i class="fa fa-dot-circle-o"></i>D.O.B.:{{  $item->dob }}</a></li>
                                                                            <li><a><i
                                                                                        class="fa fa-dot-circle-o"></i>Religion:{{ $item->religion }}</a></li>
                                                                            <li><a><i class="fa fa-dot-circle-o"></i>Caste:{{ $item->caste }}</a></li>
                                                                            <li><a><i class="fa fa-dot-circle-o"></i>Education:{{ $item->education }}</a></li>
                                                                            <li><a><i class="fa fa-dot-circle-o"></i>Occupation:{{ $item->occupation }}</a></li>
                                                                        </ul>
                                                                        <h5 class="text-right"><a
                                                                                href="{{  route('profile',['id' => $item->id]) }}">View
                                                                                Full Profile</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            {{-- <div class="col-sm-12 space_all">
                                                <div class="listing_inner_1 clearfix">
                                                    <div class="col-sm-4 space_all">
                                                        <div class="listing_11">
                                                            <h2><a><img src="img/14.jpg"
                                                                        width="100%"></a></h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-12 space_all">
                                                            <div class="col-sm-10 space_all">
                                                                <div class="listing_12 clearfix">
                                                                    <h4><i class="fa fa-heart"></i><a href="#">Sed
                                                                            Cursus Ante (Augue Semper Porta)</a></h4>
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Age: 21
                                                                                Yrs Height: 6 Ft 4 In</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Religion:
                                                                                Christian</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Caste:
                                                                                (Caste No Bor)</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Location:
                                                                                Lorem/ Ipsum/ Dolor</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Eduction:
                                                                                BBA</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Profession:
                                                                                Clerk</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Annual
                                                                                Income: 1 - 4 Lakhs</a></li>
                                                                    </ul>
                                                                    <h5 class="text-right"><a href="sarch form.html">View
                                                                            Full Profile</a></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 space_all">
                                                <div class="listing_inner_1 clearfix">
                                                    <div class="col-sm-4 space_all">
                                                        <div class="listing_11">
                                                            <h2><a href="#"><img src="img/15.jpg"
                                                                        width="100%"></a></h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-12 space_all">
                                                            <div class="col-sm-10 space_all">
                                                                <div class="listing_12 clearfix">
                                                                    <h4><i class="fa fa-heart"></i><a href="#">Fusce
                                                                            Nec Tellus (Sed Augue Semper Porta)</a></h4>
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Age: 24
                                                                                Yrs Height: 4 Ft 4 In</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Religion:
                                                                                Sikh</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Caste:
                                                                                Nadar</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Location:
                                                                                Sed/ Augue/ Semper</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Eduction:
                                                                                B.Com</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Profession:
                                                                                Accounts/ Finance</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Annual
                                                                                Income: 2 - 3 Lakhs</a></li>
                                                                    </ul>
                                                                    <h5 class="text-right"><a href="sarch form.html">View
                                                                            Full Profile</a></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 space_all">
                                                <div class="listing_inner_1 clearfix">
                                                    <div class="col-sm-4 space_all">
                                                        <div class="listing_11">
                                                            <h2><a href="#"><img src="img/16.jpg"
                                                                        width="100%"></a></h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-12 space_all">
                                                            <div class="col-sm-10 space_all">
                                                                <div class="listing_12 clearfix">
                                                                    <h4><i class="fa fa-heart"></i><a href="#">Lorem
                                                                            Ipsum Dolor (Sit Amet Consectetur)</a></h4>
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Age: 25
                                                                                Yrs Height: 5 Ft 6 In</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Religion:
                                                                                Jain - Digambar</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Caste:
                                                                                Sc</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Location:
                                                                                Fusce/ Nec/ Tellus</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Eduction:
                                                                                MBBS</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Profession:
                                                                                Doctor</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Annual
                                                                                Income: 5 - 6 Lakhs</a></li>
                                                                    </ul>
                                                                    <h5 class="text-right"><a href="sarch form.html">View
                                                                            Full Profile</a></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 space_all">
                                                <div class="listing_inner_1 clearfix">
                                                    <div class="col-sm-4 space_all">
                                                        <div class="listing_11">
                                                            <h2><a href="#"><img src="img/13.jpg"
                                                                        width="100%"></a></h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-12 space_all">
                                                            <div class="col-sm-10 space_all">
                                                                <div class="listing_12 clearfix">
                                                                    <h4><i class="fa fa-heart"></i><a href="#">Lorem
                                                                            Ipsum Dolor (Sit Amet Consectetur)</a></h4>
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Age: 28
                                                                                Yrs Height: 5 Ft 4 In</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Religion:
                                                                                Muslim - Shia</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Caste:
                                                                                Arcot</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Location:
                                                                                Integer/ Nec /Odionec</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Eduction:
                                                                                B.Com</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Profession:
                                                                                Accounts/ Finance</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Annual
                                                                                Income: 2 - 3 Lakhs</a></li>
                                                                    </ul>
                                                                    <h5 class="text-right"><a href="sarch form.html">View
                                                                            Full Profile</a></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 space_all">
                                                <div class="listing_inner_1 clearfix">
                                                    <div class="col-sm-4 space_all">
                                                        <div class="listing_11">
                                                            <h2><a href="#"><img src="img/13.jpg"
                                                                        width="100%"></a></h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-12 space_all">
                                                            <div class="col-sm-10 space_all">
                                                                <div class="listing_12 clearfix">
                                                                    <h4><i class="fa fa-heart"></i><a href="#">Lorem
                                                                            Ipsum Dolor (Sit Amet Consectetur)</a></h4>
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Age: 28
                                                                                Yrs Height: 5 Ft 4 In</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Religion:
                                                                                Muslim - Shia</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Caste:
                                                                                Arcot</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Location:
                                                                                Integer/ Nec /Odionec</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Eduction:
                                                                                B.Com</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Profession:
                                                                                Accounts/ Finance</a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-dot-circle-o"></i>Annual
                                                                                Income: 2 - 3 Lakhs</a></li>
                                                                    </ul>
                                                                    <h5 class="text-right"><a href="sarch form.html">View
                                                                            Full Profile</a></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade clearfix">
                                        <div class="click clearfix">
                                            <div id="home" class="tab-pane fade in active clearfix">
                                                <div class="click clearfix">
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/17.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Sed Cursus Ante (Augue
                                                                                    Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        26 Yrs Height: 5 Ft 7 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Parsi</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Arcot</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Duis/ Sagittis/ Ipsum</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        ME</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Poressor</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 1 - 3 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/18.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Lorem Ipsum Dolor (Sit
                                                                                    Amet Consectetur)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        28 Yrs Height: 5 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Muslim - Shia</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Arcot</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Per/ Conubia/ Nostra</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        B.Com</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Accounts/ Finance</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 2 - 3 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/19.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Fusce Nec Tellus (Sed
                                                                                    Augue Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        21 Yrs Height: 6 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Christian</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        (Caste No Bor)</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Arcu Eget Nulla</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        BBA</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Clerk</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 1 - 4 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/20.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Sed Cursus Ante (Augue
                                                                                    Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        25 Yrs Height: 5 Ft 6 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Jain - Digambar</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Sc</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Fusce/ Nec/ Tellus</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        MBBS</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Doctor</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 5 - 6 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade clearfix">
                                        <div class="click clearfix">
                                            <div id="home" class="tab-pane fade in active clearfix">
                                                <div class="click clearfix">
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/21.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Fusce Nec Tellus (Sed
                                                                                    Augue Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        28 Yrs Height: 5 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Muslim - Shia</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Arcot</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Integer/ Nec/ Odionec</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        B.Com</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Accounts/ Finance</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 2 - 3 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/22.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Lorem Ipsum Dolor (Sit
                                                                                    Amet Consectetur)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        25 Yrs Height: 5 Ft 6 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Jain - Digambar</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Sc</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Augue/ Semper/ Porta</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        MBBS</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Doctor</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 5 - 6 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/23.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Sed Cursus Ante (Augue
                                                                                    Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        21 Yrs Height: 6 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Christian</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        (Caste No Bor)</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Sed/ Cursus/ Ante</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        BBA</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Clerk</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 1 - 4 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/24.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Fusce Nec Tellus (Sed
                                                                                    Augue Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        28 Yrs Height: 5 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Muslim - Shia</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Arcot</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Fusce/ Nec/ Tellus</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        B.Com</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Accounts/ Finance</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 2 - 3 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade clearfix">
                                        <div class="click clearfix">
                                            <div id="home" class="tab-pane fade in active clearfix">
                                                <div class="click clearfix">
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/25.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Sed Cursus Ante (Augue
                                                                                    Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        28 Yrs Height: 5 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Muslim - Shia</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Arcot</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Sed/ Augue/ Semper</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        B.Com</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Accounts/ Finance</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 2 - 3 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/26.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Fusce Nec Tellus (Sed
                                                                                    Augue Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        25 Yrs Height: 5 Ft 6 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Jain - Digambar</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Sc</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Integer/ Nec/ Odionec</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        MBBS</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Doctor</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 5 - 6 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/27.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Lorem Ipsum Dolor (Sit
                                                                                    Amet Consectetur)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        21 Yrs Height: 6 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Christian</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        (Caste No Bor)</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Nulla/ Quis/ Sem</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        BBA</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Clerk</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 1 - 4 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/28.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Fusce Nec Tellus (Sed
                                                                                    Augue Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        25 Yrs Height: 5 Ft 6 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Jain - Digambar</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Sc</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Integer/ Nec/ Odionec</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        MBBS</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Doctor</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 5 - 6 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu4" class="tab-pane fade clearfix">
                                        <div class="click clearfix">
                                            <div id="home" class="tab-pane fade in active clearfix">
                                                <div class="click clearfix">
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/25.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Sed Cursus Ante (Augue
                                                                                    Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        28 Yrs Height: 5 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Muslim - Shia</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Arcot</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Sed/ Augue/ Semper</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        B.Com</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Accounts/ Finance</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 2 - 3 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/26.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Fusce Nec Tellus (Sed
                                                                                    Augue Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        25 Yrs Height: 5 Ft 6 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Jain - Digambar</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Sc</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Integer/ Nec/ Odionec</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        MBBS</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Doctor</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 5 - 6 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/27.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Lorem Ipsum Dolor (Sit
                                                                                    Amet Consectetur)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        21 Yrs Height: 6 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Christian</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        (Caste No Bor)</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Nulla/ Quis/ Sem</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        BBA</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Clerk</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 1 - 4 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/28.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Fusce Nec Tellus (Sed
                                                                                    Augue Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        25 Yrs Height: 5 Ft 6 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Jain - Digambar</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Sc</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Integer/ Nec/ Odionec</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        MBBS</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Doctor</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 5 - 6 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu5" class="tab-pane fade clearfix">
                                        <div class="click clearfix">
                                            <div id="home" class="tab-pane fade in active clearfix">
                                                <div class="click clearfix">
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/25.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Sed Cursus Ante (Augue
                                                                                    Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        28 Yrs Height: 5 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Muslim - Shia</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Arcot</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Sed/ Augue/ Semper</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        B.Com</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Accounts/ Finance</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 2 - 3 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/26.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Fusce Nec Tellus (Sed
                                                                                    Augue Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        25 Yrs Height: 5 Ft 6 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Jain - Digambar</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Sc</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Integer/ Nec/ Odionec</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        MBBS</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Doctor</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 5 - 6 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/27.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Lorem Ipsum Dolor (Sit
                                                                                    Amet Consectetur)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        21 Yrs Height: 6 Ft 4 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Christian</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        (Caste No Bor)</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Nulla/ Quis/ Sem</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        BBA</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Clerk</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 1 - 4 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 space_all">
                                                        <div class="listing_inner_1 clearfix">
                                                            <div class="col-sm-4 space_all">
                                                                <div class="listing_11">
                                                                    <h2><a href="#"><img src="img/28.jpg"
                                                                                width="100%"></a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="col-sm-12 space_all">
                                                                    <div class="col-sm-10 space_all">
                                                                        <div class="listing_12 clearfix">
                                                                            <h4><i class="fa fa-heart"></i><a
                                                                                    href="#">Fusce Nec Tellus (Sed
                                                                                    Augue Semper Porta)</a></h4>
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Age:
                                                                                        25 Yrs Height: 5 Ft 6 In</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Religion:
                                                                                        Jain - Digambar</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Caste:
                                                                                        Sc</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Location:
                                                                                        Integer/ Nec/ Odionec</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Eduction:
                                                                                        MBBS</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Profession:
                                                                                        Doctor</a></li>
                                                                                <li><a href="#"><i
                                                                                            class="fa fa-dot-circle-o"></i>Annual
                                                                                        Income: 5 - 6 Lakhs</a></li>
                                                                            </ul>
                                                                            <h5 class="text-right"><a
                                                                                    href="sarch form.html">View Full
                                                                                    Profile</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}
@endsection

@section('head')
    {{-- single and listing css and js --}}
    <link href="{{ asset('user/assets2/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets2/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets2/css/font-awesome.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="{{ asset('user/assets2/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('user/assets2/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('user/assets2/js/bootstrap.min.js') }}"></script>
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
    <script type="text/javascript">
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
    </script>
    <script type="text/javascript">
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
    </script>
@endsection
