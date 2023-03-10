@extends('admin.index')

@section('head')
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@endsection

@section('content')
<main id="main" class="main">

	<div class="pagetitle">
		<h1>Upload</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('admin/index') }}">Home</a></li>
				{{-- <li class="breadcrumb-item active">Upload</li> --}}
				{{-- <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li> --}}
                <li><a href="{{ route('permission.index') }}">Permission Table</a></li>
                <li class="active">Create Form</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Create Permission</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ route('permission.store') }}" method="post">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="col-lg-offset-3 col-lg-6">
								{{-- @include('includes.messages') --}}
								<div class="form-group">
									<label for="name">Permission Name</label>
									<input type="text" class="form-control" id="name" name="name"
										placeholder="Permission Name">
								</div>

								<div class="form-group">
									<label for="for">Permission for</label>
									<select name="for" id="for" class="form-control">
										<option selected disable>Select Permission for</option>
										<option value="user">User</option>
										<option value="post">Post</option>
										<option value="other">Other</option>
									</select>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary">Submit</button>
									<a href='{{ route('permission.index') }}' class="btn btn-warning">Back</a>
								</div>

							</div>

						</div>

					</form>
				</div>
				<!-- /.box -->


			</div>
			<!-- /.col-->
		</div>
		<!-- ./row -->
	</section>
</main>
@endsection
