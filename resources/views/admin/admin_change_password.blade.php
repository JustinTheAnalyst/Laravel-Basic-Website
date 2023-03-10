@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.profile') }}">Profile</a></li>
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-sm-0">Change Password</h4><br /><br />

                        @if(count($errors))
                        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger alert-dismissible fade show">
                            {{ $error }}
                        </p>
                        @endforeach
                        @endif
                        <form method="post" action="{{ route('update.password') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name-input" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input name="oldpassword" id="oldpassword" class="form-control" type="password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name-input" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input name="newpassword" id="newpassword" class="form-control" type="password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input name="confirm_password" id="confirm_password" class="form-control"
                                        type="password">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light"
                                value="Change Password" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection