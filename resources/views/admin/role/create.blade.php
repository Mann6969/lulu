@extends('admin.index')

@section('head')
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Create Role</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('role.index') }}">Role</a></li>
					<li class="breadcrumb-item active">Role Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section files">
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="content-wrapper">
                        <!-- Main content -->
                            <div class="row p-10">
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="box box-primary">
                                        <!-- form start -->
                                        <form role="form" action="{{ route('role.store') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="col-lg-offset-3 col-lg-6">
                                                    {{-- @include('includes.messages') --}}
                                                    <div class="form-group">
                                                        <label for="name">Role Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" placeholder="Role Name">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label for="name">Posts Permissions</label>
                                                            @foreach ($permissions as $permission)
                                                                @if ($permission->for == 'post')
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" name="permission[]"
                                                                                value="{{ $permission->id }}">{{ $permission->name }}</label>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="name">User Permissions</label>
                                                            @foreach ($permissions as $permission)
                                                                @if ($permission->for == 'user')
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" name="permission[]"
                                                                                value="{{ $permission->id }}">{{ $permission->name }}</label>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <label for="name">Other Permissions</label>
                                                            @foreach ($permissions as $permission)
                                                                @if ($permission->for == 'other')
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" name="permission[]"
                                                                                value="{{ $permission->id }}">{{ $permission->name }}</label>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <a href='{{ route('role.index') }}'
                                                            class="btn btn-warning">Back</a>
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
                        {{-- </section> --}}
                        <!-- /.content -->
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- /.content-wrapper -->
@endsection
