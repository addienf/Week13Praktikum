@extends('Layout.layout')

@section('content')
    <div class="container mt-5">
        <form action="post-register" method="post">
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
            <div class="mt-3">
                <label for="username">Name</label>
                <input type="text" name="name" id="name" class="form-control" required autofocus>
            </div>
            <div class="mt-3">
                <label for="username">Email</label>
                <input type="email" name="email" id="email" class="form-control" required autofocus>
            </div>
            <div class="mt-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            {{-- <div class="mt-3">
                <label for="password">Password Confirm</label>
                <input type="password" name="password-confirmation" id="password-confirm" class="form-control" required>
            </div> --}}
            <div class="mt-3">
                <label for="level">Role</label>
                <select name="level" class="form-control" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div>
                <button type="submit" name="signup" class="btn btn-primary btn-block btn-flat mt-3">Sign Up</button>
            </div>
        </form>
    </div>
@endsection
