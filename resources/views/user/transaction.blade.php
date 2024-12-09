@extends('layout.app_user')

@section('content')

<div class="py-5 d-flex flex-column justify-content-center align-items-center">
    <h1 class="fw-bold mt-5">Payment and Request Delivery</h1>
    <div class="d-flex flex-column gap-4 w-75 bg-info-subtle rounded-2 p-5">
        <form action="{{ route('storeTransaction', $tempOrder->id) }}" method="POST">
            @csrf
            <div class="row row-cols-1 row-cols-sm-2">
                <div class="col d-flex flex-column gap-4">
                    <div>
                        <h4>Delivery Address</h4>
                        <div>
                            <i class="fas fa-pin"></i>
                            {{$user->address}}
                        </div>
                    </div>
                    <div>
                        <label for="payment-method" class="fs-4 form-label">Metode Pembayaran</label>
                        <select class="form-select" id="payment-method" name="metode">
                            <option value="Cash on Delivery">Cash on Delivery</option>
                            <option value="QRIS">QRIS</option>
                        </select>
                    </div>
                </div>
                <div class="col d-flex flex-column gap-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Payment Details</h2>
                            <hr>
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <div class="fs-4">{{$tempOrder->layanan->nama_layanan}}</div>
                                    <div class="fs-6 text-muted">Weight {{$tempOrder->berat}} kg x Rp{{ number_format($tempOrder->layanan->harga_per_unit, 0, ',', '.') }},00</div>
                                </div>
                                <div>
                                    <div class="fs-4">Rp{{ number_format($tempOrder->berat * $tempOrder->layanan->harga_per_unit, 0, ',', '.') }},00</div>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between mt-3">
                                <div>
                                    <div class="fs-4">Delivery fee</div>
                                </div>
                                <div>
                                    <div class="fs-4">Rp{{ number_format(3000, 0, ',', '.') }},00</div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex flex-row justify-content-between mt-3">
                                <div>
                                    <div class="fs-4 fw-bold">Total</div>
                                </div>
                                <div>
                                    <div class="fs-4 fw-bold">Rp{{ number_format(($tempOrder->berat * $tempOrder->layanan->harga_per_unit) + 3000, 0, ',', '.') }},00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info mt-4 float-right">Request Delivery</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection