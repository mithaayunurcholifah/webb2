<!DOCTYPE html>
<html>
<head>
	<title>Penggunaan Switch- Case</title>
</head>
<body>
Hari ini :
<?php
$nama_hari = date("1");
Switch ($nama_hari)
{
	Case "Sunday";
	print("Minggu");
		print "Waktu untuk istirahat";
	break;
	Case "Monday";
	print("Senin <br>");
		print "Meeting awal minggu jam 08:00";
	break;
	Case "Tuesday";
	print("Selasa <br>");
		print "Pembukaan Workshop Diklat";
	break;
	Case "Wednesday";
	print("Rabu <br>");
		print "Seminar Launching Window Vista di JHCC";
	break;
	Case "Thrusday";
	print("Kamis <br>");
		print "Pertemuan dengan Mahasiswa";
	break;
	Case "Friday";
	print("Jum'at <br>");
		print "Jogging bersama";
	break;
	Default:
	print("Sabtu <br> ");
	print "Survey harga ke Dusit, Mangga Dua";
}
?>
</body>
</html>