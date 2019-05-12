<!DOCTYPE html>
<html lang="en">

@include('partials.admin.head')

<body class="">
<div class="wrapper ">
    @include('partials.admin.sidebar')
    <div class="main-panel" id="main-panel">

        @include('partials.admin.header')
        <div class="panel-header panel-header-sm">
        </div>

        @if (Session::has('message'))
            <div class="note note-info">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        @if ($errors->count() > 0)
            <div class="note note-danger">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div style="padding: 20px">
            @yield('content')
        </div>



    </div>
</div>
@include('partials.admin.scripts')
</body>

</html>