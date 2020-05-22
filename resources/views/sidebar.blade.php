<div class="col-md-3">
    <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
            @if(Auth::user()->avatar)
                <img class="img-circle img-responsive" src="{{url('/thumbnail/user_profile/'.Auth::user()->avatar)}}">
            @else
                <img class="img-circle img-responsive"
                     src="https://image.freepik.com/free-icon/user-profile-icon_318-33925.jpg">
            @endif
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">
                {{ Auth::user()->name }}
            </div>
            <div class="profile-usertitle-job">
                @if(Auth::user()->isAdmin())
                    Admin
                @else
                    User
                @endif
            </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <form class="profile-userbuttons" action="{{url('/user/'.Auth::user()->id.'/edit')}}">
            <input type="submit" class="btn btn-warning btn-sm" value="Edit"/>
        </form>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
            <ul class="nav">
                <li>
                    <a href="{{ url('/searchbahan') }}">
                        <i class="glyphicon glyphicon-search"></i>
                        Cari Resep Berdasarkan Bahan </a>
                </li> 
                <li>
                    <a href="{{ route('home') }}">
                        <i class="glyphicon glyphicon-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('/create') }}">
                        <i class="glyphicon glyphicon-cloud-upload"></i>
                        Tambah Resep
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user/'.Auth::user()->id.'/recipes')}}">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        Resepku </a>
                </li>
                
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <i class="glyphicon glyphicon-log-out"></i>
                            Logout
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
        </div>
        <!-- END MENU -->
    </div>
</div>