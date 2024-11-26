@extends('layout.app_user')

@section('content')

<style>
    .main-bg {
        background-image: url("images/hero2.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .title {
        font-size: 5.5rem;
        text-shadow: 2px 2px #1a457d;
        font-family: "Bagel Fat One", system-ui;
        font-weight: 400;
    }
    .hero-desc{
        width:50%;
    }
    .subtitle{
        font-family: "Bagel Fat One", system-ui;
        font-size: 4rem;
        color: #31ccd5;
    }
    .service-title {
        font-size: 2rem;
    }
    .service-feature {
        font-size: 1.2rem;
    }
    .how-it-works{
        background-image: url("images/how-it-works.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .how-it-works-card {
        background-color: rgba(255, 255, 255, 0.7) !important; 
        width:40%;
    }
    @media only screen and (max-width: 600px) {
        .title {
            font-size: 4rem;
        }
        .hero-desc{
            width:100%;
        }
        .subtitle {
            font-size: 3rem;
        }
        .service-title {
            font-size: 1.2rem;
        }
        .service-feature {
            font-size: 1rem;
        }
    }
</style>
<div class="main-bg vh-100 d-flex justify-content-center align-items-md-end align-items-center text-center flex-column px-5">
    <h1 class="title text-info">LOVELY LAUNDRY</h1>
    <h3 class="fs-1 fw-bold">Clean, Fast, and Reliable</h3>
    <p class="hero-desc fw-bold text-center text-md-end">We take care of every detail of your garments, from washing and ironing to folding, all with the utmost attention and the highest quality.</p>
</div>
<div class="min-vh-100 bg-info-subtle d-flex justify-content-center align-items-center flex-column p-5">
    <h1 style="" class="mb-5 subtitle text-center">Why Choose Us?</h1>
    <div class="d-flex flex-column flex-md-row gap-5 justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center w-md-25 text-center">
            <div style="font-size:8rem; color: #31ccd5;">
                <i class ="fas fa-star"></i>
            </div>
            <h3>TOP QUALITY MACHINES</h3><br>
            <p>Industrial grade commercial laundry machines.</p>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center w-md-25 text-center">
            <div style="font-size:8rem; color: #31ccd5;">
                <i class ="fas fa-soap"></i>
            </div>
            <h3>ECO FRIENDLY DETERGENTS</h3><br>
            <p>Cleans up with zero waste on environment.</p>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center w-md-25 text-center">
            <div style="font-size:8rem; color: #31ccd5;">
                <i class ="fas fa-car"></i>
            </div>
            <h3>PICK UP AND DELIVERY SERVICES</h3><br>
            <p>Reliable, trustworthy, and background tested personnel.</p>
        </div>
        
    </div>
</div>
<div class="min-vh-100 d-flex gap-3 flex-column justify-content-center align-items-center flex-column px-5 py-3">
    <h1 style="" class="subtitle">Services</h1>
    <div class="d-flex flex-column flex-md-row gap-3 gap-md-5 justify-content-center align-items-center">
        <div class="card px-2 bg-info-subtle">
            <div class="card-body text-center">
                <h2 class="card-title mb-3 fw-bold service-title">
                    Regular Laundry
                </h2>
                <div class="card-text d-flex flex-column align-items-start gap-2">
                    <div class="d-flex gap-2 justify-content-center align-items-center align-items-md-start text-start gap-3 service-feature text-muted">
                        <div>
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            48 - 72 hours turnaround time
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center align-items-center align-items-md-start text-start gap-3 service-feature text-muted">
                        <div>
                        <i class="fa-solid fa-hands-bubbles"></i>
                        </div>
                        <div class="">
                            Wash + Tumble Dry + Press + Fold
                        </div>
                    </div>
                </div>
                <h3 class="fw-bold my-4">Rp5.000,00/KG</h3>
                <a href="{{ url('/user/order') }}" class="btn btn-info rounded-pill">Order Now</a>
            </div>
        </div>
        <div class="card px-2 bg-info-subtle">
            <div class="card-body text-center">
                <h2 class="card-title mb-3 fw-bold service-title">
                    Same Day Laundry
                </h2>
                <div class="card-text d-flex flex-column align-items-start gap-2 service-feature">
                    <div class="d-flex gap-2 justify-content-center align-items-start text-start gap-3 text-muted">
                        <div>
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            8 hours turnaround time
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center align-items-start text-start gap-3 text-muted">
                        <div>
                            <i class="fa-solid fa-hands-bubbles"></i>
                        </div>
                        <div>
                            Wash + Tumble Dry + Press + Fold
                        </div>
                    </div>
                </div>
                <h3 class="fw-bold my-4">Rp9.000,00/KG</h3>
                <a href="{{ url('/user/order') }}" class="btn btn-info rounded-pill">Order Now</a>
            </div>
        </div>
        <div class="card px-2 bg-info-subtle">
            <div class="card-body text-center">
                <h2 class="card-title mb-3 fw-bold service-title">
                    Next Day Laundry
                </h2>
                <div class="card-text d-flex flex-column align-items-start gap-2 service-feature">
                    <div class="d-flex gap-2 justify-content-center align-items-start text-start gap-3 text-muted">
                        <div>
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            24 - 30 hours turnaround time
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center align-items-start text-start gap-3 text-muted">
                        <div>
                            <i class="fa-solid fa-hands-bubbles"></i>
                        </div>
                        <div>
                            Wash + Tumble Dry + Press + Fold
                        </div>
                    </div>
                </div>
                <h3 class="fw-bold my-4">Rp6.000,00/KG</h3>
                <a href="{{ url('/user/order') }}" class="btn btn-info rounded-pill">Order Now</a>
            </div>
        </div>
        
    </div>
    <div class="d-flex flex-column flex-md-row gap-3 gap-md-5 justify-content-center text-start align-items-center">
        <div class="card px-2 bg-info-subtle">
            <div class="card-body text-center">
                <h2 class="card-title mb-3 fw-bold service-title">
                    Dry Cleaning
                </h2>
                <div class="card-text d-flex flex-column align-items-start gap-2 service-feature">
                    <div class="d-flex gap-2 justify-content-center align-items-start text-start gap-3 text-muted">
                        <div>
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            48 - 72 hours turnaround time
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center align-items-start text-start gap-3 text-muted">
                        <div>
                            <i class="fa-solid fa-hands-bubbles"></i>
                        </div>
                        <div>
                            Wash + Tumble Dry + Press + Fold
                        </div>
                    </div>
                </div>
                <h3 class="fw-bold my-4">Rp3.500,00/KG</h3>
                <a href="{{ url('/user/order') }}" class="btn btn-info rounded-pill">Order Now</a>
            </div>
        </div>
        <div class="card px-2 bg-info-subtle">
            <div class="card-body text-center">
                <h2 class="card-title mb-3 fw-bold">
                    Iron Cleaning
                </h2>
                <div class="card-text d-flex flex-column align-items-start gap-2">
                    <div class="d-flex gap-2 justify-content-center align-items-start text-start gap-3 text-muted">
                        <div>
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            48 - 72 hours turnaround time
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center align-items-center align-items-md-start gap-3 text-start text-muted">
                        <div>
                            <i class="fa-solid fa-hands-bubbles"></i>
                        </div>
                        <div class="fs-6">
                            Wash + Tumble Dry + Press + Fold
                        </div>
                    </div>
                </div>
                <h3 class="fw-bold my-4">Rp4.000,00/KG</h3>
                <a href="{{ url('/user/order') }}" class="btn btn-info rounded-pill">Order Now</a>
            </div>
        </div>
    </div>
</div>
<div class="vh-100 how-it-works d-flex align-items-center p-4">
    <div class="card p-3 how-it-works-card">
        <h1 class="text-center my-3 subtitle text-black">How It Works</h1>
        <div style="font-size:1.2rem;">
            <ul style="list-style-type:disc;">
                <li class="my-2">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Book Online</div>
                        Choose the service you need.
                    </div>
                </li>
                <li class="my-2">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Pickup & Delivery</div>
                        We pick up your laundry from home or office.
                    </div>
                </li>
                <li class="my-2">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Wash & Dry</div>
                        Your clothes are cleaned with the best quality care
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection