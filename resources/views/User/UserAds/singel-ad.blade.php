@extends('layout.main-layoy')

@section('title', 'The Ad')


@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">

                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $ad->title }}</h1>
                    </header>
                    <!-- Preview image figure-->
                    <img style="width: 800px" src="{{ url('storage/' . $ad->image) }}" alt="" srcset="">
                    <!-- Post content-->
                    <section class="mt-5">
                        <p class="fs-5 mb-4">
                            {{ $ad->description }}
                        </p>
                    </section>
                </article>

            </div>

        </div>
    </div>




@endsection
