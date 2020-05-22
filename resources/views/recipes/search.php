@extends('layouts.layout')

@section('content')
<div class="container">
	<form action="{{ route('home.search') }}"method="get">
		<input type="text" name="q" class="form-control" placeholder="Cari Resep..." style="width :70%; display: inline;">
		<button type="submit" class="btn btn-primary">Cari</button>
		<br><br>
	</form>
<div>		
@stop
