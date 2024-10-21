@extends('layout.app')

@section('content')

<div class="d-flex flex-column justify-content-center align-items-center py-5">
    <div class="pt-5 d-flex justify-content-between w-75 align-items-center">
        <h1 class="fw-bold">My Order</h1>
        <a href="{{ url('/user/makeorder') }}" class="btn btn-info" style="height:fit-content;">New Order</a>
    </div>
    <div class="d-flex flex-column gap-4 w-75 bg-info-subtle rounded-2 p-5">
        <div class="d-flex flex-column">
            <div class="d-flex flex-column flex-md-row gap-md-4 align-items-start align-items-md-center mb-2 mb-md-0">
                <h3>Same Day Laundry</h3>
                <div class="badge rounded-pill text-bg-secondary h-50">Waiting Pick Up</div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 gap-md-0">
                <div>Weight: 2 kg x Rp9.000,00</div>
                <h4>Rp18.000,00</h4>
            </div>
        </div>
        <hr class="mt-0">
        <div class="d-flex flex-column">
            <div class="d-flex flex-column flex-md-row gap-md-4 align-items-start align-items-md-center mb-2 mb-md-0">
                <h3>Regular Laundry</h3>
                <div class="badge rounded-pill text-bg-warning h-50">On Progress</div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 gap-md-0">
                <div>Weight: 4 kg x Rp5.000,00</div>
                <h4>Rp20.000,00</h4>
            </div>
        </div>
        <hr class="mt-0">
        <div class="d-flex flex-column">
            <div class="d-flex flex-column flex-md-row gap-md-4 align-items-start align-items-md-center mb-2 mb-md-0">
                <h3>Next Day Laundry</h3>
                <div class="badge rounded-pill text-bg-success h-50">Finished</div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 gap-md-0">
                <div>Weight: 2 kg x Rp6.000,00</div>
                <h4>Rp12.000,00</h4>
            </div>
            <div>
                <form action="{{ url('/user/history') }}">
                    <button type="submit" class="btn btn-info float-right">Deliver</button>
                </form>
            </div>
        </div>
        <hr class="mt-0">
    </div>
</div>

@endsection