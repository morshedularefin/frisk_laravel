(function($){
    "use strict";
    $(".inputtags").tagsinput('items');
    $(document).ready(function() {
        $('#example1').DataTable();

    });

    // Reusable Select2 initializer for multi-select tag input
    const initSelect2 = function($context) {
        $context.find('.select2_multiple').each(function() {
            const $el = $(this);
            if ($el.data('select2')) {
                $el.select2('destroy');
            }
            // Multi-select: allow free-text tag input like blog tags
            // Always use document.body so dropdown appears above TinyMCE iframes
            $el.select2({
                placeholder: "Type to add tags...",
                allowClear: true,
                width: '100%',
                tags: true,
                tokenSeparators: [',', ' '],
                dropdownParent: $(document.body),
                dropdownCssClass: 'select2-dropdown-high-z'
            });
        });
    };

    $(document).ready(function() {
        initSelect2($(document));
        // When a modal opens, re-init select2 elements inside it
        $(document).on('shown.bs.modal', function(e) {
            initSelect2($(e.target));
        });
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