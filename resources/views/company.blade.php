<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="module" src="{{ asset('js/form.js') }}"></script>
    
</head>
<input type="text" class="form-control">

<body>
    <div class="container">
        <h1 class=''>Form 1</h1>

        <form>

            <!-- Company Symbol -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Company Symbol</label>
                    <select data-live-search="true"  id="company-symbol"  class="selectpicker form-control"  >
                        <option>hello</option>
                        <option>no</option>
                        <option>yes</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <!--Start Date  -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="start-date" class=" text-capitalize font-weight-bold">Start Date: </label>
                    <input type="text"  id="start-date" class="form-control datepicker">
                </div>
            </div>

            <!-- End Date -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="end-date" class="  text-capitalize font-weight-bold">End Date: </label>
                    <input type="text" id="end-date" class="form-control datepicker">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="email" class="font-weight-bold text-capitalize">Email:</label>
                    <br>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            
      

            <button class="btn btn-primary" id="submit-btn" type="submit">Submit form</button>
        </form>


    </div>
</body>

</html>
