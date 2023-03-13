@extends('admin.index')

{{-- @section('headSection')
   
    <!-- AdminLTE Skins. Choose a skin from the css/skins
               folder instead of downloading all of them to reduce the load. -->
    
@endsection --}}
@section('head')
    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@endsection
@section('headSection')
 <!-- DataTables -->
 <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">
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
    <!-- Content Wrapper. Contains page content -->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1><i class="fa fa-ticket" aria-hidden="true"></i>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('blog.index') }}">Blogs Table</a></li>
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
                            <a class='btn btn-success float-end' style="margin: 2px" href="{{ route('blog.create') }}">Add
                                New</a>
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    {{-- <th>Slug</th> --}}
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                          <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>{{ $post->blog_title }}</td>
                              <td>{{ $post->category }}</td>
                              {{-- <td>{{ $post->slug }}</td> --}}
                              <td>{{ $post->created_at }}</td>
                              <td><a href="{{ route('blog.edit', $post->id) }}"><span
                                          class="glyphicon glyphicon-edit"></span></a></td>
                              <td>
                                  <form id="delete-form-{{ $post->id }}" method="post"
                                      action="{{ route('blog.destroy', $post->id) }}" style="display: none">
                                      @csrf
                                  </form>
                                  <a href=""
                                      onclick="
                          if(confirm('Are you sure, You Want to delete this?'))
                            {
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $post->id }}').submit();
                            }
                            else{
                              event.preventDefault();
                            }"><span
                                          class="glyphicon glyphicon-trash"></span></a>
                              </td>
                          </tr>
                          </tr>
                      @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>category</th>
                                    {{-- <th>Slug</th> --}}
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
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
