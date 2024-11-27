@extends('layout.admin_dashboard')

@section('content')

<div class="p-5">
    <div class="bg-white rounded-3 border px-3">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <h1 class="fw-bold">Users</h1>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <hr class="mx-5">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Service</th>
                        <th>Order Date</th>
                        <th>Weight</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($order as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->layanan->nama_layanan }}</td>
                        <td>{{ $item->tanggal_pickup }}</td>
                        <td>{{ $item->berat }} KG</td>
                        <td>Rp{{ number_format($item->total_harga, 0, ',', '.') }},00</td>
                        <td><div class="badge rounded-pill text-bg-warning h-50">On Progress</div></td>
                        <td>
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    @empty
                    <h2>Data Kosong</h2>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection