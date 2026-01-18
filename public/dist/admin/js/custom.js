(function($){
    "use strict";
    $(".inputtags").tagsinput('items');
    $(document).ready(function() {
        $('#example1').DataTable();
    });
    $('.icp_demo').iconpicker();

    $( "#datepicker1" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });
    $('#datepicker2').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });
    $('#timepicker').datepicker({
        language: 'en',
        timepicker: true,
        onlyTimepicker: true,
        timeFormat: 'hh:ii',
        dateFormat: null
    });

    tinymce.init({
        selector: '.editor',
        height : '300'
    });

})(jQuery);