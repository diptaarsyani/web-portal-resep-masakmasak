@extends('layouts.layout')

@section('content')
    <div class="col-md-7">
        <div class="well">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/delete/'.$recipe->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">

                <div class="panel-heading">
                    Author: <a href="{{ url('/user/'.$recipe->user->id) }}" class="MakaleYazariAdi">{{$recipe->user->name}}</a>
                    <div class="clearfix"></div>
                    @if(Auth::user()->id == $recipe->user->id || Auth::user()->isAdmin())
                        <input class="btn btn-danger" type="submit" name="submit" value="Delete Recipe">
                        <a href="{{url('/edit/'.$recipe->id)}}"> Edit recipe </a>
                    @else
                    @endif
                </div>
            </form>
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="{{url('/images/recipes/'.$recipe->image)}}" alt="Recipe Photo">
                        </a>
                    </div>
                    <div class="btn-group like-buttons" role="group" id="BegeniButonlari">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-comment"></span></button>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$recipe->title}}</h4>
                        </div>Bahan - Bahan :{{$recipe->subject}}</div>
                        </div>Langkah Pembuatan :{{$recipe->recipe}} </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop