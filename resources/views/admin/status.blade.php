@extends('admin.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Status</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('admin/index')}}">Home</a></li>
                    <li class="breadcrumb-item active">User Files Status</li>
                </ol>
            </nav>
            <p class="card-description">
                @if (Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
            </p>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-lg-6">
                
                            <h5 class="card-title">User files uploaded</h5>
                        </div>
                    
                            <div class="col-lg-6 ">
                                <form class="float-end" action="{{ url('admin/searchfile') }}" method="GET" style="margin: 20px">

                                    <div class="input-group ">
                                        <div class="form-outline ">
                                            <input type="search" name="search" placeholder="Search" id="form1" class="form-control" />
    
                                        </div>
                                        <button class="btn btn-primary " type="submit"><i
                                                class="bi bi-search"></i></button>
                                        </button>
                                    </div>
                                </form>
                    </div>
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Upload Status</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                                <form method="get" action="{{ url('admin/upload_user/' . $file->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <tr>
                                        <th scope="row">{{ $file->id }}</th>
                                        {{-- <input name="fid" value="{{$file->id}}"   hidden/> --}}
                                        <td>
                                            @if ($file->status == 0)
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="status" disabled hidden><i class="bi bi-bookmark-check" style="color: red"></i>
                                            @else
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="status" checked disabled hidden><i class="bi bi-bookmark-check-fill" style="color: rgb(45, 142, 207)"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @foreach (json_decode($file->filenames) as $item)
                                                {{-- <embed src="{{ '../../public/files/' . $item }}" width="100px" height="100px" /> --}}
                                                {{ $item }}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @if ($file->status == 0)
                                                <button class="btn btn-rounded btn-primary" type="submit">Upload data
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">{{ $files->links() }}</div>
                    <!-- End Table with hoverable rows -->
                </div>
            </div>
        </section>

    </main>
@endsection
