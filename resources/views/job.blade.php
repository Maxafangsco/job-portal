@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $job->title }}</h2>
    Job type: <i>{{ $job->category }}</i>
    Created at: <i>{{ $job->created_at->format('Y-m-d') }}</i>

    <p>{{ $job->description }}</p>
</div>

@endsection
