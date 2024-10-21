@extends('layout.admin_dashboard')

@section('content')

<div class="p-5">
    <div class="bg-white rounded-3 border px-3">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3">
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
                        <th>Username</th>
                        <th>Address</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Frendy</td>
                        <td>bubbabounce</td>
                        <td>Jl. Tambak Bayan</td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jono</td>
                        <td>bobujon</td>
                        <td>Jl. Tambak Raya</td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Jeni</td>
                        <td>uvuvwevwevwe</td>
                        <td>Jl. Udang Ditambak</td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Jack Cut</td>
                        <td>jakuthehe</td>
                        <td>Jl. Tambak Bayan</td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Amelia</td>
                        <td>ameliasky</td>
                        <td>Jl. Kemang Raya</td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>James</td>
                        <td>jimbob</td>
                        <td>Jl. Sudirman</td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Sophia</td>
                        <td>sophiez</td>
                        <td>Jl. Merdeka</td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Michael</td>
                        <td>mikeym</td>
                        <td>Jl. Diponegoro</td>
                        <td class="d-flex gap-2">
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