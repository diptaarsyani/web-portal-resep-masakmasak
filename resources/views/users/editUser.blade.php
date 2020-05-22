@extends('layouts.layout')

@section('content')
    <h1>Edit Profil Pengguna</h1>
    <hr>
    <div class="row">
        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            {{--<div class="alert alert-info alert-dismissable">--}}
                {{--<a class="panel-close close" data-dismiss="alert">×</a>--}}
                {{--<i class="fa fa-coffee"></i>--}}
                {{--This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
            {{--</div>--}}
            <h3>Info Pengguna</h3>

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/'.$user->id.'/update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                <div class="col-md-5 upload-avatar">
                    <div class="text-center">
                        @if($user->avatar)
                            <img src="{{url('/thumbnail/user_profile/'.$user->avatar)}}" alt="avatar">
                        @else
                            <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                        @endif
                        <h6>Ganti Foto</h6>
                        <input class="btn btn-file" type="file" name="image" id="image"/>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nama Depan:</label>
                    <div class="col-lg-7">
                        <input class="form-control" type="text" name="first_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nama Belakang:</label>
                    <div class="col-lg-7">
                        <input class="form-control" type="text" name="last_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Negara:</label>
                    <div class="col-lg-7">
                        <input class="form-control" name="country" type="text" value="{{$user->country}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Kota:</label>
                    <div class="col-lg-7">
                        <input class="form-control" name="city" type="text" value="{{$user->city}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Bio:</label>
                    <div class="col-md-7">
                        <textarea class="form-control" rows="4" type="text" name="info">
                            @if($user->info)
                                {{$user->info}}
                            @else

                            @endif
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-7">
                        <input class="btn btn-primary" type="submit" name="submit" value="Save Changes">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop