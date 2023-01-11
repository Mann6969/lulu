@extends('admin.index')

@section('head')
    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@endsection
@section('headSection')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><i class="fa fa-ticket" aria-hidden="true"></i>Role Create, Read, Update, Delete</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Role</li>
                </ol>
            </nav>
        </div>
        <section class="section files">
            <div class="card">
                <div class="card-body">
                    <div class="content-wrapper">
                        <!-- Main content -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box" style="padding-top: 20px">
                                    <div class="row pb-4">
                                        <div class="col-lg-12">
                                            <a class='pull-right btn btn-success float-end'
                                                href="{{ route('role.create') }}">Add New</a>
                                        </div>
                                        @include('admin.includes.messages')
                                        <!-- /.box-header -->
                                    </div>
                                    <div class="row">
                                        <div class="box-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Role Name</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($roles as $role)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $role->name }}</td>
                                                            <td><a href="{{ route('role.edit', $role->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                                            <td>
                                                                <form id="delete-form-{{ $role->id }}" method="post"
                                                                    action="{{ route('role.destroy', $role->id) }}"
                                                                    style="display: none">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                </form>
                                                                <a href=""
                                                                    onclick="
                                                                if(confirm('Are you sure, You Want to delete this?'))
                                                                {
                                                                  event.preventDefault();
                                                                  document.getElementById('delete-form-{{ $role->id }}').submit();
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
                                                        <th>Role Name</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- /.content -->
                    </div>
                </div>
            </div>
        </section>
    </main>
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
