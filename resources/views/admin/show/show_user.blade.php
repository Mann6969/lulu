@extends('admin.index')
@section('content')
    <main id="main" class="main">
        {{-- <div class="row"> --}}
        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Users Info.</li>
                </ol>
            </nav>
            <p class="card-description">
                @if (Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
            </p>

            <!-- End Page Title -->

            <section class="section dashboard">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">

                                <h5 class="card-title">Users</h5>
                            </div>

                            <div class="col-lg-6 ">
                                <form class="float-end" action="{{ route('searchuser') }}" method="GET"
                                    style="margin: 20px">

                                    <div class="input-group ">
                                        <div class="form-outline ">
                                            <input type="search" name="search" placeholder="Search" id="form1"
                                                class="form-control" />

                                        </div>
                                        <button class="btn btn-primary " type="submit"><i
                                                class="bi bi-search"></i></button>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- Table with hoverable rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Phone no.</th>
                                        <th scope="col">Action</th>
                                        <th scope="col"> </th>
                                        <!-- <th scope="col">Start Date</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($show as $data)
                                        <tr>
                                            <td>{{ $data->fid }} </td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->gender }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>
                                                <a class="btn btn-success" href="{{ url('admin/view/' . $data->id) }}">View
                                                    <i class="bi bi-eye-fill"></i></a>
                                                <a class="btn btn-warning" href="{{ url('admin/edit/' . $data->id) }}">Edit
                                                    <i class="bi bi-pen"></i></a>
                                                <form id="delete-form-{{ $data->fid }}" method="post"
                                      action="{{ url('admin/show_destroy/'. $data->fid) }}" style="display: none">
                                      @csrf
                                  </form>
                                  <a href=""
                                      onclick="
                          if(confirm('Are you sure, You Want to delete this?'))
                            {
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $data->fid }}').submit();
                            }
                            else{
                              event.preventDefault();
                            }"><span
                                          class="btn btn-danger">Delete</span></a>
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <div class="row">{{ $show->links() }}</div>
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
            </section>

    </main>
@endsection
