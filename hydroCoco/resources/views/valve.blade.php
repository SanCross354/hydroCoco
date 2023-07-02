@extends('layouts.main')

@section('container')
@include('partials.sidebar')
<div class="items-start col-span-9 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-zinc-600 to-zinc-800 h-screen">
    @include('partials.header')
</div>

@endsection