@extends('layouts.layout')

@section('content')
    @foreach ($recipes as $recipe)
        <div class="col-md-4">
            <div class="hovereffect">
                <img src="{{url('/thumbnail/'.$recipe->image)}}">
                <div class="overlay">
                    <h2>{{$recipe->subject}}</h2>
                    <h5>Category: {{$recipe->title}}</h5>
                    <a class="info" href="{{url('/show/'.$recipe->id)}}">Show Recipe</a>
                </div>
            </div>
        </div>
    @endforeach
@stop
