@extends('admin.index')

@section('head')
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/permission') }}">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section files">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{-- {{ implode(' ', $errors->all(':message')) }} --}}
                            @foreach ($errors->all(':message') as $item)
                                {{ $item }}
                                <br>
                            @endforeach
                        </div>
                    @endif
                    <h5 class="card-title">Edit profiles</h5>
                </div>
            </div>
        </section>
        <section class="section upload-form">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit permission</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('permission.update', $permission->id) }}" method="post">
                            {{-- {{ csrf_field() }} --}}
                            {{-- {{ method_field('PUT') }} --}}
							@csrf
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    {{-- @include('includes.messages') --}}
                                    <div class="form-group">
                                        <label for="name">permission title</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="permission Title" value="{{ $permission->name }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="for">Permission for</label>
                                        <select name="for" id="for" class="form-control">
                                            <option selected disable value="{{ $permission->for }}">{{ $permission->for }}
                                            </option>
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
