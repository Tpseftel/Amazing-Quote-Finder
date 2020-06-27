$( function() {
    // Set up Form Validation
   (function() {
        'use strict';
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
        yearRange: "-100:+0", 
        currentText: "Now"
    });
    $('.selectpicker').selectpicker();




    function validateStartDate(){
        const startDate = $('start-date').val();
        if(!startDate){
            alert('No start day');
        }
    }





    $('#submit-btn').click(function () {
        validateStartDate();
        // const start_date = $( "#start-date" ).datepicker( "getDate" );
        // const end_date = $( "#end-date" ).datepicker( "getDate" );
        // const company_symbol = $('#company-symbol').val();
        // const email = $('#email').val();

        // console.log('Start Date:' + start_date );
        // console.log('End Date:' + end_date );
        // console.log('Copmany Symbol:' + company_symbol );
        // console.log('Email:' + email );

        // // console.log('Moment Now:' + moment(start_date).format('YYYY-MMMMM-dd'));
    });


});


