<!DOCTYPE html>
<html>
<head>
    <title>Email Subscription</title>
</head>
<body>
    <form action="add_to_csv.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
$name = $_POST['name'];
$email = $_POST['email'];

$file = fopen('admin\datasheets\monthly_donation.csv', 'a');
fputcsv($file, array($name, $email));
fclose($file);

header('Location: remaindersucess.html');
exit();
?>