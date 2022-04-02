    <head>
        <base href="">
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
        <meta name="keywords" content="Craft, bootstrap, Angular 10, Vue, React, Laravel, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
        <link rel="canonical" href="Https://preview.keenthemes.com/start" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="{{ asset('assets/backend/assets/media/logos/favicon.icoassets/backend/') }}" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
              <link href="{{ asset('assets/backend/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
           {{--  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> --}}
    
           <link href="{{ asset('assets/backend/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('assets/backend/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
       
        @yield('css')
        <!--end::Global Stylesheets Bundle-->
    </head>