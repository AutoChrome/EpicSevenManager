@extends('layouts.app')

@section('title', 'Add equipment')

@section('content')
<link rel="stylesheet" href="{{ asset('css/equipment.create.css') }}">
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            {{$user}}
            <form method="POST" class="p-5" action="{{ route('equipment.store', $user->id) }}">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">Slot</label>
                    <div class="col-md-4">
                        <select name="slot" required>
                            <option value="weapon">Weapon</option>
                            <option value="helmet">Helmet</option>
                            <option value="chestplate">Chestplate</option>
                            <option value="amulet">Amulet</option>
                            <option value="ring">Ring</option>
                            <option value="boots">Boots</option>
                        </select>

                        @error('slot')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="name" class="col-md-2 col-form-label text-md-right">Quality</label>

                    <div class="col-md-4">
                        <select name="quality" required>
                            <option value="normal">Normal</option>
                            <option value="good">Good</option>
                            <option value="rare">Rare</option>
                            <option value="heroic">Heroic</option>
                            <option value="epic">Epic</option>
                        </select>

                        @error('quality')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="level" class="col-md-2 col-form-label text-md-right">Level</label>

                    <div class="col-md-4">
                        <input name="level" type="number" class="@error('slot') is-invalid @enderror" required/>

                        @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <equipment-drop-down-component name="first_stat"></equipment-drop-down-component>

                <div class="form-group row mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection