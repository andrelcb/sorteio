<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sorteio</title>
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
@component('template.header', [ "current" => $current ])@endcomponent
  @hasSection('body')
    @yield('body')
  @endif
  @component('template.footer')@endcomponent
</div>

<script src="js/app.js"></script>

</body>
</html>