@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="well well-sm">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <img src="{{url('/thumbnail/user_profile/'.$user->avatar)}}" alt="" class="img-rounded img-responsive"/>
                </div>
                <div class="col-sm-6 col-md-8">
                    <h4>
                        {{ $user->name }}
                    </h4>
                    <small>
                        <cite>
                            {{ $user->city }}, {{ $user->country }}
                            <i class="glyphicon glyphicon-map-marker"></i>
                        </cite>
                    </small>
                    <p>
                        <i class="glyphicon glyphicon-envelope"></i>
                        {{ $user->email }}
                        <br/>
                        {{$user->info}}
                        <br/>
                    </p>
                    <!-- Split button -->
                </div>
            </div>
        </div>
    </div>
</div>
@stop