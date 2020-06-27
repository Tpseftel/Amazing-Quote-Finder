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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    
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


                       
                    <select class="selectpicker form-control" data-live-search="true">
                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
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
