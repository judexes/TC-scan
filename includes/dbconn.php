
<?php
// UNCOMMENT ONLY AFTER SETTING UP DATABASE

if(!empty($_POST["send"])) {
	$email = $_POST["userEmail"];

	$conn = mysqli_connect("localhost", "root", "", "scan-tc_db") or die("Connection Error: database currently set up locally" . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO subscribers (email) VALUES ('" . $email. "')");
}
?>

