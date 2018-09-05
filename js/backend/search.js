$(document).ready(function() {
    $('#datePicker')
        .datepicker({
        	autoclose: true,
            format: 'yyyy-mm-dd'
        });

    $('#datePicker1')
        .datepicker({
        	autoclose: true,
            format: 'yyyy-mm-dd'
        });

    $('#myTable9').dataTable({
    	'bSort' : false
    });
});
