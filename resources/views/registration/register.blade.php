@extends('layouts.main')
@section('content')
    <form action="{{route('register.create')}}" method="POST" class="mx-auto my-4 p-4 border rounded shadow-sm" style="max-width: 300px;">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" name='name' class="form-control form-control-sm" id="name" placeholder="Nickname">
            <label for="name">Nickname</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name='email' class="form-control form-control-sm" id="email" placeholder="Email">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control form-control-sm" name='password' id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>

@endsection
