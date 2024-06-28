<!DOCTYPE html>
<html lang="en">
    @include('Admin.Layout.head')
    <body>
        <div id="dvLoading" style="display: none"></div>
        @include('Admin.Layout.header')
        <div class="main-warpper">
            @include('Admin.Layout.sidebar')
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </body>
</html>
