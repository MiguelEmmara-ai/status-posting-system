@extends('layouts.main')

@section('container')
    @include('partials.homeHeader')

    <section class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center"><strong>Acknowledgment</strong><br></h2>
                <p class="text-center"><em>I Declare that this assignment is my individual work. I have not worked
                        collaboratively nor have I copied from any other student's work or from any other source.</em><br>
                </p>
            </div>
            <div class="buttons">
                <a class="btn btn-primary" role="button" href="/about">About This assignment</a>
            </div>
        </div>
    </section>
@endsection
