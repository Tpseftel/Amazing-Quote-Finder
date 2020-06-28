<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

    
   
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
                    <label for="company-select" class="text-capitalize font-weight-bold" >Company Name:</label>

                    <select class="selectpicker form-control {{$errors->has('company_symbol') ? 'is-invalid' :''}}" id="company-select" value="{{old('company_symbol')}}" name="company_symbol" data-live-search="true" style="border:1px solid blue;"required>
                        @foreach($companies as $company)
                            <option data-tokens="ketchup mustard" value= "{{$company['Symbol']}}" >{{$company['Company Name']}} </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        @if ($errors->has('company_symbol'))
                           {{ $errors -> first('company_symbol')}}
                        @else
                            Pleaze select a valid Symbol
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="symbol" class="text-capitalize font-weight-bold" >Company Symbol:</label>
                    <input type="text" value="{{old('company_symbol')}}" id="symbol-input"  name="symbol" class="form-control" disabled>
                    
                </div>
            </div>

            <!--Start Date  -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="start-date" class="text-capitalize font-weight-bold">Start Date: </label>
                    <input type="text"  placeholder="yyyy-mm-dd" value="{{old('start_date')}}" id="start-date" name="start_date"
                     class=" {{$errors->has('start_date') ? 'is-invalid' :''}}  form-control datepicker" required>
                    <div class="invalid-feedback start-date-error" >
                        @if ($errors->has('start_date'))
                           {{ $errors -> first('start_date')}}
                        @else
                            Pleaze choose the Start Date.
                        @endif
                    </div>
                </div>
            </div>
           
            <!-- End Date -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="end-date" class=" text-capitalize font-weight-bold">End Date: </label>
                    <input type="text"  placeholder="yyyy-mm-dd" name="end_date" id="end-date" value="{{old('end_date')}}" 
                        class=" {{$errors->has('end_date') ? 'is-invalid' :''}}  form-control datepicker" required>
                    <div class="invalid-feedback end-date-error">
                        @if ($errors->has('end_date'))
                           {{ $errors -> first('end_date')}}
                        @else
                            Pleaze choose the End Date.
                        @endif
                    </div>
                </div>
            </div>
           
            <!-- Email  -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="email" class="font-weight-bold text-capitalize">Email:</label>
                    <br>
                    <input type="email" id="email-input" value="{{old('email')}}" class="{{$errors->has('email') ? 'is-invalid' :''}} form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email"required>
                    <div class="invalid-feedback email-error">
                    @if ($errors->has('email'))
                           {{ $errors -> first('email')}}
                        @else
                            Pleaze enter your email.
                        @endif
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" id="submit-btn" type="submit">Submit form</button>
        </form>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
    <script type="module" src="{{ asset('js/form.js') }}"></script>
</body>

</html>
