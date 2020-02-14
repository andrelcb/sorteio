<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sorteio</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href={{ asset("css/app.css") }}>
  <link rel="stylesheet" href={{ asset("css/style.css") }}>
  <link rel="stylesheet" href={{ asset("js/plugins/toastr/toastr.css") }}>
</head>

<body>
<div class="container">
  @component('template.header', [ "current" => $current ])@endcomponent
    @hasSection('body')
      @yield('body')
    @endif
  @component('template.footer')@endcomponent
</div>

<script src={{ asset("js/plugins/jquery/dist/jquery.min.js") }}></script>
<script src={{ asset("js/plugins/popper/popper.min.js") }}></script>
<script src={{ asset("js/plugins/toastr/toastr.min.js") }}></script>
<script src={{ asset("js/app.js") }}></script>
<script src={{ asset("js/plugins/jquery-form/jquery.form.min.js") }}></script>
<script src={{ asset("js/scripts.js") }}></script>
<script src={{ asset("js/paginas/{$script}") }}></script>


</body>
</html>