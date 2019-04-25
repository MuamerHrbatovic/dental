<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

<body class="">
<div class="wrapper ">
    @include('admin.partials.sidebar')
    <div class="main-panel" id="main-panel">

        @include('admin.partials.header')

        @yield('content')



    </div>
</div>
@include('admin.partials.scripts')
</body>

</html>