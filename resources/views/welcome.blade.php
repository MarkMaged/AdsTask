@extends('layout.main-layoy')

@section('title', 'Home')

@section('content')
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">A warm welcome!</h1>
                    <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component
                        has been removed from the framework. Why create custom CSS when you can use utilities?</p>
                    <a class="btn btn-primary btn-lg" href="{{ route('ads.index') }}">My Ads</a>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="bg-wiht w-75">
                    <h2>Category</h2>
                    <form action="{{ route('search_category') }}" method="get">
                        <select name="category" id="category" class="form-control">
                            <option value="All">All</option>
                            <option value="Cars">Car</option>
                            <option value="Sport">Sport</option>
                            <option value="Nature">Nature</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-3">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-10">
                <div class="row">


                    @foreach ($ads as $ad)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img src="{{ url('storage/' . $ad->image) }}" alt="" srcset=""
                                    class="w-100" />
                                <div class="card-body">
                                    <h3 class="card-text">{{ $ad->title }}</h3>
                                    <p class="card-text">{{ $ad->description }} ..</p>
                                    <div class="d-flex justify-content-between align-items-center flex-column">
                                        <p>Category : {{ $ad->category }}</p>
                                        <p>Tags : {{ $ad->tags }}</p>
                                    </div>
                                    <a class="btn btn-primary" href="{{ route('singel.page.ad', $ad->id) }}">Read more →</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
