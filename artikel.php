<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
	<h2>REFAELSINAGA | RL</h2>
	<h5>Tutorial bagaimana cara upload video pada CodeIgniter</h5>
	<hr>
	<?php 
		foreach ($posting as $ps) {
	?>

	<h1><?php echo $ps->judul ?></h1>
	<p><?php 
			$isi = $ps->ket;
			$cut = substr($isi,0,100);
			echo $cut;
		?>
	</p>

	<a href="<?php echo base_url('index.php/NmController/readmore/'.$ps->id)?>">Readmore</a>
	<hr>
	<?php } ?>

</body>
</html>
