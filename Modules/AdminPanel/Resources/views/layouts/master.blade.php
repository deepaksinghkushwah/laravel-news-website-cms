<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Common -->
    <link href="{{ asset('/admin-theme/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-theme/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-theme/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-theme/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-theme/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-theme/css/style.css') }}" rel="stylesheet">


    {{-- Laravel Vite - CSS File --}}
    {{-- {{ module_vite('build-adminpanel', 'Resources/assets/sass/app.scss') }} --}}
</head>

<body>

    @include('adminpanel::layouts.left-nav')
    <!-- /# sidebar -->


    @include('adminpanel::layouts.header')
    <!-- /# header -->


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-r-0 title-margin-right">
                        <x-flash-message/>
                        @yield('content')
                        {{-- Laravel Vite - JS File --}}
                        {{-- {{ module_vite('build-adminpanel', 'Resources/assets/js/app.js') }} --}}
                    </div>

                </div>
                <!-- /# row -->
                <section id="main-content">
                    @include('adminpanel::layouts.footer')
                </section>
            </div>
        </div>
    </div>




    <!-- Common -->
    <script src="{{ asset('/admin-theme/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('/admin-theme/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('/admin-theme/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('/admin-theme/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admin-theme/js/scripts.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.ckeditor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
