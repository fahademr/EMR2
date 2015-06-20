<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>{!! config('logo.short-logo') !!}</title>

        @include('assets.header')
        </head>

    <body>
        <section id="container" >

            @yield('content')

            @include('assets.footer')

            @yield('scripts')

        </section>
  </body>
</html>
