@if(Auth::check())
@extends('layout.app_user')
@else
@extends('layout.app')
@endif

@section('content')

<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
            <h1 class="text-center">Account Information</h1>
            <div class="card mb-3 bg-info-subtle" style="border-radius: .5rem;">
            <div class="row g-0">
                <div class="col-md-4 gradient-custom text-center"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="{{ asset('img/user2-160x160.jpg') }}"
                    alt="Avatar" class="img-fluid img-circle my-5" style="width: 80px;" />
                <h5>{{Auth::user()->name}}</h5>
                <p>{{Auth::user()->role}}</p>
                </div>
                <div class="col-md-8">
                <div class="card-body p-4">
                    <div class="row pt-1">
                        <div class="col-7 mb-3">
                            <h6>Email</h6>
                            <p class="text-muted">{{Auth::user()->email}}</p>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Phone Number</h6>
                            <p class="text-muted">0821-5404-3323</p>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-8 mb-3">
                            <h6>Address</h6>
                            <p class="text-muted">
                                742 Evergreen Terrace, Apartment 4B <br>
                                Springfield, CA 95820 <br>
                                United States of America</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection