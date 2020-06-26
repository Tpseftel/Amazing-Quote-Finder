onload = function(){
    console.log('Hello World');
};

$( function() {
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });

    $('.datepicker').on('click',  function() {
        console.log($('.datepicker').val());
    });


    $('#lar').click(function () {
    });
});


