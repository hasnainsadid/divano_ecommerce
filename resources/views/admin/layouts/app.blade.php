<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Divano - @yield('title')</title>

    <!--plugins-->
    <link href="{{ asset('admin') }}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <!-- loader-->
    <link href="{{ asset('admin') }}/assets/css/pace.min.css" rel="stylesheet">
    <script src="{{ asset('admin') }}/assets/js/pace.min.js"></script>
    <!--Styles-->
    <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/main.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/dark-theme.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/semi-dark-theme.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/minimal-theme.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/shadow-theme.css" rel="stylesheet">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">

</head>

<body>

    <!--start header-->
    @include('admin.layouts.includes.header')
    <!--end header-->


    <!--start sidebar-->
    @include('admin.layouts.includes.sidebar')
    <!--end sidebar-->

    <!--start main content-->
    <main class="page-content">
        @yield('content')
    </main>
    <!--end main content-->


    <!--start overlay-->
    <div class="overlay btn-toggle-menu"></div>
    <!--end overlay-->

    <!--start theme customization-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="ThemeCustomizer" aria-labelledby="ThemeCustomizerLable">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="ThemeCustomizerLable">Theme Customizer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                    value="option1">
                <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2"
                    checked="">
                <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme"
                    value="option3">
                <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme"
                    value="option3">
                <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ShadowTheme"
                    value="option4">
                <label class="form-check-label" for="ShadowTheme">Shadow Theme</label>
            </div>

        </div>
    </div>
    <!--end theme customization-->

    {{-- izitoast --}}
    @include('vendor.lara-izitoast.toast')
    <!--plugins-->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    {{-- <script src="https://cdn.datatables.net/2.1.7/js/dataTables.min.js"></script> --}}
    <script src="{{ asset('admin') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/apex/apexcharts.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/index.js"></script>
    <!--BS Scripts-->
    <script src="{{ asset('admin') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/main.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/input-tags/js/tagsinput.js"></script>
    <script src="{{ asset('js/iziToast.js') }}"></script>
    {{--  --}}
    <script src="{{ asset('admin') }}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
   <script src="{{ asset('admin') }}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    @stack('scripts')
</body>

</html>
