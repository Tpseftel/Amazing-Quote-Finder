// const moment = require("moment");
$(function() {
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
    

    $( ".needs-validation" ).submit(function( event ) {
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

        if(sd_error) $('.start-date-error').text(sd_error).show().fadeOut(3000);
        if(end_error) $('.end-date-error').text(end_error).show().fadeOut(3000);
        if(email_error) $('.email-error').text(email_error).show().fadeOut(3000);

        // if(sd_error || end_error || email_error){
        //     // alert(`Start Date Error:${sd_error} \n End Date Error:${end_error} \n Email Error:${email_error}`);
        //     $('.start-date-error').text(sd_error).show().fadeOut(3000);
        //     $('.end-date-error').text(end_error).show().fadeOut(3000);
        //     $('.email-error').text(email_error).show().fadeOut(3000);
        // }
     
      event.preventDefault();
    });
    

    
});


