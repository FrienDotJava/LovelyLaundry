@extends('layout.admin_dashboard')

@section('content')

<div class="p-5">
    <div class="bg-white rounded-3 border px-3">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3">
            <h1 class="fw-bold">Users</h1>
            <form class="d-flex" role="search" action="{{ route('searchuser') }}">
                <input class="form-control me-2" name="name" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" >Search</button>
            </form>
        </div>
        <hr class="mx-5">

        <!-- TOAST -->
        @if (session('success'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1055;">
            <div id="liveToast" class="toast text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif 

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->noHp }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <form id="deleteForm{{ $item->id }}" action="{{ route('deleteuser', $item->id) }}" method="POST" class="d-flex gap-3"> 
                                <a class="btn btn-info" href="{{route('edituser', $item->id)}}" >
                                    <i class="fas fa-pen-to-square"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>

                        <!-- MODAL DELETE -->
                        <div class="modal fade" id="modalDelete{{ $item->id }}" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this user?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteForm{{ $item->id }}').submit();">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>

                    @empty
                    <div class="alert alert-danger">
                        No Data Available
                    </div>
                    @endforelse
                </tbody>
            </table>
            <div class="pagination">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastDel = document.getElementById('liveToast');
        if (toastDel) {
            var toast = new bootstrap.Toast(toastDel, {
                delay: 2000
            });
            toast.show();
        }
    });
</script>
