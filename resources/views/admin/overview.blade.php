@extends('layout.admin_dashboard')

@section('content')

<div class="p-5">
    <div class="bg-white rounded-3 border">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3 mx-3 ">
            <h1 class="fw-bold">Overview</h1>
            <h5 class="text-muted">{{$month}} {{$year}}</h5>
        </div>
        <hr class="mx-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-center">
                <h3>Jumlah User</h3>
                <div class="card rounded-circle p-4 fs-3 border border-3 border-info text-center" style="width:6rem; height:6rem;">
                    {{$userCount}}
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-center">
                <h3>Orders On Process</h3>
                <div class="card rounded-circle p-4 fs-3 border border-3 border-danger text-center" style="width:6rem; height:6rem;">
                    {{$onprocess}}
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-center">
                <h3>Total Orders</h3>
                <div class="card rounded-circle p-4 fs-3 border border-3 border-success text-center" style="width:6rem; height:6rem;">
                    {{$allorder}}
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 bg-white rounded-3 border">
        <div class="d-flex flex-column justify-content-center align-items-start mt-3 mx-3 ">
            <h1 class="fw-bold">Financial Report: {{$month}} {{$year}}</h1>
            <h1 class="fw-bold">Total: <span style="color: #5FBDFF;">Rp{{ number_format($totalRev, 0, ',', '.') }},00</span></h1>
        </div>
        <hr class="mx-5">
        <div class="d-flex flex-column justify-content-center align-items-center gap-2">
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-2 gap-md-5">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="card rounded-2 p-4 border border-3 border-info text-center">
                        <h5>Regular Laundry</h5>
                        <hr class="my-2">
                        <p class="fw-bold fs-3">Rp{{ number_format($regular, 0, ',', '.') }},00</p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="card rounded-2 p-4 border border-3 border-info text-center">
                        <h5>Next Day Laundry</h5>
                        <hr class="my-2">
                        <p class="fw-bold fs-3">Rp{{ number_format($nextDay, 0, ',', '.') }},00</p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="card rounded-2 p-4 border border-3 border-info text-center">
                        <h5>Same Day Laundry</h5>
                        <hr class="my-2">
                        <p class="fw-bold fs-3">Rp{{ number_format($sameDay, 0, ',', '.') }},00</p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-2 gap-md-5">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="card rounded-2 p-4 border border-3 border-info text-center">
                        <h5>Dry Cleaning</h5>
                        <hr class="my-2">
                        <p class="fw-bold fs-3">Rp{{ number_format($dry, 0, ',', '.') }},00</p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="card rounded-2 p-4 border border-3 border-info text-center">
                        <h5>Iron Cleaning</h5>
                        <hr class="my-2">
                        <p class="fw-bold fs-3">Rp{{ number_format($iron, 0, ',', '.') }},00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection