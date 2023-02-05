<html lang="en">

@include('parts.header')

<body data-layout="detached" data-topbar="colored">



<!-- <body data-layout="horizontal" data-topbar="dark"> -->
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">

                    <div class="card-body">

                        <div class="text-center p-3">


                            <h1 class="error-page mt-5"><span>404!</span></h1>
                            <h4 class="mb-4 mt-5">{{ __('Sorry, page not found') }}</h4>
                            <p class="mb-4 w-75 mx-auto">{{ __('It will be as simple as Occidental in fact, it will
                                Occidental to an English person') }}</p>
                            <a class="btn btn-primary mb-4 waves-effect waves-light" href="{{ route('index') }}"><i
                                    class="mdi mdi-home"></i>{{ __('Go to main page') }}</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<!-- JAVASCRIPT -->
@include('parts.scripts')

</body>

</html>
