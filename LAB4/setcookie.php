<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$color = $_POST['color'];
	$expire_time = strtotime($_POST['expire_time']);
	setcookie("color", $color, $expire_time);
	if (isset($_GET['page'])) {
		header("Location: " . $_GET['page']);
	}
	else {
		header("Location: cookie.php");
	}
}
?>
