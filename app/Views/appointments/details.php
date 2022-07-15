
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	<p><b>Appointment Schedule:</b> <?=$appointment['date_scheduled']?></p>
    <p><b>Patient Name:</b> <?= $appointment['first_name']?>&nbsp;<?= $appointment['last_name']?> </p>
    <p><b>Gender:</b> <?php echo ucwords($appointment['gender']) ?></p>
    <p><b>Email:</b> <?php echo $appointment['email']?></td></p>
    <p><b>Ailment: </b><?=$appointment['appointment_reason']?></p>
    <p><b>Status: <?=$appointment['status']?></b>





</body>
</html>






