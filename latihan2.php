<?php
//pengulangan pada array 
//for / foreach
$angka = [3,2,15,20,11,77,89];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 2</title>
	<style>
		div {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;

			}
	</style>
</head>
<body>
<!--supaya php hitung sendiri jumlah elemn di dalam array pakai count-->
<?php for ($i = 0; $i < count($angka); $i++) { ?>

<div><?php echo $angka[$i]; ?></div>
<?php } ?>

</body>
</html>
