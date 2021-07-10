$(document).ready(function() {
    var reportstable = $('#reports-table').DataTable({
        'ajax': 'api/blotter/get-all',
        'columns': [
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'blotter_entry_no',
                'defaultContent': ''
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'reporting_name',
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'suspect_name',
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'victim_name',
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'action',
            }
        ]
    });
});