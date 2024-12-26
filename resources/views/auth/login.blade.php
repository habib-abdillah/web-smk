@extends('layouts.layout')

@section('content')
    <section style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-6">
            <h3 class="fw-bold mb-3">Login Admin</h3>
            <form action="/login" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Masukan Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Masukan Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
@endsection
