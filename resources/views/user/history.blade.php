@extends('layout.app_user')

@section('content')

<div class="py-5 d-flex flex-column justify-content-center align-items-center" style="margin-bottom:5.7rem;">
    <div class="d-flex justify-content-between w-75 align-items-center mt-5">
        <h1 class="fw-bold">Finished Orders</h1>
    </div>
    <div class="d-flex flex-column gap-4 w-75 bg-info-subtle rounded-2 p-5">
    @forelse ($transaction as $item)
        <div class="d-flex flex-column">
            <div class="d-flex flex-column flex-md-row gap-md-4 align-items-start align-items-md-center mb-2 mb-md-0">
                <h3>{{$item->order->layanan->nama_layanan}}</h3>
                @if($item->order->status == 'Waiting Pickup' || $item->order->status == 'On Progress')
                    <div class="badge rounded-pill text-bg-warning h-50">{{$item->order->status}}</div>
                @else
                    <div class="badge rounded-pill text-bg-success h-50">{{$item->order->status}}</div>
                @endif
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 gap-md-0">
                <div>Weight: {{$item->order->berat}} kg x Rp{{ number_format($item->order->layanan->harga_per_unit, 0, ',', '.') }},00</div>
                <h4>Rp{{ number_format($item->total_biaya, 0, ',', '.') }},00</h4>
            </div>
            @if($item->order->status == 'Finished')
            <div>
                <form action="{{ route('handleDeliver', ['id' => $item->order->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info float-right">Deliver</button>
                </form>
            </div>
            @endif
        </div>
        <hr class="mt-0">
        @empty
        <h3>Data Kosong</h3>
        @endforelse
    </div>
</div>

@endsection