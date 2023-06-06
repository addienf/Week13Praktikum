@extends('Layout.layout')

@section('content')
    <div class="container mt-5">
        <form action="post-login" method="post">
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br> />
                    @endforeach
                </div>
            @endif
            <div class="mt-3">
                <label for="username">Email</label>
                <input type="email" name="email" id="email" class="form-control" required autofocus>
            </div>
            <div class="mt-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mt-3">
                <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
        </form>
        <p class="mt-3">Belum Punya Akun? <a href="register">daftar</a></p>
    </div>
@endsection
