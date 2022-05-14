@extends('layouts.main')

@section('container')
    @include('partials.nav')
    <section class="contact-clean">
        <form method="GET" action="searchstatusprocess" class="needs-validation">
            <h2 class="text-center">Search For A Status</h2>
            <div class="mb-3">
                <input class="form-control" type="text" name="status" placeholder="Enter A Status" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Search</button>
                <button class="btn btn-danger float-end" type="reset" style="margin: 14px 0px 0px 5px;margin-left: 0px;background: var(--bs-red);">Reset</button>
            </div>
            <div class="d-flex d-xxl-flex justify-content-xxl-center mb-3">
                <a class="btn btn-primary flex-fill" role="button" href="/" style="margin-left: 5px;">Return home</a>
            </div>
        </form>
    </section>
@endsection