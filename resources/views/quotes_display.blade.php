<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company Quotes</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="module" src="{{ asset('js/form.js') }}"></script>
</head>
<body>

 @foreach($quotes['prices'] as $key => $quote)
    {{$quote['open']}}
     
 @endforeach
    
</body>
</html>