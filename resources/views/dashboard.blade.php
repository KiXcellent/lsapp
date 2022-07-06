@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <section>
            <h1>{{ __('Dashboard') }}</h1>
            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="/posts/create" class="btn btn-success">Create Post</a>

                <h3>Your Blog Posts</h3>

                @if(count($posts) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>
                                    <div class="d-flex float-end me-2">
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary me-2">Edit</a>
                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE')}}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="mt-3 fs-5">You have no posts.</p>
                @endif
            </div>
        </section>
    </div>
</div>
@endsection
