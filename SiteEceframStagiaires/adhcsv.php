<?php
$conn = mysqli_connect("localhost", "root", "", "ecefram");

$filename = "donateurs_csv.csv";
$fp = fopen('php://output', 'w');

$sql = "SELECT upper(COLUMN_NAME) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='ecefram' AND TABLE_NAME='adherents' and column_name != 'id'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_row($result)) {
	$header[] = $row[0];
}	

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header,$delimiter = ";");

$query = "SELECT nom,prenom,tel,mail,adherent FROM adherents";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row,$delimiter = ";");
}
exit;
?>