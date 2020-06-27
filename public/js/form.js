
onload = function(){
    console.log('Hello World');
};

$( function() {
    // SetUp Date Picker
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0", 
        currentText: "Now"
    });

    $('.selectpicker').selectpicker();

    $('#submit-btn').click(function () {
        const start_date = $( "#start-date" ).datepicker( "getDate" );
        const end_date = $( "#end-date" ).datepicker( "getDate" );
        const company_symbol = $('#company-symbol').val();
        console.log('Start Date:' + start_date );
        console.log('End Date:' + end_date );
        console.log('Copmany Symbol:' + company_symbol );

        console.log('Moment Now:' + moment(start_date).format('YYYY-MMMMM-dd'));
    });


});


