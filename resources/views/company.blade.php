<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!--  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>
    <script>
        $('#sandbox-container input').datepicker({
        });
    </script>
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
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <input type="text" class="datepicker">
                </div>
            </div>




            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Last name</label>
                    <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name"
                        value="Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServerUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        </div>
                        <input type="text" class="form-control is-invalid" id="validationServerUsername"
                            placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
</body>

</html>
