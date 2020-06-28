// const moment = require("moment");
$( function() {
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


        function isValidEmail(email){
            let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(email.match(mailformat)){
                return true;
            }
            return false;
        }
        console.log(`Is Valid email: ${isValidEmail(email)}`);

        function greaterEqualDate(date1, date2){
            date1 = new Date(date1);
            date1.setHours(0,0,0,0);

            date2 = new Date(date2);
            date2.setHours(0,0,0,0);

            if(date1 >= date2) return true;
            return false;
        }
        console.log(`End Date is greater or equal than Start Date: ${greaterEqualDate(end_date, start_date)}`);

        function lowerEqualDate(start_date, end_date){
            start_date = new Date(start_date);
            start_date.setHours(0,0,0,0);

            end_date = new Date(end_date);
            end_date.setHours(0,0,0,0);
            
            if(start_date <= end_date){
            return true ;
            }
            return false;
        }
        console.log(`Start Date is lower or equal than End Date: ${lowerEqualDate(start_date,end_date)}`);


        function lowerThanToday(date_value){
            let today = new Date();
            today.setHours(0,0,0,0);

            date_value = new Date(date_value);
            date_value.setHours(0,0,0,0);

            if(date_value <= today) {
                return true;
            }
            return false;
        }
        console.log(`Is lower than today: ${lowerThanToday(start_date)}`);

        function isValidDate(date_value) {
            var regEx = /^\d{4}-\d{2}-\d{2}$/;
            if(!date_value.match(regEx)) return false;  // Invalid format
            var d = new Date(date_value);
            var dNum = d.getTime();
            if(!dNum && dNum !== 0) return false; // NaN value, Invalid date
            return d.toISOString().slice(0,10) === date_value;
        }
        console.log(`Is Valid date: ${isValidDate(start_date)}`);

    });
});


