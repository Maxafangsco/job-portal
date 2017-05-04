@extends('layouts.app')

@section('content')
	<div class="pull-right">
		<a href="{{ route('jobs.create') }}" class="btn btn-primary">Create New Job</a>
	</div>
	
	@if (empty($jobs))
		<p>New jobs is created!</p>
	@else
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Title</th>
					<th>Category</th>
					<th>Created At</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($jobs as $job)
					<tr>
						<td>{{ $job->title }}</td>
						<td>{{ $job->category }}</td>
						<td>{{ $job->created_at->format('Y-m-d') }}</td>
						<td>
							<div class="pull-left">
								<a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-default btn-sm">Edit</a>
							</div>

							<div class="pull-left">
								{!! Form::open(['method'=>'delete', 'route'=>['jobs.destroy', $job->id]]) !!}
									{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
								{!! Form::close() !!}
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	@endif

@endsection