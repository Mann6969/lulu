@extends('admin.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Status</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">User Files Status</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User files uploaded</h5>

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
                    <!-- End Table with hoverable rows -->
                </div>
            </div>
        </section>

    </main>
@endsection
