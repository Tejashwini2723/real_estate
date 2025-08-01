
<?php
	session_start();
	session_destroy();
echo '<script>alert("Logout Successful Visit Our Site Again THANKU");window.location.assign("../index.php");</script>';
?>