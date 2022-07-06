@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h3><a href="/posts/{{$post->id}}" class="text-decoration-none">{{ $post->title }}</a></h3>
                <small class="text-muted">Written on {{ date('l jS \of F Y h:i A', strtotime($post->created_at)) }} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p class="mt-3 fs-5">No post found.</p>
    @endif
</div>
@endsection
