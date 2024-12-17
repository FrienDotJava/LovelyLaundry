@extends('layout.app_user')

@section('content')

use Carbon\Carbon;

<div class="d-flex flex-column justify-content-center align-items-center py-5">
    <div class="pt-5 d-flex justify-content-between w-75 align-items-center">
        <h1 class="fw-bold" style="font-family: 'Bagel Fat One', system-ui; color: #1e3463;">My Order</h1>
        <a href="{{ route('order.create') }}" class="btn" style="height:fit-content; background-color: #1e3463; color: white;">New Order</a>
    </div>
    <div class="d-flex flex-column gap-4 w-75 bg-info-subtle rounded-2 p-5">
        @forelse ($order as $item)
        <div class="d-flex flex-column">
            <div class="d-flex flex-column flex-md-row gap-md-4 justify-content-between align-items-start align-items-md-center mb-2 mb-md-0">
                <h3>{{$item->layanan->nama_layanan}}</h3>
                <p class="text-muted fs-5">{{ \Carbon\Carbon::parse($item->tanggal_pickup)->format('j F Y') }}</p>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 gap-md-0">
                <div>Weight: {{$item->berat}} kg</div>
                @if($item->status == 'Waiting Pickup' || $item->status == 'On Progress')
                    <div class="badge rounded-pill text-bg-warning h-50 fs-6">{{$item->status}}</div>
                @else
                    <div class="badge rounded-pill text-bg-success h-50 fs-6">{{$item->status}}</div>
                @endif
            </div>
            @if($item->status == 'Finished')
            <div>
                <form action="{{ route('createTransaction', $item->id) }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-info float-right mt-2">Pay and Request Delivery</button>
                </form>
                <!-- <form action="{{ route('handleDeliver', ['id' => $item->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info float-right mt-2">Pay and Request Delivery</button>
                </form> -->
            </div>
            @endif
        </div>
        <hr class="mt-0">
        @empty
        <h3>No Orders</h3>
        @endforelse
    </div>
</div>

@endsection