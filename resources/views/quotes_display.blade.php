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

    <div class="container">
    <h1>History Quotes</h1>
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

                    @if(isset($quote['date']))
                        <td> {{ date('Y-m-d', $quote['date']) }} </td>    
                    @else
                        <td > {{$x=-1}} </td>    
                    @endif

                    @if(isset($quote['open']))
                        <td> {{ $quote['open'] }} </td>
                    @else
                        <td > {{$x=-1}} </td>    
                    @endif

                    @if(isset($quote['high']))
                        <td> {{ $quote['high'] }} </td>
                    @else
                        <td > {{$x=-1}} </td>    
                    @endif

                    @if(isset($quote['low']))
                        <td> {{ $quote['low'] }} </td>
                    @else
                        <td > {{$x=-1}} </td>    
                    @endif

                    @if(isset($quote['close']))
                        <td> {{ $quote['close'] }} </td>
                    @else
                        <td > {{$x=-1}} </td>    
                    @endif

                    @if(isset($quote['volume']))
                        <td> {{ $quote['volume'] }} </td>
                    @else
                        <td > {{$x=-1}} </td>    
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>

        <p class="text-danger"> Caution: Value <span class="font-weight-bold" style="font-size:1.3rem;">-1</span> indicates that there is no available information about this field !!!</p>

    </div>

</body>

</html>
