@extends('layouts.app')

@section('title', 'Manage Profile')

@section('content')
<link rel="stylesheet" href="{{ asset('css/user.edit.css') }}">
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" class="pt-5 pb-5" action="{{ route('user.update', $user->id) }}">
                @csrf
                @method('PATCH');

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('username') ?? $user->username }}" required autocomplete="username" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ign" class="col-md-4 col-form-label text-md-right">IGN</label>

                    <div class="col-md-6">
                        <input id="ign" type="text" class="form-control @error('ign') is-invalid @enderror" name="ign" value="{{ old('ign') ?? $user->ign }}" required autocomplete="ign" autofocus>

                        @error('ign')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection