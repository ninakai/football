<! doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="Viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYB02UboA7AM1Lk6RZT+3nIHuA2wYjUib5BOi2w"
            crossorigin="anonymous"></script>
    <style> .is-invalid { color: red; } </style>
    <title>footy<3</title>
</head>
<body class="d-flex flex-column h-100">
@include('login')

@include('error')

    @if(Auth::user())

        @section('content')
        @show

   @endif

@include('footer')

</body>
</html>
