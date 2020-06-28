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

<table id="table_quotes" class="display table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Open</th>
      <th scope="col">High</th>
      <th scope="col">Low</th>
      <th scope="col">Close</th>
      <th scope="col">Volune</th>
    </tr>
  </thead>
  <tbody>
    @foreach($quotes['prices'] as $key => $quote)
        <tr>
            <th scope="row"> {{ $key }} </th>
            <td> {{ $quote['date'] }} </td>
            <td> {{ $quote['open'] }} </td>
            <td> {{ $quote['high'] }} </td>
            <td> {{ $quote['low'] }} </td>
            <td> {{ $quote['close'] }} </td>
            <td> {{ $quote['volume'] }} </td>
        </tr>
    @endforeach 
    
  </tbody>
</table>



{{-- 
 @foreach($quotes['prices'] as $key => $quote)
    {{$quote['open']}}
 @endforeach --}}
    
</body>
</html>