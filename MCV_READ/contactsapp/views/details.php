<?
//data is coming from viewModel
echo "<center>";
foreach($data as $d){
	echo " <b>Email:</b>";
	echo $d["email"];
	echo " <b>Phone:</b>";
	echo $d["phone"];
	echo " <b>Address:</b>";
	echo $d["address"];
	echo "<br>";
}
echo "</center>";
?>