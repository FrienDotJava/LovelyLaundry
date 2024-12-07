@extends('layout.app_user')

@section('content')

<section class="vh-100 d-flex align-items-center justify-content-center" style="background-color: #f4f5f7;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center "> 
            <div class="col-md-8">
                <div class="card mb-3 bg-info-subtle card shadow-lg py-3 px-5" style="border-radius: 1rem; width: 1000px;">
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h1 class="fw-bold">Edit Data</h1>
                        </div>
                        <hr class="mx-5">

                        <form id="editUserForm" action="{{ route('userupdate', $users->id) }}" method="POST">
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
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $users->email }}" disabled >
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $users->address }}">
                            </div>

                            <div class="modal-footer d-flex gap-4 mb-3">
                                <a href="{{ route('profileuser') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-info">Save changes</button>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
             </div>
        </div>
    </div>
</section>

@endsection
