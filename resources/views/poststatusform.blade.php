{{-- TODO --}}
@extends('layouts.main')

@section('container')
    @include('partials.nav')
    <section class="contact-clean">
        <form action="/poststatusform" method="POST">
            @csrf

            <h2 class="text-center">Post A New Status</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="mb-3">
                <h1>Status Form</h1>

                <input class="form-control @error('status_code') is-invalid @enderror" type="text" name="status_code"
                    placeholder="Status Code (required)" required>
                @error('status_code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" name="status_content" placeholder="Status (required)" required>
            </div>
            <h1>Options</h1>
            <div class="mb-3">
                <p>Shares</p>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="share" id="shareRadio1" value="Public">
                    <label class="form-check-label" for="shareRadio1">Public</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="share" id="shareRadio2" value="Friends">
                    <label class="form-check-label" for="shareRadio2">Friends</label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="share" id="shareRadio3" value="Only Me">
                    <label class="form-check-label" for="shareRadio3">Only Me</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="statusCode" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-10">
                    <input type="date" name="input_date" value={{ $date = date('Y-m-d') }} d="date">
                </div>
            </div>
            <div class="mb-3">
                <p>Permission Type<br></p>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="permission[]" id="permissionBox1"
                        value="Allow Like">
                    <label class="form-check-label" for="permissionBox1">Allow Like</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="permission[]" id="permissionBox2"
                        value="Allow Comment">
                    <label class="form-check-label" for="permissionBox2">Allow Comment</label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="checkbox" name="permission[]" id="permissionBox3"
                        value="Allow Share">
                    <label class="form-check-label" for="permissionBox3">Allow Share</label>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">send</button>
                <button class="btn btn-danger float-end" type="reset"
                    style="margin: 14px 0px 0px 5px;margin-left: 0px;background: var(--bs-red);">Reset</button>
            </div>
            <div class="d-flex d-xxl-flex justify-content-xxl-center mb-3">
                <a class="btn btn-primary flex-fill" role="button" href="/" style="margin-left: 5px;">Return
                    home</a>
            </div>
        </form>
    </section>
@endsection
