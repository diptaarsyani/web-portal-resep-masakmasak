@extends('layouts.layout')

@section('content')

@if(count($resultbahan))
<div class="container">
	<form action="{{ route('home.searchbahan') }}"method="get">
		<input type="text" name="b" class="form-control" placeholder="Cari Resep..." style="width :70%; display: inline;">
		<button type="submit" class="btn btn-primary">Cari</button>
		<br><br>
	</form>
<div>		
    @foreach ($resultbahan as $recipe)
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

    {{ $resultbahan->render() }}
@else
    <h1>Resep Tidak Ditemukan</h1>
@endif

@stop
