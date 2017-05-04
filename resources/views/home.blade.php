@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List of jobs</h2>
    @foreach ($jobs as $job)
    	<div class="row">
    		<h4><a href="{{ route('jobs.show', $job->id) }}">{{ $job->title }}</a></h4>
    		<p>{{ $job->description }}</p>
    	</div>
    @endforeach
</div>

@endsection
