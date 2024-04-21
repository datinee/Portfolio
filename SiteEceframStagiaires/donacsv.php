<?php
$conn = mysqli_connect("localhost", "root", "", "ecefram");
$total=0;
$filename = "donations_csv.csv";
$fp = fopen('php://output', 'w');


header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

$query = "SELECT nom,prenom,Date,montant FROM donation join adherents on donation.idDonateur = adherents.id";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
	
	fputcsv($fp,$row,$delimiter = ";");
	
}
exit;
?>