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
            <h1><i class="fa fa-ticket" aria-hidden="true"></i>Edit Blog</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blogs</a></li>
                    <li class="breadcrumb-item active">Edit blogs</li>
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
                                    <h3 class="box-title">Edit blog</h3>
                                </div>
                                @include('admin.includes.messages')
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="{{ route('blog.update', $post->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    {{-- {{ csrf_field() }} --}}
                                    {{-- {{ method_field('PATCH') }} --}}
                                    <div class="box-body">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Post Title</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                    placeholder="Title" value="{{ $post->blog_title }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="subtitle">Post Sub Title</label>
                                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                                    placeholder="Sub Title" value="{{ $post->subtitle }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="slug">Post Slug</label>
                                                <input type="text" class="form-control" id="slug" name="slug"
                                                    placeholder="Slug" value="{{ $post->slug }}">
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="meta_key">Meta Key</label>
                                                <input type="text" class="form-control" id="meta_key" name="meta_key" value="{{ $post->meta_key }}" 
                                                    placeholder="Meta Key">
                                            </div>

                                            <div class="form-group">
                                                <label for="meta_description">Meta Description</label>
                                                <input type="text" class="form-control" id="meta_description"
                                                    name="meta_description" value="{{ $post->meta_description }}" placeholder="Meta Description">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <br>
                                            <div class="form-group">
                                                <div class="pull-right">
                                                    <label for="image">File input</label>
                                                    <input type="file" name="image" id="image">{{ $post->image }}
                                                </div>
                                                <div class="checkbox pull-left">
                                                    <label>
                                                        <input type="checkbox" name="status" value="1"
                                                            @if ($post->status == 1) {{ 'checked' }} @endif>
                                                        Publish
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            
                                            <div class="form-group" style="margin-top:18px;">
                                                <label>Select Category</label>
                                                <select class="form-select" data-placeholder="Select a State"
                                                    style="width: 100%;" tabindex="-1" aria-hidden="true"
                                                    name="categories[]">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            @if($category->id == $post->cid){{'selected'}}    
                                                            @endif>
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Write Post Body Here
                                                <small>Simple and fast</small>
                                            </h3>
                                            <!-- tools box -->
                                            <div class="pull-right box-tools">
                                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                    <i class="fa fa-minus"></i></button>
                                            </div>
                                            <!-- /. tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body pad">
                                            <textarea name="body"
                                                style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                                id="editor1">{{ $post->body }}</textarea>
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-rounded btn-success">Update</button>
                                        <a href='{{ route('blog.index') }}' class="btn btn-warning">Back</a>
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
        <!-- <div class="form-group" style="margin-top:18px;">
                          <label>Select Tags</label>
                          <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                            {{-- @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                      @foreach ($post->tags as $postTag)
                        @if ($postTag->id == $tag->id)
                          selected
                        @endif
                      @endforeach
                    >{{ $tag->name }}</option>
                    @endforeach --}}
                          </select>
                        </div> -->
    @endsection
    @section('footerSection')
        <script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
        <script>
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".select2").select2();
            });
        </script>
    @endsection
