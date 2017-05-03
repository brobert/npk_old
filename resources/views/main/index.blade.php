@extends('layouts.blank')

@section('content')

<div class="row">
    <div class="col-md-3">
        @include("main.partials.payments")
    </div>
    <div class="col-md-6">
        @include("main.partials.menu")
    </div>
</div>
<div class="row">
    <div class="col-md-6">
@include("main.partials.menu")
        @include("main.partials.messages", ['tabId' => 3] )
    </div>
    <div class="col-md-6">
        @include("main.partials.menu")
        @include("main.partials.messages", ['tabId' => 4] )
    </div>
    <div class="col-md-6">
        @include("main.partials.menu")
        @include("main.partials.messages", ['tabId' => 5] )
    </div>
</div>

@endsection