@extends('layouts.app')

@section('title')
{{$hero->name}}
@endsection

@section('content')
<div class="container">
    {{$hero}}
</div>
@endsection