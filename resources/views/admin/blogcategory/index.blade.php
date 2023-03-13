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
                </ol>
            </nav>
        </div>
        <!-- Main content -->
        <section class="section files">
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        @include('admin.includes.messages')
                        <div class="col-lg-12 ">
                            <a class='btn btn-success float-end' style="margin: 2px"
                                href="{{ route('blogcategory.create') }}">Add
                                New</a>
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>category_name</th>
                                    <th>category slug</th>
                                    <th>created_at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        {{-- <td>{{ $post->subtitle }}</td> --}}
                                        <td>{{ $category->category_slug }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td><a href="{{ route('blogcategory.edit', $category->id) }}"><span
                                                    class="glyphicon glyphicon-edit"></span></a></td>
                                        <td>
                                            <form id="delete-form-{{ $category->id }}" method="post"
                                                action="{{ route('blogcategory.destroy', $category->id) }}" style="display: none">
                                                @csrf
                                            </form>
                                            <a href=""
                                                onclick="
                                            if(confirm('Are you sure, You Want to delete this?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $category->id }}').submit();
                                            }else{
                                            event.preventDefault();
                                            }"><span
                                                    class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                    </tr>
                                    </tr>
                                @endforeach

                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>category_name</th>
                                    <th>category slug</th>
                                    <th>created_at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot> -->
                        </table>
                        {{-- <div class="row">{{ $show->links() }}</div> --}}
                        <!-- End Table with hoverable rows -->
                    </div>
                </div>
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
