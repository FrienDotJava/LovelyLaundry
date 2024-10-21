@extends('layout.app_user')

@section('content')

<div class="py-5 d-flex flex-column justify-content-center align-items-center" style="margin-bottom:5.7rem;">
    <div class="d-flex justify-content-between w-75 align-items-center mt-5">
        <h1 class="fw-bold">Finished Orders</h1>
    </div>
    <div class="d-flex flex-column gap-4 w-75 bg-info-subtle rounded-2 p-5">
        <div class="d-flex flex-column">
            <div class="d-flex flex-column flex-md-row gap-md-4 align-items-start align-items-md-center mb-2 mb-md-0">
                <h3>Next Day Laundry</h3>
                <div class="badge rounded-pill text-bg-success h-50">Delivered</div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 gap-md-0">
                <div>Weight: 2 kg x Rp6.000,00</div>
                <h4>Rp12.000,00</h4>
            </div>
        </div>
        <hr class="mt-0">
    </div>
</div>

@endsection