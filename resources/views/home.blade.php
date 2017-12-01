@extends('layouts.app')

@section('content')
<div class="row">
    @foreach($tags as $tag)
        <div class="media">
            <img class="mr-3" src="" alt="{{$tag->name}}">
            <div class="media-body">
                <h5 class="mt-0">{{$tag->name}}</h5>
                {{$tag->last_time}}
            </div>
        </div>
        @endforeach
</div>
@endsection
