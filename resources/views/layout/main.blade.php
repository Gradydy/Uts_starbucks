<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <style>
        body{
            background-color: {{ ($users->member === 'Green')?'#476930':'#fffff0' }};
            color: {{ ($users->member === 'Green')?'#f1dddf':'#5c5346' }};
        }
        nav{
            background-color: {{ ($users->member === 'Green')?'#c8b88a':'#cba328' }};
            color: {{ ($users->member === 'Green')?'#5c5346':'#cba328' }};
        }
    </style>

        @include('partials.navbar')
        <div class="container">
            @yield("Container")
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
