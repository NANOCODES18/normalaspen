@extends("layouts.mylayout")
@section("pagebody")
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Aster Facial Verification</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">
                    Aster Facial Verification in collaboration with <a href="https://www.id.me/">ID.me</a> </p>
                    <p class="text-white-75 mb-5">
                        <b>VOLUNTEER SELFIE VERIFICATION PAGE</b>
                        </p>
                <form action="" method="post">
                    @csrf
                     <!-- Name input-->
                     <div class="form-floating mb-3">
                        <input class="form-control" id="code" type="text" placeholder="Enter code..." data-sb-validations="required" required />
                        <label for="name">PLEASE ENTER CODE</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A code is required.</div>
                    </div>
                    <button class="btn btn-primary btn-xl" type="submit">Check</button>
                </form>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">We've got what you need!</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Building trust with your users starts with getting to know them better. A more complete understanding of your user base is only possible with the right identity and reputation tools, With Aster enjoy Seemless Identity verification</p>
                <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Robust SAAS</h3>
                    <p class="text-muted mb-0">Our tech are updated regularly to keep them bug free and secure</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Up to Date</h3>
                    <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">World wide</h3>
                    <p class="text-muted mb-0">Availabe for use to all developed countries worldwide!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Easy to Use</h3>
                    <p class="text-muted mb-0">Identity verification made more simple</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection()
