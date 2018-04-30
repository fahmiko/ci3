<?php
foreach ($artikel->result() as $data) {
	echo $data->id." ";
	echo $data->title." ";
	echo $data->author."  ";
	echo $data->tanggal." ";
	echo "<br>";
}
?>