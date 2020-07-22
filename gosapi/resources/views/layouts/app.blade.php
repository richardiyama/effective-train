<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gos Web Api</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  



</head>
<body>
  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script>
    CKEDITOR.replace( 'summary-ckeditor2' );
</script>
<script>
    CKEDITOR.replace( 'summary-ckeditor3' );
</script>t>

</body>
</html>