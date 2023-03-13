@extends('admin.index')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('admin/show_user') }}">User</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section files">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{-- {{ implode(' ', $errors->all(':message')) }} --}}
                            @foreach ($errors->all(':message') as $item)
                                {{ $item }}
                                <br>
                            @endforeach
                        </div>
                    @endif
                    <h5 class="card-title">Edit profiles</h5>
                </div>
            </div>
        </section>
        <section class="section upload-form">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bio-data upload form</h5>
                    <form class="row g-3" method="post" action="{{ url('admin/update') }}" enctype="multipart/form-data">
                        @csrf
                        <input value="{{ $show->fid }}" name="fid" hidden>
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value='{{ $show->name }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <select name="gender[]" class="form-select" value='{{ $show->gender }}'>
                                <option value="male" @if ($show->gender == 'male') {{ 'selected' }} @endif>Male
                                </option>
                                <option value="female" @if ($show->gender == 'female') {{ 'selected' }} @endif>Female
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob"value='{{ $show->dob }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-control" name="age"value='{{ $show->age }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Father's Name</label>
                            <input type="text" class="form-control" name="father_name"value='{{ $show->fathername }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" name="mother_name"value='{{ $show->mothername }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Grand-Father's Name</label>
                            <input type="text" class="form-control"
                                name="grandfather_name"value='{{ $show->grandfathername }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Grand-Mother's Name</label>
                            <input type="text" class="form-control"
                                name="grandmother_name"value='{{ $show->grandmothername }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mobile no.</label>
                            <input type="text" class="form-control" maxlength="10" name="phone"
                                value='{{ $show->phone }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Height</label>
                            <input type="text" class="form-control" name="height"value='{{ $show->height }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">State</label>
                            <select name="state[]" class="form-select">
                                {{-- <option value="">Select state</option> --}}
                                @foreach ($states as $item)
                                    <option value="{{ $item->name }}"
                                        @if ($item->name == $show->state) {{ 'selected' }} @endif>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="city"value='{{ $show->city }}'>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value='{{ $show->address }}'>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Education</label>
                            <input type="text" class="form-control" name="education"value='{{ $show->education }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Employed in</label>
                            <select name="employed_in[]" class="form-select"value='{{ $show->employed_in }}'>
                                {{-- <option selected>Choose...</option> --}}
                                <option value="Corporate">Corporate</option>
                                <option value="Government">Government</option>
                                <option value="Civil">Civil</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Image</label>
                            <img src="{{ asset('files/profile_img/' . $show->img) }}" alt="Profile"
                                class="rounded-circle" height="50px" width="50px">
                            <input type="file" class="form-control" name="img">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Occupation</label>
                            <input type="text" class="form-control" name="occupation"
                                value='{{ $show->occupation }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Annual Income</label>
                            <input type="text" class="form-control" name="income"value='{{ $show->annualincome }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rashi</label>
                            <select name="rashi[]" class="form-select" value='{{ $show->rashi }}'>
                                {{-- <option selected>Choose...</option> --}}
                                <option value="Aries (Mesha)">Aries (Mesha)</option>
                                <option value="Taurus (Vrishava)">Taurus (Vrishava)</option>
                                <option value="Gemini (Mithuna)">Gemini (Mithuna)</option>
                                <option value="Leo (Simha)">Leo (Simha)</option>
                                <option value="Virgo (Kanya)">Virgo (Kanya)</option>
                                <option value="Libra (Tula)">Libra (Tula)</option>
                                <option value="Scorpio (Vrischika)">Scorpio (Vrischika)</option>
                                <option value="Sagittarius (Dhanu)">Sagittarius (Dhanu)</option>
                                <option value="Capricorn (Makar)">Capricorn (Makar)</option>
                                <option value="Aquarius (Kumbha)">Aquarius (Kumbha)</option>
                                <option value="Pisces (Meena)">Pisces (Meena)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nakshatra</label value='{{ $show->nakshatra }}'>
                            <select name="nakshatra[]" class="form-select">
                                {{-- <option selected>Choose...</option> --}}
                                <option value="Ashwini">Ashwini</option>
                                <option value="Bharani">Bharani</option>
                                <option value="Krittika">Krittika</option>
                                <option value="Rohini">Rohini</option>
                                <option value="Mrigashira">Mrigashira</option>
                                <option value="Ardra">Ardra</option>
                                <option value="Punarvasu">Punarvasu</option>
                                <option value="Pushya">Pushya</option>
                                <option value="Ashlesha">Ashlesha</option>
                                <option value="Magha">Magha</option>
                                <option value="Purva Phalguni">Purva Phalguni</option>
                                <option value="Uttara Phalguni">Uttara Phalguni</option>
                                <option value="Hasta">Hasta</option>
                                <option value="Chitra">Chitra</option>
                                <option value="Swati">Swati</option>
                                <option value="Vishaka">Vishaka</option>
                                <option value="Anurada">Anurada</option>
                                <option value="Jyeshta">Jyeshta</option>
                                <option value="Mula">Mula</option>
                                <option value="Purva Ashadha">Purva Ashadha</option>
                                <option value="Uttara Ashadha">Uttara Ashadha</option>
                                <option value="Shravana">Shravana</option>
                                <option value="Dhanishta">Dhanishta</option>
                                <option value="Shatabhishak">Shatabhishak</option>
                                <option value="Purva Bhadrapada">Purva Bhadrapada</option>
                                <option value="Uttara Bhadrapada">Uttara Bhadrapada</option>
                                <option value="Revati">Revati</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Religion</label>
                            <input type="text" class="form-control" value="Jain" name="religion" readonly
                                value='{{ $show->religion }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Caste</label>
                            <select name="caste[]" class="form-select"value='{{ $show->caste }}'>
                                {{-- <option selected>Choose...</option> --}}
                                <option value="Digambar">Digambar</option>
                                <option value="Shwetamber">Shwetamber</option>
                                <option value="Porwal">Porwal</option>
                                <option value="Vania">Vania</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gotra</label>
                            <input type="text" class="form-control" name="gotra"value='{{ $show->gotra }}'>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Marital Status</label>
                            <select name="marital_status[]" class="form-select">
                                {{-- <option selected>Choose...</option> --}}
                                <option value="Never Married">Never Married</option>
                                <option value="Awaiting Divorced">Awaiting Divorced</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Annulled">Annulled</option>
                            </select>
                        </div>
                        {{-- <div class="col-md-6">
                                    <label class="form-label" >Sub-caste</label>
                                    <select name="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" >Email</label>
                                    <input type="email" class="form-control" name="inputEmail5">
                                </div> --}}
                        {{-- <div class="col-md-6">
                                    <label class="form-label" >Gotra</label>
                                    <select name="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option value="Ajmera">Ajmera</option>
                                        <option value="Oswal">Oswal</option>
                                        <option value="Palliwal">Palliwal</option>
                                        <option value="Jaiswal">Jaiswal Jain</option>
                                        <option value="Mahatma">Mahatma Jain</option>
                                        <option value="Bagherwal">Bagherwal</option>
                                        <option value="Porwal">Porwal</option>
                                        <option value="Agarwal">Agarwal</option>
                                        <option value="Varaiya">Varaiya</option>
                                        <option value="Khandelwal">Khandelwal</option>
                                        <option value="Bhandari">Bhandari</option>
                                        <option value="Kanyakubj">Kanyakubj</option>
                                        <option value="Humad">Humad</option>
                                        <option value="Barar">Barar</option>
                                        <option value="Samaiya">Samaiya</option>
                                        <option value="Gupta">Gupta</option>
                                        <option value="Sethi">Sethi</option>
                                        <option value="Shah">Shah</option>
                                        <option value="Veerwal">Veerwal</option>
                                        <option value="Semriwal">Semriwal</option>
                                    </select>
                                </div> --}}

                        <div class="col-md-12">
                            <label class="form-label">About me</label>
                            <textarea type="text" class="form-control" rows="3" name="description"value='{{ $show->description }}'></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <label class="form-check-label">Manglik </label>

                                <input class="form-check-input" type="checkbox"  
                                @if ($show->manglik == 1) {{ 'selected' }} 
                                @endif 
                                name="manglik">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-rounded btn-success">Update</button>
                            <a type="button" href="{{ url('admin/show_user') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </main>
@endsection
