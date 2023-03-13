@extends('admin.index')
@section('head')
    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@endsection
@section('headSection')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
               folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1><i class="fa fa-ticket" aria-hidden="true"></i>Admin User's</h1>
            <nav>
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('blogcategory.index') }}">Blog Category Table</a></li>
					{{-- <li><a href="{{ route('blogcategory.edit') }}">Blog Category Edit</a></li> --}}
                </ol>
            </nav>
        </div>
        <!-- Main content -->
		<section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Category</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('blogcategory.update', $category->id) }}" method="post">
							@csrf
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    @include('admin.includes.messages')
                                    <div class="form-group">
                                        <label for="name">Category title</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Category Title" value="{{ $category->name }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">Category Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            placeholder="Slug" value="{{ $category->category_slug }}">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href='{{ route('blogcategory.index') }}' class="btn btn-warning">Back</a>
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
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @endsection

    @section('footerSection')
        <!-- jQuery 3 -->
        <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- DataTables -->
        <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
        <!-- page script -->
        <script>
            $(function() {
                $('#example1').DataTable()
                $('#example2').DataTable({
                    'paging': true,
                    'lengthChange': false,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': false
                })
            })
        </script>
    @endsection
