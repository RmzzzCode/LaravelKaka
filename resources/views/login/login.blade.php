@extends('layouts.main')

@section('content')
    <form action="{{ route('login.sign') }}" method="POST" class="mx-auto my-4 p-4 border rounded shadow-sm" style="max-width: 300px;">
        @csrf
        <h3 class="text-center mb-3">Sign In</h3>

        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control form-control-sm @error('auth') is-invalid @enderror" id="name" placeholder="Nickname" value="{{ old('name') }}">
            <label for="name">Nickname</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control form-control-sm @error('auth') is-invalid @enderror" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Sign In</button>

        @if ($errors->has('auth'))
            <div class="text-danger text-center mt-3">
                {{ $errors->first('auth') }}
            </div>
        @endif
    </form>
@endsection
