@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <p class="fs-5">{!!$post->body !!}</p>
        <small class="border-top text-muted">Written on {{ date('l jS \of F Y h:i A', strtotime($post->created_at)) }} by {{$post->user->name}}</small>
        @if($post->user->id==auth()->user()->id)
        <div class="border-top pt-2">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST', 'class' => 'float-end']) !!}
                {{ Form::hidden('_method', 'DELETE')}}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        </div>
        @endif
    </div>
</div>
@endsection
