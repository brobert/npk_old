@extends('layouts.blank')

@section('content')

<div class="row">
    <div class="col-md-6">
        @include("main.partials.menu")
        @include("main.partials.messages")
    </div>

    <div class="col-md-6">
        @include("main.partials.messages")
        @include("main.partials.menu")
    </div>
</div>

@endsection