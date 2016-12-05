<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido | Curso Laravel</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/foundation.css')}}" />
    <script type="text/javascript" src="{{URL::asset('assets/js/vendor/modernizr.js')}}"></script>
</head>
<body>

<div class="row">
      <div class="large-3 columns">
        <h1><img src="assets/img/logo.png"/></h1>
      </div>
      <div class="large-9 columns">
        <ul class="right button-group">
          <li><a href="" class="button">Inicio</a></li>
          <li><a href="" class="button">Nuevo usuario</a></li>
        </ul>
      </div>
</div>

@yield('content')

<footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright <?php echo date('Y'); ?>.</p>
          </div>
        </div>
      </div>
    </footer>
<script type="text/javascript" src="{{URL::asset('assets/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/foundation.min.js')}}"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>