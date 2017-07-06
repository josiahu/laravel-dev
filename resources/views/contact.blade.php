@extends('layouts.app')
@section('content')
	<h1>Contact</h1>
	{!! Form::open(['url' => 'contact/submit']) !!}
    	<div class="form-group">
    		{{Form::label('firstName', 'First Name')}}
    		{{Form::text('firstName', '', ['class' => 'form-control', 'placeholder' => 'Enter first name'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('lastName', 'Last Name')}}
    		{{Form::text('lastName', '', ['class' => 'form-control', 'placeholder' => 'Enter last name'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('email', 'E-Mail Address')}}
    		{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('message', 'Message')}}
    		{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
    	</div>
    	<div>
    		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    	</div>
	{!! Form::close() !!}
@endsection