<div class="sidebar" data-color="green" data-background-color="black" data-image="{{ asset('admin_theme') }}/assets/img/sidebar-3.jpg">
    <div class="logo">
        <a href="{{ route('home') }}" target="_blank" class="simple-text logo-mini"><img src="{{ asset('icon.png') }}" width="25px" alt=""></a>
        <a href="{{ route('home') }}" target="_blank" class="simple-text logo-normal">SwiftSchedule</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset(auth()->user()->image) }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>Admin <b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.profile')}}">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            {{--<li class="nav-item @routeis('admin.services.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#services">
                    <i class="material-icons">groups</i><p> Services<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.services.*') show @endrouteis" id="services">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.services.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.services.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Services List </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.services.add') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.services.add') }}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add Service </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @routeis('admin.cms.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#cms">
                    <i class="material-icons">groups</i><p> CMS<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.cms.*') show @endrouteis" id="cms">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.cms.general') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.cms.general') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> General </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.home.page') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.cms.home.page') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Home Page </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.about.us.page') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.cms.about.us.page') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> About Us Page </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.register.page') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.cms.register.page') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Register Page </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.terms') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.cms.terms') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Terms & Conditions </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.privacy') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.cms.privacy') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Privacy Policy </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>--}}
        </ul>
    </div>
</div>
