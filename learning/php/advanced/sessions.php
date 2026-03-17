<!-- session_start() - Starts a new session -->
<!-- $_SESSION - Stores and access session variables -->
<!-- unset() - Removes a specific session variable (e.g unset($_SESSION["favcolor"])) -->
<!-- session_destroy() - Destroys all data associated with the current session -->
<!-- session_unset() - Frees all session variables -->

<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Output session variables that were set on previous page
if(isset($_SESSION["favcolor"])) {
  echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
  echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
} else {
  echo "No session data found.";
}
?>

</body>
</html>