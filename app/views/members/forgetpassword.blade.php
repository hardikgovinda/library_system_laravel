@extends('layouts.default_member')

@section('content')
			

	<h1>Enter your E-mail Address</h1>
	{{ Form::open(array('url' => url('forgetprocess'), 'class'=>'form' )) }}
		<p>{{ Form::email('email',null,array('placeholder'=>'your emailid')) }}</p>

		{{ Form::submit('Proceed')}}
	{{ Form::close() }}
	@if (\Session::has('message'))
		<div>
		 		<h3 class="warmsg">{{ \Session::get('message') }} </h3>
		 	</div>
	@endif

@stop
