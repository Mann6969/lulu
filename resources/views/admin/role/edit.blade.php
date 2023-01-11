@extends('admin.index')

@section('head')
    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><i class="fa fa-ticket" aria-hidden="true"></i>Update Role</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('role.index') }}">Role</a></li>
					<li class="breadcrumb-item active">Role Update</li>
                </ol>
            </nav>
        </div>
        <section class="section files">
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="content-wrapper">
                        <!-- Main content -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="box box-primary">
                                        <!-- form start -->
                                        <form role="form" action="{{ route('role.update', $role->id) }}" method="post">
                                            @csrf
                                            <div class="box-body">
                                                <div class="col-lg-offset-3 col-lg-6">
                                                    @include('admin.includes.messages')
                                                    <div class="form-group">
                                                        <label for="name">Role title</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" placeholder="role Title"
                                                            value="{{ $role->name }}">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label for="name">Posts Permissions</label>
                                                            @foreach ($permissions as $permission)
                                                                @if ($permission->for == 'post')
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" name="permission[]"
                                                                                value="{{ $permission->id }}"
                                                                                @foreach ($role->permissions as $role_permit)
														@if ($role_permit->id == $permission->id)
															checked
														@endif @endforeach>{{ $permission->name }}</label>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="name">User Permissions</label>
                                                            @foreach ($permissions as $permission)
                                                                @if ($permission->for == 'user')
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" name='permission[]'
                                                                                value="{{ $permission->id }}"
                                                                                @foreach ($role->permissions as $role_permit)
															@if ($role_permit->id == $permission->id)
																checked
															@endif @endforeach>{{ $permission->name }}</label>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <label for="name">User Permissions</label>
                                                            @foreach ($permissions as $permission)
                                                                @if ($permission->for == 'other')
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" name="permission[]"
                                                                                value="{{ $permission->id }}"
                                                                                @foreach ($role->permissions as $role_permit)
															@if ($role_permit->id == $permission->id)
																checked
															@endif @endforeach>{{ $permission->name }}</label>
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
                        <!-- /.content -->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
