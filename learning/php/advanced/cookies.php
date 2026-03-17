<!-- setcookies is function must appaer before the <html> tag -->

<?php
$cookies_name = 'username';
$cookies_values = 'John Doe';

setcookie($cookies_name, $cookies_values, time() + (86400 * 30))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE[$cookies_name])) {
        echo 'Cookie' . $cookies_name . 'is set! <br>';
        echo 'Values is:' . $_COOKIE[$cookies_name];
        } else {
        echo "Cookie named" . $cookies_name . 'is not set';
        }
    ?>
</body>
</html>