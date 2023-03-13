@extends('admin.index')

@section('head')
    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@endsection
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><i class="fa fa-ticket" aria-hidden="true"></i>Edit User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Admin User</a></li>
                    <li class="breadcrumb-item active">Edit Admin User</li>
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
                                    <h3 class="box-title">Edit user</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="{{ route('user.update', $user->id) }}" method="post">
                                    @csrf
                                    <div class="box-body">
                                        @include('admin.includes.messages')
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <div class="form-group">
                                                <label for="name">User Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="User Name"
                                                    value="@if (old('name')) {{ old('name') }}@else{{ $user->name }} @endif">
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="email"
                                                    value="@if (old('email')) {{ old('email') }}@else{{ $user->email }} @endif">
                                            </div>

                                            {{-- <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    placeholder="phone"
                                                    value="@if (old('phone')) {{ old('phone') }}@else{{ $user->phone }} @endif">
                                            </div> --}}

                                            {{-- <div class="form-group">
                                                <label for="confirm_passowrd">Status</label>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="status"
                                                            @if (old('status') == 1 || $user->status == 1) checked @endif
                                                            value="1">Status</label>
                                                </div>
                                            </div> --}}

                                            <div class="form-group">
                                                <label>Assign Role</label>
                                                <div class="row">
                                                    @foreach ($roles as $role)
                                                        <div class="col-lg-3">
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name="role[]"
                                                                        value="{{ $role->id }}"
                                                                        @foreach ($user->roles as $user_role)
															@if ($user_role->id == $role->id)
																checked
															@endif @endforeach>
                                                                    {{ $role->name }}</label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href='{{ route('user.index') }}' class="btn btn-warning">Back</a>
                                                </div>

                                            </div>

                                        </div>

                                </form>
                            </div>
                            <!-- /.box -->


                        </div>
                        <!-- /.col-->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
