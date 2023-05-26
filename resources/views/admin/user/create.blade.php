@extends('admin.navigation')

@section('title', 'Create User')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div>
                        <p class="fa-2x">CREATE NEW USER</p>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="submit" class="mb-2 mr-2 btn btn-light"
                            onclick="window.location.href='{{ route('users.users') }}'">BACK
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title text-center">Information Form</h5>
                <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name"><b>Name</b></label>
                        <div>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                   placeholder="Name" required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <div>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email', '@gmail.com') }}"
                                   placeholder="Email" required>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username"><b>Username</b></label>
                        <div>
                            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}"
                                   placeholder="Username" required>
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>
                        <div>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mb-2 mr-2 btn btn-success">CREATE</button>
                    </div>
                    <div class="panel panel-default">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
