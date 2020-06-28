// const moment = require("moment");
$(function() {
  // Set up Form Validation
   (function() {
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
    })();

    // SetUp Date Picker
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0"
    });
    $('.selectpicker').selectpicker();

    // Set Symbol Disabled Input
    $('#symbol-input').val( $('#company-select').val() );
    // Set company symbol
    $('#company-select').change(function(){
      $('#symbol-input').val( $(this).val() );
    });


    $('#submit-btn').click(function () {
        const start_date = $("#start-date").val();
        const end_date = $("#end-date").val();
        const company_symbol = $('#company-select').val();
        const email = $('#email-input').val();
        
        // Validate Start Date
        if(!isValidDate(start_date)) console.log('Start date is invalid');
        if(!lowerEqualDate(start_date, end_date)) console.log('Start date must be lower or equal than end date');
        if(!lowerThanToday(start_date)) console.log('Start date must be lower or equal than today');

        // Validate End date
        if(!isValidDate(end_date)) console.log('End date is invalid');
        if(!greaterEqualDate(end_date, start_date)) console.log('End date must be lower or equal than Start date');
        if(!lowerThanToday(end_date)) console.log('End date must be lower or equal than today');

        // Validate Email
        if(!isValidEmail(email)) console.log("Pleaze provide a valid email");
        



    });
    
});


