@extends('layouts.app')

@section('content')
	@if (!empty($errors) && $errors->any())
		<div class="alert alert-danger">
			<strong>Some error found!</strong>
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif
	
	{!! Form::model($job, [
			'route'=> $job->exists ? ['jobs.update', $job->id] : 'jobs.store',
			'method' => $job->exists ? 'PUT' : 'POST'
			]) !!}	

		{!! Form::hidden('user_id', Auth::user()->id) !!}

		<div class="form-group">
			{!! Form::label('title') !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category') !!}
			{!! Form::select('category', ['part-time'=>'Part Time', 'full-time'=>'Full Time'], null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('description') !!}
			{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
		</div>

		{!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}

	{!! Form::close() !!}

@endsection