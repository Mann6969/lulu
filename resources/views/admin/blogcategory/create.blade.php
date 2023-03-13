@extends('admin.index')
@section('headSection')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/iCheck/all.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ asset('admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><i class="fa fa-ticket" aria-hidden="true"></i>Create category blog</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogcategory.index') }}">Admin User</a></li>
                    <li class="breadcrumb-item active">Create Admin User</li>
                </ol>
            </nav>
        </div>
        <section class="section files">
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Category add</h3>
                                </div>

                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="{{ route('blogcategory.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            @include('admin.includes.messages')
                                            <div class="form-group">
                                                <label for="name">Category title</label>
                                                <input type="text" class="form-control" id="name" name="name">
                                                <p class="error name-error"></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="slug">Category Slug</label>
                                                <input type="text" class="form-control" id="slug" name="slug">
                                                <p class="error slug-error"></p>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href='{{ route('blogcategory.index') }}' class="btn btn-warning">Cancel</a>
                                            </div>

                                        </div>

                                    </div>


                                </form>
                            </div>
                            <!-- /.box -->


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('footerSection')
    {{-- <script>
        $('#name').keyup(function(e){
            console.log('hell');
        });
        // $(document).ready(function() {
        //     $('#catname').on('keyup', function() {
        //         console.log($(this).val());
        //     });
        // });
        // $(document).ready(function() {
        //     $(document).on('change', '#catname', function() {
        //         alert("The text has been changed.");
        //     });
        // });
    </script> --}}
    <!-- bootstrap color picker -->
    <script src="{{ asset('admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- bootstrap time picker -->
    <script src="{{ asset('admin/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>
    {{-- <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
    </script> --}}
@endsection
