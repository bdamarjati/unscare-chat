$(function () {
    "use strict";

    var minDate, maxDate;

    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date(data[5]);

            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        }
    );


    $(document).ready(function () {
        $('#example').DataTable();
    });

    $(document).ready(function () {
        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'MMMM Do YYYY hh:mm:ss'
        });
        maxDate = new DateTime($('#max'), {
            format: 'MMMM Do YYYY hh:mm:ss'
        });
        // DataTables initialisation
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print'],
        });
        // Refilter the table
        $('#min, #max').on('change', function () {
            table.draw();
            
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });

});
