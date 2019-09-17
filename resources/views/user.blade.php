@extends('layouts.app')

@section('title', 'Manage Profile')

@section('content')
<div class="container">
    {{ $user->username }}
</div>
@endsection