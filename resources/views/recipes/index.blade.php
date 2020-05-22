@extends('layouts.layout')

@section('content')
<div class="container">
	<form action="{{ route('home.search') }}"method="get">
		<input type="text" name="q" class="form-control" placeholder="Cari Resep..." style="width :70%; display: inline;">
		<button type="submit" class="btn btn-primary">Cari</button>
		<br><br>
	</form>
<div>		
    @foreach ($recipes as $recipe)
        <div class="col-md-3">
            <div class="hovereffect">
                <img src="{{url('/thumbnail/'.$recipe->image)}}">
                <div class="overlay">
                    <h2>{{$recipe->title}}</h2>
                    <h5>Category: {{$recipe->category}}</h5>
                    <a class="info" href="{{url('/show/'.$recipe->id)}}">Show Recipe</a>
                </div>
            </div>
        </div>
    @endforeach
@stop
