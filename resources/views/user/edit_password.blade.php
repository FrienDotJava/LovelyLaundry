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
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif
                        <form id="editPasswordForm" action="{{ route('userchangepassword') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="oldpwd" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="oldpwd" name="oldpwd" placeholder="Current Password" required>
                            </div>

                            <div class="mb-3">
                                <label for="newpwd" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newpwd" name="newpwd" placeholder="New Password" required>
                            </div>

                            <div class="mb-3">
                                <label for="newpwd1" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="newpwd1" name="newpwd1" placeholder="Confirm New Password" required>
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