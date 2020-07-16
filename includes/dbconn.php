
<?php
// UNCOMMENT ONLY AFTER SETTING UP DATABASE

if(!empty($_POST["send"])) {
	$email = $_POST["userEmail"];

	$conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "b89ae53a6851cf", "a4034734", "heroku_d9f93aa84a0eee6") or die("Connection Error: database currently set up locally" . mysqli_error($conn));
	mysqli_query($conn, "CREATE TABLE subscribers (
		id int(11) AUTO_INCREMENT,
		email varchar(255) NOT NULL,
		PRIMARY KEY  (id)
		)");
}

// $query = "SELECT ID FROM USERS";
// $result = mysqli_query($dbConnection, $query);

// if(empty($result)) {
//                 $query = "CREATE TABLE subscribers (
//                           id int(11) AUTO_INCREMENT,
//                           email varchar(255) NOT NULL,
//                           PRIMARY KEY  (id)
//                           )";
//                 $result = mysqli_query($dbConnection, $query);
// }


?>

