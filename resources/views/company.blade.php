<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="module" src="{{ asset('js/form.js') }}"></script>
   
</head>
<input type="text" class="form-control">

<body>
    <div class="container">
        <h1 class=''>Form 1</h1>
        <form class="needs-validation" novalidate action="/history"  method="post">
          @csrf
            <!-- Company Symbol -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="company-symbol" class="text-capitalize font-weight-bold" >Company Symbol:</label>

                    <select class="selectpicker form-control" value="{{old('company_symbol')}}" name="company_symbol" data-live-search="true" style="border:1px solid blue;"required>
                        @foreach($companies as $company)
                            <option data-tokens="ketchup mustard" value= "{{$company['Symbol']}}" >{{$company['Company Name']}} </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Field is required
                    </div>
                </div>
            </div>

            <!--Start Date  -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="start-date" class="text-capitalize font-weight-bold">Start Date: </label>
                    <input type="text" value="{{old('start_date')}}"  name="start_date" class="form-control datepicker" required>
                    <div class="invalid-feedback" id='start-error'>
                        Pleaze choose the Start Date.
                    </div>
                </div>
            </div>
           
            <!-- End Date -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="end-date" class=" text-capitalize font-weight-bold">End Date: </label>
                    <input type="text" name="end_date" value="{{old('end_date')}}" class="form-control datepicker" required>
                    <div class="invalid-feedback">
                          Pleaze choose the End Date.
                    </div>
                </div>
            </div>
           
            <!-- Email  -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="email" class="font-weight-bold text-capitalize">Email:</label>
                    <br>
                    <input type="email" value="{{old('email')}}" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email"required>
                    <div class="invalid-feedback">
                        Pleaze enter your email.
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" id="submit-btn" type="submit">Submit form</button>
        </form>
        @if($errors->has('start_date'))
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
    @endif

    </div>
</body>

</html>
