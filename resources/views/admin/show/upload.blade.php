@extends('admin.index')
@section('content')
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- w-100 class so that header
                    div covers 100% width of parent div -->
                    <h5 class="modal-title w-100" id="exampleModalLabel">
                        GeeksForGeeks
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <!--Modal body with image-->
                <div class="modal-body">
                    <img src="gfg.png" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div> --}}
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Upload</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Upload</li>
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
                    <h5 class="card-title">User files uploaded</h5>
                    <p>Click on each file to download it as per requirements</p>
                    @foreach (json_decode($file->filenames) as $item)
                        {{-- <embed src="{{ '../../files/' . $item }}" width="100px" height="100px" /> --}}
                        <a href="{{ '../../files/' . $item }}" download>
                            {{ $item }}<br>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section upload-form">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bio-data upload form</h5>
                    <form class="row g-3" method="post" action="{{ url('admin/submit') }}" enctype="multipart/form-data">
                        @csrf
                        <input value="{{ $fid }}" name="fid" hidden>
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <select name="gender[]" class="form-select">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-control" name="age">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Father's Name</label>
                            <input type="text" class="form-control" name="father_name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" name="mother_name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Grand-Father's Name</label>
                            <input type="text" class="form-control" name="grandfather_name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Grand-Mother's Name</label>
                            <input type="text" class="form-control" name="grandmother_name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mobile no.</label>
                            <input type="text" class="form-control" maxlength="10" placeholder="9995556622"
                                name="phone">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Height</label>
                            <input type="text" class="form-control" name="height">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control" name="state">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="city">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="1234 Main St">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Education</label>
                            <input type="text" class="form-control" name="education">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Employed in</label>
                            <select name="employed_in[]" class="form-select">
                                {{-- <option selected>Choose...</option> --}}
                                <option value="Corporate">Corporate</option>
                                <option value="Government">Government</option>
                                <option value="Civil">Civil</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="img">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Occupation</label>
                            <input type="text" class="form-control" name="occupation">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Annual Income</label>
                            <input type="text" class="form-control" name="income">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rashi</label>
                            <select name="rashi[]" class="form-select">
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
                            <label class="form-label">Nakshatra</label>
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
                            <input type="text" class="form-control" value="Jain" name="religion" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Caste</label>
                            <select name="caste[]" class="form-select">
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
                            <input type="text" class="form-control" name="gotra">
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
                            <textarea type="text" class="form-control" rows="3" name="description"></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <label class="form-check-label">Manglik </label>
                                <input class="form-check-input" value="1" type="checkbox" name="manglik">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-rounded btn-success">Submit</button>
                            <a type="button" href="{{ url('admin/upload_user') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </main>
@endsection
