@extends('layout.admin_dashboard')

@section('content')

<div class="p-5">
    <div class="bg-white rounded-3 border px-3">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <h1 class="fw-bold">Edit Order</h1>
        </div>
        <hr class="mx-5">
        <form id="editOrderForm" action="{{ route('order.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="order_service" class="form-label">Services</label>
                <select class="form-select" id="order_service" name="service">
                    <option value="{{ $order->layanan->id }}">{{$order->layanan->nama_layanan}}</option>
                    @foreach($layanan as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $order->layanan->id ? 'selected' : '' }}>{{ $item->nama_layanan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="order_weight" class="form-label">Weight</label>
                <input type="number" class="form-control" id="order_weight" name="weight" value="{{ $order->berat }}">
            </div>

            <div class="mb-3">
                <label for="order_date" class="form-label">Pickup Date</label>
                <input type="date" class="form-control" id="order_date" name="date" value="{{ $order->tanggal_pickup }}">
            </div>

            <div class="mb-3">
                <label for="order_service" class="form-label">Status</label>
                <select class="form-select" id="order_service" name="status">
                    <option value="{{$order->status}}">{{$order->status}}</option>
                    <option value="Waiting Pickup">Waiting Pickup</option>
                    <option value="On Progress">On Progress</option>
                    <option value="Finished">Finished</option>
                    <option value="Delivered">Delivered</option>
                </select>
            </div>

            <div class="modal-footer d-flex gap-4 mb-3">
                <a href="{{ route('order.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-info">Save changes</button>
            </div>
        </form>
    </div>
</div>
@endsection