@extends('layout.admin_dashboard')

@section('content')

<div class="p-5">
    <div class="bg-white rounded-3 border px-3">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3">
            <h1 class="fw-bold">Orders</h1>
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
                    <tr>
                        <td>1</td>
                        <td>Frendy</td>
                        <td>Regular Laundry</td>
                        <td>Oct 12, 2024</td>
                        <td>3.4 KG</td>
                        <td>Rp17.000,00</td>
                        <td><div class="badge rounded-pill text-bg-warning h-50">On Progress</div></td>
                        <td>
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Doe</td>
                        <td>Next Day Laundry</td>
                        <td>Oct 12, 2024</td>
                        <td>3.4 KG</td>
                        <td>Rp17.000,00</td>
                        <td><div class="badge rounded-pill text-bg-success h-50">Finished</div></td>
                        <td>
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Andela</td>
                        <td>Regular Laundry</td>
                        <td>Oct 12, 2024</td>
                        <td>3.4 KG</td>
                        <td>Rp17.000,00</td>
                        <td><div class="badge rounded-pill text-bg-warning h-50">On Progress</div></td>
                        <td>
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dolores</td>
                        <td>Regular Laundry</td>
                        <td>Oct 12, 2024</td>
                        <td>3.4 KG</td>
                        <td>Rp17.000,00</td>
                        <td><div class="badge rounded-pill text-bg-success h-50">Finished</div></td>
                        <td>
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Prada</td>
                        <td>Same Day Laundry</td>
                        <td>Oct 12, 2024</td>
                        <td>3.4 KG</td>
                        <td>Rp17.000,00</td>
                        <td><div class="badge rounded-pill text-bg-success h-50">Finished</div></td>
                        <td>
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Joni</td>
                        <td>Next Day Laundry</td>
                        <td>Oct 12, 2024</td>
                        <td>3.4 KG</td>
                        <td>Rp17.000,00</td>
                        <td><div class="badge rounded-pill text-bg-warning h-50">On Progress</div></td>
                        <td>
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Renzi</td>
                        <td>Regular Laundry</td>
                        <td>Oct 12, 2024</td>
                        <td>3.4 KG</td>
                        <td>Rp17.000,00</td>
                        <td><div class="badge rounded-pill text-bg-warning h-50">On Progress</div></td>
                        <td>
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection