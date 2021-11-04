<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blotter Receipt</title>
</head>
<body>
    <h5>Blotter #: <strong><?= $blotter_no ?></strong></h5>
    <p>
        <h4><strong><center>INCIDENT TRANSACTION RECEIPT</center></strong></h4>
        <p>
            This is to certify that <strong><?= $reporting_name ?></strong>, <strong><?= $reporting_address ?></strong> 
            reported an incident to be recorded on the Barangay Blotter which involves <strong><?= $incident_type ?></strong> 
            happend on <strong><?= $incident_date . ' ' . $incident_time ?></strong> and recorded by <strong><?= $person_recorded ?></strong>.
        </p>
    </p>
</body>
</html>