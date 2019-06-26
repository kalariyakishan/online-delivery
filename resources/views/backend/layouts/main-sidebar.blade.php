
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="custom-sidebar sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#">
                            @if(\Auth::check() && \Auth::user()->avatar != '')
                                <img class="rounded-circle" src="{{url('/uploads/avatar/'.\Auth::user()->avatar)}}" alt="Avatar" width="38" height="38">
                            @else
                                <img class="rounded-circle" src="{{url('assets/images/default-user.png')}}" alt="Avatar" width="38" height="38">
                            @endif
                        </a>
                    </div>

                    <div class="media-body">
                    <div class="media-title font-weight-semibold">{{\Auth::user()->first_name}}</div>
                        <div class="font-size-xs">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-custom nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    {{--  <div class="text-uppercase font-size-xs line-height-xs">Main</div>  --}}
                    <i class="icon-menu" title="Dashboard"></i>
                </li>

                <li class="main-nav nav-item">
                    <a href="{{url('/dashboard')}}" class="nav-link {{Request::path() == 'dashboard' ? 'active' : ''}}">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <!-- /main -->

                <!-- Resource Library -->
                <li class="main-nav nav-item">
                    <a href="{{url('/admin/resource')}}" class="nav-link {{Request::is('admin/resource','admin/resource/*') ? 'active' : ''}}">
                        <i class="icon-book"></i>
                        <span>
                            Resource Library
                        </span>
                    </a>
                </li>
                <!-- /Resource Library -->

              {{--   <!-- /Conference -->
                <li class="main-nav nav-item nav-item-submenu {{Request::is('admin/conference','admin/conference/*','admin/session','admin/session/*','admin/committee_meeting','admin/committee_meeting/*','admin/exhibit','admin/exhibit/*','admin/aamm-event','admin/aamm-event/*','admin/session-attendee/list/*') ? 'nav-item-open' : ''}}">
                    <a href="#" class="nav-link"><i class="icon-mic2"></i> <span>Conference Management</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts" {{Request::is('admin/conference','admin/conference/*','admin/session','admin/session/*','admin/committee_meeting','admin/committee_meeting/*','admin/exhibit','admin/exhibit/*','admin/aamm-event','admin/aamm-event/*','admin/session-attendee/list/*') ? 'style=display:block' : ''}}>

                        <!-- conference -->
                        <li class="nav-item">
                            <a href="{{ url('admin/conference/1/edit') }}" class="nav-link {{Request::is('admin/conference','admin/conference/*') ? 'active' : ''}}">
                                <i class="icon-mic2"></i>
                                <span>
                                    Conference (Event)
                                </span>
                            </a>
                        </li>
                        <!-- /Plans -->

                        <!-- Session -->
                        <li class="nav-item">
                            <a href="{{url('/admin/session')}}" class="nav-link {{Request::is('admin/session','admin/session/*','admin/session-attendee/list/*') ? 'active' : ''}}">
                                <i class="icon-magazine"></i>
                                <span>
                                    Sessions
                                </span>
                            </a>
                        </li>
                        <!-- /Plans -->

                         <!-- Session -->
                        <li class="nav-item">
                            <a href="{{url('/admin/committee_meeting')}}" class="nav-link {{Request::is('admin/committee_meeting','admin/committee_meeting/*') ? 'active' : ''}}">
                                <i class="icon-calendar"></i>
                                <span>
                                    Committee Meeting
                                </span>
                            </a>
                        </li>
                        <!-- /Plans -->

                         <!-- Session -->
                        <li class="nav-item">
                            <a href="{{url('/admin/exhibit')}}" class="nav-link {{Request::is('admin/exhibit','admin/exhibit/*') ? 'active' : ''}}">
                                <i class="icon-calendar52"></i>
                                <span>
                                    Exhibits
                                </span>
                            </a>
                        </li>
                        <!-- /Plans -->

                         <!-- Session -->
                        <li class="nav-item">
                            <a href="{{url('/admin/aamm-event')}}" class="nav-link {{Request::is('admin/aamm-event','admin/aamm-event/*') ? 'active' : ''}}">
                                <i class="icon-printer4"></i>
                                <span>
                                    AAMM Events
                                </span>
                            </a>
                        </li>
                        <!-- /Plans -->

                    </ul>
                </li>
                <!-- /Conference --> --}}
                <!-- Session -->

                 

                <!-- /Reports -->
                <li class="main-nav nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-users"></i>
                        <span>
                            Reports
                        </span>
                    </a>
                </li>
                <!-- /Reports -->
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar