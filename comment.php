<?php
$a = array('ic', 'du', 'co', 'gi', 'ann', 'e', 'upe', 'as', 'nn', '@se');
$to = $a[3].$a[4].$a[0];

$subject = "FROM: ".$_POST['from'];
$msg = "E-MAIL: ".$_POST['email']."\n\n"."MESSAGE:\n\n".$_POST['msg'];
$to = $to.$a[9].$a[7].".".$a[6].$a[8].".".$a[5].$a[1];

mail($to, $subject, $msg);

header('Refresh:5; URL=http://www.giannic.com/contact.php');
?>

<html>
<head></head>

<body>

<p>Message sent! Heading back in 5 seconds!</p>

</body>
</html>
