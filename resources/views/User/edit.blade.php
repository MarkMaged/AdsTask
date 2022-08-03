@extends('layout.main-layoy')

@section('title', 'Edit My Profile')


@section('content')

    <div class="container">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2>Edit User</h2>
                <div class="card col-md-10">
                    <div class="card-body ">
                        <form class="row g-3" method="POST" action="{{ route('profile.update', $user->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="col-md-6">
                                <label for="inputName4" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName4" name="name"
                                    value="{{ old('name') ?? $user->name }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email"
                                    value="{{ old('email') ?? $user->email }}">
                            </div>

                            <div class="col-6">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password"
                                    value="{{ old('password') ?? $user->password }}">
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </main>
        </div>
    </div>


@endsection
