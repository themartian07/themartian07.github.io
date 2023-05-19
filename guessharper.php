<?php
	$correct = false;
	if(!isset( $_COOKIE['admin'] )){
		setcookie('admin', 'false');
	}
	else{
		if ($_COOKIE['admin'] === 'true') {
			$correct=true;
		}
	}
?>

<html>
	<head></head>
	<body>
		<?php
			if($correct){ 
		?>
			<p>CW23{C0k3_mOuN7@!n_D3ww}</p>
		<?php }
			else{ ?>
				<p>HA! You'll never guess my password!</p>
		<?php	} ?>
		
		<form method="POST">
			<input type="text" name="password">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>