@inject('request', 'Illuminate\Http\Request')
<div class="sidebar" data-color="blue">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            DL
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            DentaLux
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="now-ui-icons design_app"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            @can('client_access')
                <li class="{{ $request->segment(2) == 'clients' ? 'active' : '' }}">
                    <a href="{{ route('admin.clients.index') }}">
                        <i class="fa fa-user"></i>
                        <span class="title">@lang('quickadmin.clients.title')</span>
                    </a>
                </li>
            @endcan

            @can('employee_access')
                <li class="{{ $request->segment(2) == 'employees' ? 'active' : '' }}">
                    <a href="{{ route('admin.employees.index') }}">
                        <i class="fa fa-suitcase"></i>
                        <span class="title">@lang('quickadmin.employees.title')</span>
                    </a>
                </li>
            @endcan

            @can('working_hour_access')
                <li class="{{ $request->segment(2) == 'working_hours' ? 'active' : '' }}">
                    <a href="{{ route('admin.working_hours.index') }}">
                        <i class="fa fa-hourglass"></i>
                        <span class="title">@lang('quickadmin.working-hours.title')</span>
                    </a>
                </li>
            @endcan
            @can('service_access')
                <li class="{{ $request->segment(2) == 'services' ? 'active' : '' }}">
                    <a href="{{ route('admin.services.index') }}">
                        <i class="fa fa-hourglass"></i>
                        <span class="title">@lang('quickadmin.services.title')</span>
                    </a>
                </li>
            @endcan

            @can('appointment_access')
                <li class="{{ $request->segment(2) == 'appointments' ? 'active' : '' }}">
                    <a href="{{ route('admin.appointments.index') }}">
                        <i class="fa fa-calendar"></i>
                        <span class="title">@lang('quickadmin.appointments.title')</span>
                    </a>
                </li>
            @endcan


            @can('user_management_access')
                <li class="">
                    <a id="userToggle" href="#">
                        <i class="fa fa-users"></i>
                        <span class="title">@lang('quickadmin.user-management.title')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul style="display: none;" class="sub-menu">

                        @can('role_access')
                            <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="fa fa-user"></i>
                                    <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
        </ul>
    </div>
</div>
