@extends('layout.admin_dashboard')
@section('content')

<div class="p-5">
    <div class="bg-white rounded-3 border px-3">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <h1 class="fw-bold">Edit User</h1>
        </div>
        <hr class="mx-5">

        <form id="editUserForm" action="{{ route('updateuser', $users->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}">
            </div>

            <div class="mb-3">
                <label for="noHp" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="noHp" name="noHp" value="{{ $users->noHp }}">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $users->address }}">
            </div>

            <div class="modal-footer d-flex gap-4 mb-3">
                <a href="{{ route('manageuser') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-info">Save changes</button>
            </div>
        </form>
    </div>
</div>
@endsection

