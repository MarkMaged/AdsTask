@extends('layout.main-layoy')

@section('title', 'My Profile')

@section('content')

    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <h2>Show User
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Ads</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">{{ $user->id }}</td>
                                <td class="font-weight-bold">{{ $user->name }}</td>
                                <td class="font-weight-bold">{{ $user->email }}</td>
                                <td class="font-weight-bold">{{ $user->created_at }}</td>
                                <td class="font-weight-bold">{{ $user->updated_at }}</td>
                                <td class="font-weight-bold">
                                    @foreach ($ads as $ad)
                                        {{ $ad->title . ',' }}
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('edit', $user->id) }}" class="btn btn-outline-info btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>

@endsection
