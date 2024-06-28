<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title : 'Admin BabyQuip Cleaning'}}</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css?v=' . config('app.asset_version')) }}" type="text/css">
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('admin/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ asset('partner/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script type="text/javascript" src="{{ asset('admin/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/jquery.amsify.suggestags.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/croppie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/jquery.timepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/daterangepicker.js') }}"></script>

    <!-- Custom JavaScript-->
    <script type="text/javascript" src="{{ asset('admin/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/suggest-input.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/datepick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap-popover-x.min.js') }}"></script>
    <meta name="robots" content="noindex" />
    @if(app()->environment() != 'production')
        <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=8ryvzxi6ti6n2x1lkdodsw" async="true"></script>
    @endif
</head>
