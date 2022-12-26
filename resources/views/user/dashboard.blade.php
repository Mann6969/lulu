@extends('user.index')
@section('content')
    <!-- search area -->
    {{-- <div class="search-area">
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
	</div> --}}
    <!-- end search area -->


    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <label for="">
                                <h1>Upload Your File Here</h1>
                                <h6 style="color: white">Upload in pdf or jpg format only.</h6>
                            </label>
                            <div>
                                @if (session('message'))
                                    <div class="alert alert-danger">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                                    @csrf
                                    {{-- <div> --}}
                                    <div class="input-group mb-3">
                                        <input name="file[]" type="file" class="form-control" id="inputGroupFile02"
                                            multiple>
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                    {{-- <input type="file" name="filenames[]" multiple> --}}
                                    {{-- <div class="input-group-btn">
                                            <button class="btn btn-success" type="button"><i
                                                    class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                        </div> --}}
                                    {{-- </div> --}}
                                    {{-- <div class="clone hide">
                                        <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                            <input type="file" name="filenames[]" class="myfrm form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger" type="button"><i
                                                        class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                                </form>
                            </div>
                            {{-- <p class="subtitle">Fresh & Organic</p>
							<h1>Delicious Seasonal Fruits</h1>
							<div class="hero-btns">
								<a href="shop.html" class="boxed-btn">Fruit Collection</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->
@endsection
