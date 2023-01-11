@extends('admin.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Subscribers</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Subscribers</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Users Subscribed</h5>

                    <!-- Table with hoverable rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">subscribed user</th>
                                {{-- <th scope="col">Phone no.</th> --}}
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($show as $data)
                                <tr>
                                    <td>{{ $data->id }} </td>
                                    <td>{{ $data->email }}</td>
                                    {{-- <td>{{ $data->phone }}</td> --}}
                                    <td>

                                        <a class="btn btn-danger">email<i class="bi bi-envelope-open-fill"></i></a>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->
                    <button type="button" onclick="getLocation()">Check location</button>
                </div>
            </div>
        </section>

    </main>
@endsection
