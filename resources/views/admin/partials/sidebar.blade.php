<div class="sidebar" data-color="blue">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{ route('dashboard') }}" class="simple-text logo-mini">
            DL
        </a>
        <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
            DentaLux
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }} ">
                <a href="{{ action('Admin\AdminController@dashboard') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="@if(request()->is('admin/user') || request()->is('admin/user/*')) active @endif">
                <a href="{{ action('Admin\UserController@index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>Users</p>
                </a>
            </li>
            <li class="@if(request()->is('admin/appointment') || request()->is('admin/appointment/*')) active @endif">
                <a href="{{ action('Admin\AppointmentController@index') }}">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>Appointments</p>
                </a>
            </li>
        </ul>
    </div>
</div>
