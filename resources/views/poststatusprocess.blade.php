@extends('layouts.main')

@section('container')
    @include('partials.nav')
    <section class="contact-clean">
        <div class="container">
            <form method="POST" style="max-width: 600px;">
                @csrf

                <h2 class="text-center">Post Status Information</h2>
                <div class="mb-3">
                    @if (session()->has('success'))
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <img src="./assets/img/happy.gif" alt="Happy Animation" width="200" height="200"> <br>
                                    New Record Created Successfully.
                                    <br>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endif

                </div>
                <div class="d-grid gap-2 d-md-block">
                    <a class="btn btn-success" role="button" href="/poststatusform">Return</a>
                    <a class="btn btn-primary float-end" role="button" href="/searchstatusform">Search Post</a>
                </div>
                <div class="d-flex d-xxl-flex justify-content-xxl-center mb-3">
                    <a class="btn btn-primary flex-fill" role="button" href="/" style="margin-left: 5px;">Return home</a>
                </div>
            </form>
        </div>
    </section>
@endsection
