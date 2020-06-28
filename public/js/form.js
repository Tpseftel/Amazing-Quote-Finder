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
        let sd_error = validateStartDate(start_date, end_date);
        // Validate End date
        let end_error = validateEndDate(end_date, start_date);
        // Validate Email
        let email_error = validateEmail(email);

        if(sd_error || end_error || email_error){
            alert(`Start Date Error:${sd_error} \n End Date Error:${end_error} \n Email Error:${email_error}`);
            $('.email-error').html(email_error);
            $('.start-date-error').html(sd_error);
            $('.end-date-error').html(end_error);
        }
    });
    
});


