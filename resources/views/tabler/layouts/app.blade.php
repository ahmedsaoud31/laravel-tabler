@php($dir = in_array(app()->getLocale(), ['ar'])?'rtl':'ltr')
@php($dir_flag = $dir == 'rtl'?'rtl.':'')
@php($layout = config('tabler.layout'))
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ $dir }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>{{ __(config('app.name', 'Tabler Dashboard')) }}</title>

        <!-- CSS files -->
        @stack('css_libs_before')
        <link href="{{ asset('tabler/css/tabler.') }}{{  $dir_flag }}min.css" rel="stylesheet"/>
        <link href="{{ asset('tabler/css/tabler-flags.') }}{{  $dir_flag }}min.css" rel="stylesheet"/>
        <link href="{{ asset('tabler/css/tabler-payments.') }}{{  $dir_flag }}min.css" rel="stylesheet"/>
        <link href="{{ asset('tabler/css/tabler-vendors.') }}{{  $dir_flag }}min.css" rel="stylesheet"/>
        <link href="{{ asset('tabler/css/demo.') }}{{  $dir_flag }}min.css" rel="stylesheet"/>
        @stack('css_libs_after')

        <!-- Inject css -->
        @stack('styles')
    </head>
    <body class=" {{ in_array($layout, ['boxed', 'fluid'])?'layout-'.$layout:'' }}{{ $layout == 'fluid-vertical'?'layout-fluid':'' }}">
        @include("tabler::layouts.headers.$layout")

        @yield('content')

        @include("tabler::layouts.footer")
        @stack('models')

        <!-- Libs JS -->
        @stack('libs')

        <!-- Tabler Core -->
        <script src="{{ asset('tabler/js/tabler.min.js') }}" defer></script>
        <script src="{{ asset('tabler/js/demo.min.js') }}" defer></script>

        <!-- Inject js -->
        @stack('scripts')
    </body>
</html>