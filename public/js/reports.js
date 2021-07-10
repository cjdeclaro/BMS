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

    $('#reports-table tbody').on('click', 'td #show-more-btn', function() {
        var tr      = $(this).closest('tr');
        var row     = reportstable.row(tr);

        if( row.child.isShown() ) {
            row.child.hide();
        } else {
            row.child( show_more( row.data() ) ).show();
        }
    });
});

function show_more(data) {

    console.log(data);
    var more = '';

    var reporting_data  = data.reporting_person;
    var victim_data     = data.victim;
    var suspect_data    = data.suspect;
    var narration_data  = data.narration;


    more += '<div class="container bg-light p-5">';

        more += '<table class="table">';
            more += '<thead>';
                more += '<tr>';
                    more += '<th><h4>Reporting Person</h4></th>';
                more += '</tr>';
            more += '</thead>';
            more += '<tbody>';
                more += '<tr>';
                    more += '<td><strong>Last Name:</strong><br> '+ reporting_data[0]['lastname'] +'</td>';
                    more += '<td><strong>First Name:</strong><br> '+ reporting_data[0]['firstname'] +'</td>';
                    more += '<td><strong>Middle Name:</strong><br> '+ reporting_data[0]['middlename'] +'</td>';
                    more += '<td><strong>Gender Name:</strong><br> '+ reporting_data[0]['gender'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Nick Name:</strong><br> '+ reporting_data[0]['nickname'] +'</td>';
                    more += '<td><strong>Citizenship:</strong><br> '+ reporting_data[0]['citizenship'] +'</td>';
                    more += '<td><strong>Civil Status:</strong><br> '+ reporting_data[0]['civil_status'] +'</td>';
                    more += '<td><strong>Birthday:</strong><br> '+ reporting_data[0]['birthday'] +'</td>';
                    more += '<td><strong>Qualifier:</strong><br> '+ reporting_data[0]['qualifier'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Phone #:</strong><br> '+ reporting_data[0]['phone'] +'</td>';
                    more += '<td><strong>Home #:</strong><br> '+ reporting_data[0]['home_no'] +'</td>';
                    more += '<td><strong>Email:</strong><br> '+ reporting_data[0]['email'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Address 1:</strong><br> '+ reporting_data[0]['address1'] +'</td>';
                    more += '<td><strong>Address 2:</strong><br> '+ reporting_data[0]['address2'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Highest Educational Attainment:</strong><br> '+ reporting_data[0]['education'] +'</td>';
                    more += '<td><strong>Occupation:</strong><br> '+ reporting_data[0]['occupation'] +'</td>';
                    more += '<td><strong>ID Card Presented:</strong><br> '+ reporting_data[0]['id_presented'] +'</td>';
                more += '</tr>';
            more += '</tbody>';
        more += '</table>';

        more += '<table class="table">';
            more += '<thead>';
                more += '<tr>';
                    more += '<th><h4>Suspect</h4></th>';
                more += '</tr>';
            more += '</thead>';
            more += '<tbody>';
                more += '<tr>';
                    more += '<td><strong>Last Name:</strong><br> '+ suspect_data[0]['lastname'] +'</td>';
                    more += '<td><strong>First Name:</strong><br> '+ suspect_data[0]['firstname'] +'</td>';
                    more += '<td><strong>Middle Name:</strong><br> '+ suspect_data[0]['middlename'] +'</td>';
                    more += '<td><strong>Gender Name:</strong><br> '+ suspect_data[0]['gender'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Nick Name:</strong><br> '+ suspect_data[0]['nickname'] +'</td>';
                    more += '<td><strong>Citizenship:</strong><br> '+ suspect_data[0]['citizenship'] +'</td>';
                    more += '<td><strong>Civil Status:</strong><br> '+ suspect_data[0]['civil_status'] +'</td>';
                    more += '<td><strong>Birthday:</strong><br> '+ suspect_data[0]['birthday'] +'</td>';
                    more += '<td><strong>Qualifier:</strong><br> '+ suspect_data[0]['qualifier'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Phone #:</strong><br> '+ suspect_data[0]['phone'] +'</td>';
                    more += '<td><strong>Home #:</strong><br> '+ suspect_data[0]['home_no'] +'</td>';
                    more += '<td><strong>Email:</strong><br> '+ suspect_data[0]['email'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Address 1:</strong><br> '+ suspect_data[0]['address1'] +'</td>';
                    more += '<td><strong>Address 2:</strong><br> '+ suspect_data[0]['address2'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Highest Educational Attainment:</strong><br> '+ suspect_data[0]['education'] +'</td>';
                    more += '<td><strong>Occupation:</strong><br> '+ suspect_data[0]['occupation'] +'</td>';
                    more += '<td><strong>ID Card Presented:</strong><br> '+ suspect_data[0]['id_presented'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Height:</strong><br> '+ suspect_data[0]['height'] +'</td>';
                    more += '<td><strong>Weight:</strong><br> '+ suspect_data[0]['weight'] +'</td>';
                    more += '<td><strong>Color of Eyes:</strong><br> '+ suspect_data[0]['eyes_color'] +'</td>';
                    more += '<td><strong>Color of Hair:</strong><br> '+ suspect_data[0]['hair_color'] +'</td>';
                    more += '<td><strong>Under Influence Of:</strong><br> '+ suspect_data[0]['influence_of'] +'</td>';
                more += '</tr>';
            more += '</tbody>';
        more += '</table>';

        more += '<table class="table">';
            more += '<thead>';
                more += '<tr>';
                    more += '<th><h4>Victim</h4></th>';
                more += '</tr>';
            more += '</thead>';
            more += '<tbody>';
                more += '<tr>';
                    more += '<td><strong>Last Name:</strong><br> '+ victim_data[0]['lastname'] +'</td>';
                    more += '<td><strong>First Name:</strong><br> '+ victim_data[0]['firstname'] +'</td>';
                    more += '<td><strong>Middle Name:</strong><br> '+ victim_data[0]['middlename'] +'</td>';
                    more += '<td><strong>Gender Name:</strong><br> '+ victim_data[0]['gender'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Nick Name:</strong><br> '+ victim_data[0]['nickname'] +'</td>';
                    more += '<td><strong>Citizenship:</strong><br> '+ victim_data[0]['citizenship'] +'</td>';
                    more += '<td><strong>Civil Status:</strong><br> '+ victim_data[0]['civil_status'] +'</td>';
                    more += '<td><strong>Birthday:</strong><br> '+ victim_data[0]['birthday'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Phone #:</strong><br> '+ victim_data[0]['phone'] +'</td>';
                    more += '<td><strong>Home #:</strong><br> '+ victim_data[0]['home_no'] +'</td>';
                    more += '<td><strong>Email:</strong><br> '+ victim_data[0]['email'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Address 1:</strong><br> '+ victim_data[0]['address1'] +'</td>';
                    more += '<td><strong>Address 2:</strong><br> '+ victim_data[0]['address2'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Highest Educational Attainment:</strong><br> '+ victim_data[0]['education'] +'</td>';
                    more += '<td><strong>Occupation:</strong><br> '+ victim_data[0]['occupation'] +'</td>';
                    more += '<td><strong>ID Card Presented:</strong><br> '+ victim_data[0]['id_presented'] +'</td>';
                more += '</tr>';
            more += '</tbody>';
        more += '</table>';

        more += '<table class="table">';
            more += '<thead>';
                more += '<tr>';
                    more += '<th><h4>Narrative of Incident</h4></th>';
                more += '</tr>';
            more += '</thead>';
            more += '<tbody>';
                more += '<tr>';
                    more += '<td><strong>Blotter Entry #:</strong><br> '+ data.blotter_entry_no +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Type of Incident:</strong><br> '+ narration_data[0]['incident_type'] +'</td>';
                    more += '<td><strong>Place of Incident:</strong><br> '+ narration_data[0]['incident_place'] +'</td>';
                more += '</tr>';
                more += '<tr>';
                    more += '<td><strong>Narration:</strong><br> '+ narration_data[0]['narration'] +'</td>';
                more += '</tr>';
            more += '</tbody>';
        more += '<table>';

    more += '</div>';

    return more;
}