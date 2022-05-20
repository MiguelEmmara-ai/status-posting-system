@extends('layouts.main')

@section('container')
    @include('partials.nav')
    <section class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center">About This Assignment<br></h1>
                    </div>
                    <div class="text">
                        <p>1. What special features have you done, or attempted, in creating the site that we should know
                            about?<br>- Bootstrap, little bit of css styling, and I tried to make the UI better<br><br>2.
                            Which parts did you have trouble with?<br>-
                            MYSQL
                            <br><br>3. What would you like to do better next time?<br>- Better UI, More Organize Mysql and
                            the Query, CSS, Better and Cleaner PHP Code<br><br>4. What referenced/sources you have used to
                            help you learn how to create your
                            website?
                            <br>- Github, StackOverflow, W3S, Getbootstrap<br><br>5. What you have learn along the way?<br>-
                            HTML 5, CSS, BOOTSTRAP, PHP, MYSQL<br>
                        </p>
                        <figure class="figure d-block"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
