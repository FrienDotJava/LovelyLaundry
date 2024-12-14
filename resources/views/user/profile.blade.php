@extends('layout.app_user')

@section('content')

<style>
    .background{
        background-image: url("../images/user-bg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        &:before {
            content: '';
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                /* background-color: rgba(30, 52, 99, 1); */
                background-image: linear-gradient(to bottom right,#1e3463,#000);
                opacity: .6; 
        }
    }
</style>

<section class="vh-100 background">
    <div class="container py-5 h-100 ">

        <!-- TOAST -->
        @if (session('success'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1055;">
            <div id="liveToast" class="toast text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif 

        <div class="row d-flex justify-content-center align-items-center h-100"> 
            @if(Auth::user()->role == 'Administrator')
                <div class="col-md-4 mb-4">
                    <div class="card mb-3 bg-info-subtle card shadow-lg" style="border-radius: 1rem;">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/user2-160x160.jpg') }}" alt="Avatar" class="img-fluid img-circle my-2 rounded-circle mb-3" style="width: 220px;" />
                            <h5 class="" style="color: #1e3463;"><strong>{{Auth::user()->name}}</strong></h5>
                            <p class="mb-2">{{Auth::user()->role}}</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-4 mb-4">
                    <div class="card mb-3 bg-info-subtle card shadow-lg" style="border-radius: 1rem;">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/user2-160x160.jpg') }}" alt="Avatar" class="img-fluid img-circle my-2 rounded-circle mb-3" style="width: 220px;" />
                            <h5 class="" style="color: #1e3463;"><strong>{{Auth::user()->name}}</strong></h5>
                            <p>{{Auth::user()->role}}</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{ route('useredit') }}" class="btn" style="height:fit-content; color:white; background-color: #1e3463;">Edit Profile</a>
                                <a href="{{ route('usereditpassword') }}" class=" btn " style="height:fit-content; color:white; background-color: #1e3463;">Change Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        
                <div class="col col-lg-14 mb-4">
                    <div class="card mb-3 bg-info-subtle card shadow-lg" style="border-radius: .5rem; height: 20rem;">
                        <div class="card-body p-4">
                            <h1 class="text-center" style="color: #1e3463; font-family: 'Bagel Fat One', system-ui;">Account Information</h1>
                            <div class="row ">
                                <div class="col-md-6 p-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-envelope fa-2x me-3 mb-3" style="color: #1e3463;"></i>
                                        <div>
                                            <h6><strong>Email</strong></h6>
                                            <p class="text-muted">{{Auth::user()->email}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-phone fa-2x me-3 mb-3" style="color: #1e3463;"></i>
                                        <div>
                                            <h6><strong>Phone Number</strong></h6>
                                            <p class="text-muted">{{Auth::user()->noHp}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-location-dot fa-2x me-4 mb-3" style="color: #1e3463;"></i>
                                        <div>
                                            <h6><strong>Address</strong></h6>
                                            <p class="text-muted">
                                                {{Auth::user()->address}}    
                                            </p>
                                        </div>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastUp = document.getElementById('liveToast');
        if (toastUp) {
            var toast = new bootstrap.Toast(toastUp, {
                delay: 2000
            });
            toast.show();
        }
    });
</script>