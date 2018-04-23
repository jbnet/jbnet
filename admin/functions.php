<?php



abstract class User {
	public $LID;
	public $naam;
	public $profile;

		if(!isset($_COOKIE['LVLID'])) {
			echo "Cookie is not set!";
		} else {
			echo "Cookie is set!<br>";
		}

	public fuction UserProfile(){

		$LID=htmlspecialchars($_COOKIE['LVLID']);
		$conn = new mysqli('sql35.hostingdiscounter.nl', 'jbnet-nl', 'KxRQ_5CLz', 'jbnet-nl');

		 /* check connection */
		if ($conn->connect_errno) {
			printf("Connect failed: %s\n", $conn->connect_error);
			exit();
		}

		//profiel en naam opzoeken
		$sql = "SELECT * FROM lvprofiel WHERE lidnr='$user'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row from $result
		while($row = $result->fetch_assoc()) {
			$naam=$row['naam'];
			$profile=$row['profiel'];
			}
		}
	return;
	}
}

?>
