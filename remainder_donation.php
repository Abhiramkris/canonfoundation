<?php
$name = $_POST['name'];
$email = $_POST['email'];
echo "hello";
$file = fopen('admin\datasheets\monthly_donation.csv', 'a');
fputcsv($file, array($name, $email));
fclose($file);
header('Location: remaindersucess.html');
exit();
?>