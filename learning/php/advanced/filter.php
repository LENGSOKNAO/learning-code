<!-- filter_var() - Filters a single variable with a specified filter -->
<!-- filter_input() - Gets an external variable (e.g. from form input) and filters it -->
<!-- filter_var_array() - Filters multiple external variables (an array) and filters them -->
<!-- filter_list() - Lists all supported filter names and ids -->

<?php
$email = 'example@gmail.com';
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if(!filter_var($email, FILTER_SANITIZE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?>