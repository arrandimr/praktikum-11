<?php
include "koneksitugas.php";
$sql = "insert into daftarmhs (nisn, nama, email, tglregis, no_telp, jeniskel, nik, tempat_lahir, tgl_lahir, no_akta, kewarganegaraan, negara, agama, anak, kebutuhan_khusus, jeniskebutuhan, alamat, rt, rw, dusun, desa, kecamatan, kdpos, kepemilikan, transport, no_kks, kps, no_kps) values ('".$nisn."','".$nama."','".$email."','".$tanggal."','".$telp."','".$jeniskel."','".$nik."','".$temlahir."','".$tgllahir."','".$akta."','".$kwn."','".$negara."','".$agama."','".$anak."','".$kkhusus."','".$jeniskkhusus."','".$alamat."','".$rt."','".$rw."','".$dusun."','".$desa."','".$kecamatan."','".$kdpos."', '".$kepemilikan."','".$transport."','".$kks."','".$kps."','".$nokps."')";

if (mysqli_query($connprak, $sql)){} 
else {
	echo "Error : ".$sql."<br>".mysqli_error($connprak);
}
mysqli_close($connprak);
?>

