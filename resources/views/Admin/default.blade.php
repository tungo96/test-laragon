<!DOCTYPE html>
<html lang="en">
    @include('admin.layout.head')
    <body>
        <div id="dvLoading" style="display: none"></div>
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-boxed">
            @include('admin.layout.siderbar')
            @include('admin.layout.header')
            <main id="main-container">
                @yield('content')
            </main>
        </div>
    </body>
</html>
