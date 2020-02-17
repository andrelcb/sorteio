<!DOCTYPE html>
<html>
<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>{{ config('app.name', 'Sorteio') }}</title>
  <link rel="stylesheet" href={{ asset("css/app.css") }}>
  <link rel="stylesheet" href={{ asset("css/style.css") }}>
  <link rel="stylesheet" href={{ asset("plugins/toastr/toastr.css") }}>
  <link rel="stylesheet" href={{ asset("plugins/fontawesome/css/all.min.css") }}>
</head>

<body>
<div class="container">
  @component('template.header', [ "current" => $current ])@endcomponent
    @hasSection('body')
      @yield('body')
    @endif
  @component('template.footer')@endcomponent
</div>

<script src={{ asset("plugins/jquery/dist/jquery.min.js") }}></script>
<script src={{ asset("plugins/popper/popper.min.js") }}></script>
<script src={{ asset("plugins/toastr/toastr.min.js") }}></script>
<script src={{ asset("js/app.js") }}></script>
<script src={{ asset("plugins/jquery-form/jquery.form.min.js") }}></script>
<script src={{ asset("plugins/fontawesome/js/all.min.js") }}></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script src={{ asset("js/scripts.js") }}></script>
@if(isset($script))<script src={{ asset("js/paginas/{$script}") }}></script>@endif


</body>
</html>
