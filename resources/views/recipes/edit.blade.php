@extends('layouts.layout')

@section('content')
    <div class="col-md-8">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/update/'.$recipe->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Nama Resep</label>
                            <input id="title" maxlength="100" type="text" required="required" class="form-control"
                                   name="title" value="{{$recipe->title}}"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Bahan</label>
                            <input id="" smaxlength="100" type="text" required="required" class="form-control"
                                   name="subject" value="{{$recipe->subject}}"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kategori Resep</label>
                            <div class="select-style">
                                <select name="category" required="required">
                                    <option value="">Pilih Kategori</option>
                                    <option value="Breakfast">Masakan</option>
                                    <option value="Lunch">Minuman</option>
                                    <option value="Dinner">Snack</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Recipe</label>
                            <textarea class="form-control" rows="4" name="recipe">{{$recipe->recipe}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Upload Image</label>
                            <input type="file" name="image" id="image"/>
                        </div>
            <button class="btn btn-primary" type="submit" name="submit" title="update-recipe">Update Recipe</button>
        </form>
    </div>
@stop