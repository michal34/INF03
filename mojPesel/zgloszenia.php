<?php
	$db = mysqli_connect("localhost", "root", "", "wedkarstwo");
	
	if(isset($_POST['lowisko']) && isset($_POST['data']) && isset($_POST['sedzia'])) {
		$lowisko = $_POST['lowisko'];
		$data = $_POST['data'];
		$sedzia = $_POST['sedzia'];
		
		$query = 'INSERT INTO Zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES
				  (1, ' . $lowisko . ', "' . $data . '", "' . $sedzia . '");';
		
		$result = mysqli_query($db, $query);
		echo $result;
	}
	mysqli_close($db);

?>