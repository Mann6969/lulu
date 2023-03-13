@extends('admin.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('admin/show_user') }}">User</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
            <p class="card-description">
                @if (Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
            </p>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{ asset('files/profile_img/' . $show->img) }}" alt="Profile" class="rounded-circle">
                            <h2>{{ $show->name }}</h2>

                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                               

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-3">
                                            <h5 class="card-title">About</h5>
                                            <p class="small fst-italic">{{ $show->description }}.</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <a class="btn btn-outline-primary"
                                                href="{{ url('admin/edit/' . $show->id) }}">Edit</a>
                                        </div>

                                    </div>


                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 label ">Full Name</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->name }}</div>
                                        <div class="col-lg-3 col-md-3 label ">Age</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->dob }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 label ">Father Name</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->fathername }}</div>
                                        <div class="col-lg-3 col-md-3 label ">Mother Name</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->mothername }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 label ">GrandFather Name</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->grandfathername }}</div>
                                        <div class="col-lg-3 col-md-3 label ">GrandMother Name</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->grandmothername }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 label ">City</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->city }}</div>
                                        <div class="col-lg-3 col-md-3 label ">State</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->state }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 label ">Height</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->height }}</div>
                                        <div class="col-lg-3 col-md-3 label ">Phone</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->phone }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 label ">Annual Income</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->annualincome }}</div>
                                        <div class="col-lg-3 col-md-3 label ">Religion</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->religion }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 label ">Gotra</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->gotra }}</div>
                                        <div class="col-lg-3 col-md-3 label ">Rashi</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->rashi }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 label ">Caste</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->caste }}</div>
                                        <div class="col-lg-3 col-md-3 label ">Nakshatra</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->nakshatra }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 label ">Marital Status</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->marital_status }}</div>
                                        <div class="col-lg-3 col-md-3 label ">Manglik</div>
                                        <div class="col-lg-3 col-md-3">{{ $show->manglik }}</div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-lg-3 col-md-4 label"></div>
                                        <div class="col-lg-9 col-md-8">{{  }}</div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Occupation</div>
                                        <div class="col-lg-9 col-md-8">{{ $show->occupation }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Education</div>
                                        <div class="col-lg-9 col-md-8">{{ $show->education }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">{{ $show->address }}</div>
                                    </div>

                                   


                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                    </div>

                                </div>



                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
