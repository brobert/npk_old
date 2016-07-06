@extends('layouts.blank')

@section('content')
        <div>Content</div>
        {{ Html::link('http://test.com', 'Dupa') }}
        {{ Form::text('email', 'example@gmail.com', ['class'=>'form']) }}
@endsection