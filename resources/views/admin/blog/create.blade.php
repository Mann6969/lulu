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
            <h1><i class="fa fa-ticket" aria-hidden="true"></i>Create Blog</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blogs</a></li>
                    <li class="breadcrumb-item active">Create blogs</li>
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
                                    <h3 class="box-title">Create blog</h3>
                                </div>
                                @include('admin.includes.messages')
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="{{ route('blog.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Blog Title</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                    placeholder="Title">
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Blog Sub Title</label>
                                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                                    placeholder="Sub Title">
                                            </div>

                                            <div class="form-group">
                                                <label for="slug">Blog Slug</label>
                                                <input type="text" class="form-control" id="slug" name="slug">
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="meta_key">Meta Key</label>
                                                <input type="text" class="form-control" id="meta_key" name="meta_key"
                                                    placeholder="Meta Key">
                                            </div>

                                            <div class="form-group">
                                                <label for="meta_description">Meta Description</label>
                                                <input type="text" class="form-control" id="meta_description"
                                                    name="meta_description" placeholder="Meta Description">
                                            </div>

                                            <!-- <div class="form-group">
                                                <label for="posted_by">Posted By</label>
                                                <input type="text" class="form-control" id="posted_by" name="posted_by">
                                            </div>
 -->
                                        </div>
                                        <div class="col-lg-6">
                                            <br>
                                            <div class="form-group">
                                                <div class="pull-right">
                                                    <label for="image">File input</label>
                                                    <input type="file" name="image" id="image">
                                                </div>
                                                <div class="checkbox pull-left">
                                                    <label>
                                                        <input type="checkbox" name="status" value="1"> Publish
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group" style="margin-top:18px;">
                                                <label>Select Tags</label>
                                                <select class="form-control select2" multiple=""
                                                    data-placeholder="Select a State" style="width: 100%;" tabindex="-1"
                                                    aria-hidden="true" name="tags[]">
                                                    {{-- @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach --}}
                                                </select>
                                            </div>
                                            <div class="form-group" style="margin-top:18px;">
                                                <label>Select Category</label>
                                                <select class="form-select" 
                                                    data-placeholder="Select a State" style="width: 100%;" tabindex="-1"
                                                    aria-hidden="true" name="categories[]">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Blog content                                                
                                            </h3>
                                            <!-- tools box -->
                                            <div class="pull-right box-tools">
                                                <button type="button" class="btn btn-default btn-sm"
                                                    data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                    <i class="fa fa-minus"></i></button>
                                            </div>
                                            <!-- /. tools -->
                                        </div>
                                        <!-- /.box-header -->

                                    
                                    <div class="box-body pad">
                                        <textarea class="" name="editor1" id="editor1" rows="10" cols="80">
                                            <p>Hello World!</p>
                                                <p>This is TinyMCE <strong>full</strong> editor</p>
                        <blockquote>
                          O Captain! My Captain! our fearful trip is done;
                          <br> The ship has weather'd every rack, the prize we sought is won;
                          <br> The port is near, the bells I hear, the people all exulting,
                          <br> While follow eyes the steady keel, the vessel grim and daring:
                          <br>
                          <br> But O heart! heart! heart!
                          <br> O the bleeding drops of red,
                          <br> Where on the deck my Captain lies,
                          <br> Fallen cold and dead.
                          <br>
                        </blockquote>
                        <em>Walt Whitman</em>
                      </textarea>
                                    </div>
                            </div>

                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary">
                                <a href='{{ route('blog.index') }}' class="btn btn-danger">Cancel</a>
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
    <!-- bootstrap color picker -->
    <script src="{{ asset('admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}">
    </script>
    <!-- bootstrap time picker -->
    <script src="{{ asset('admin/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
    </script>
@endsection
