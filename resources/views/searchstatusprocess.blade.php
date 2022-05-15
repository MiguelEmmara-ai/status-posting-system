@extends('layouts.main')

@section('container')
    @include('partials.nav')

    <section class="newsletter-subscribe">
        <div class="container text-center">
            <div class="intro">
                <h2 class="text-center">Search For Status<br></h2>
                <p class="text-center">Status Information<br></p>


                @if (count($posts) > 0)
                    @foreach ($posts as $post)
                        <div class="d-flex justify-content-center">
                            <div class="card w-75" style="width: 10rem;">
                                <div class="card-body">
                                    Status: {{ $post->status_content }}
                                    <br>
                                    Status Code: {{ $post->status_code }}
                                    <br>
                                    <br>
                                    Share: {{ $post->share }}
                                    <br>
                                    Date Posted: {{ $post->input_date }}
                                    <br>
                                    Permission: {{ $post->permission }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="container d-flex justify-content-center">
                        <div class="row">
                            <div class="col"><img src="https://c.tenor.com/pnjwPjNNxq8AAAAi/doraemon-manga.gif"
                                    alt="Sad Doraemon" width="250" height="250"> <br>Status not found. Please try a
                                different keyword</div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
        <div class="container mt-5 d-grid gap-2 d-md-block">
            <a class="btn btn-success" role="button" href="/searchstatusform">Search For Another Status</a>
            <a class="btn btn-danger float-end" role="button" href="/"
                style="margin: 14px 0px 0px 5px;margin-left: 0px;background: var(--bs-red);">Return To Home</a>
        </div>
    </section>
@endsection
