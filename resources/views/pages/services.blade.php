@extends('layouts.app')

@section('content')
<div class="row">
    <h1>{{ $title }}</h1>
    @if(count($services) > 0)
        <ul class="fs-5">
            @foreach($services as $service)
                <li>{{ $service }}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
