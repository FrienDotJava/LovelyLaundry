@extends('layout.app')

@section('content')



<div class="py-5 d-flex flex-column justify-content-center align-items-center">
    <h1 class="fw-bold mt-5">Input Order Laundry</h1>
    <div class="d-flex flex-column gap-4 w-75 bg-info-subtle rounded-2 p-5">
        <form action="{{ url('dash/order') }}" >
            <label for="service" class="fs-4 fw-normal">Choose Laundry Service</label>
            <div class="mt-1 row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-3">
                <div class="col">
                    <input class="form-check-input" type="radio" name="service" id="regular">
                    <label class="form-check-label" for="regular">
                        Regular Laundry
                    </label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="radio" name="service" id="nextDay">
                    <label class="form-check-label" for="nextDay">
                        Next Day Laundry
                    </label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="radio" name="service" id="sameDay">
                    <label class="form-check-label" for="sameDay">
                        Same Day Laundry
                    </label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="radio" name="service" id="dryCleaning">
                    <label class="form-check-label" for="dryCleaning">
                        Dry Cleaning
                    </label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="radio" name="service" id="iron">
                    <label class="form-check-label" for="iron">
                        Iron Services
                    </label>
                </div>
            </div>

            <div class="mt-4 mt-md-5 row row-cols-1 row-cols-sm-2">
                <div class="col">
                    <label for="weight" class="fs-4 fw-normal">Laundry Weight</label>
                    <input type="number" name="weight" id="weight" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-info mt-4">Submit</button>
        </form>
    </div>
</div>

@endsection