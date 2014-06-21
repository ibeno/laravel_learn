@extends('templates.signin')

@section('content')
	
	{{ Form::open(array('url'=>'login', 'class'=>'form-signin')) }}
		<h1 class="form-signin-heading">Login</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::text('email', Input::old('email'), array('class'=>'form-control','required','placeholder'=>'Email')) }}
		</p>

		<p>
			{{ Form::password('password', array('class'=>'form-control','required', 'placeholder'=>'Senha')) }}
		</p>

		<p>{{ Form::submit('Entrar', array('class'=>'btn btn-lg btn-primary btn-block')) }}</p>
	{{ Form::close() }}
	
@stop