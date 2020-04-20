<?php
include('koneksitugas.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet;
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A2','No.');
$sheet->setCellValue('B2','Nama Lengkap');
$sheet->setCellValue('C2','NISN');
$sheet->setCellValue('D2','Email');
$sheet->setCellValue('E2','Tgl. Registrasi');
$sheet->setCellValue('F2','No. Telepon');
$sheet->setCellValue('G2','Jenis Kelamin');
$sheet->setCellValue('H2','NIK');
$sheet->setCellValue('I2','Tempat Tgl. Lahir');
$sheet->setCellValue('J2','No. Akta');
$sheet->setCellValue('K2','Kewarganegaraan');
$sheet->setCellValue('L2','Asal Negara');
$sheet->setCellValue('M2','Agama');
$sheet->setCellValue('N2','Anak ke-');
$sheet->setCellValue('O2','Berkebutuhan Khusus');
$sheet->setCellValue('P2','Jenis Kebutuhan Khusus');
$sheet->setCellValue('Q2','Alamat');
$sheet->setCellValue('R2','RT/RW');
$sheet->setCellValue('S2','Dusun, Desa');
$sheet->setCellValue('T2','Kecamatan');
$sheet->setCellValue('U2','Kode Pos');
$sheet->setCellValue('V2','Tempat Tinggal');
$sheet->setCellValue('W2','Moda Transportasi');
$sheet->setCellValue('X2','No. KKS');
$sheet->setCellValue('Y2','Penerima KPS');
$sheet->setCellValue('Z2','No. KPS');


$sql = "select * from daftarmhs ;";
$i = 3;
$no = 1;
$result = mysqli_query($connprak, $sql);
while($row=mysqli_fetch_array($result)){
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['nisn']);
	$sheet->setCellValue('D'.$i, $row['email']);
	$sheet->setCellValue('B'.$i, $row['tglregis']);
	$sheet->setCellValue('C'.$i, $row['no_telp']);
	$sheet->setCellValue('D'.$i, $row['jeniskel']);
	$sheet->setCellValue('E'.$i, $row['nik']);
	$sheet->setCellValue('F'.$i, $row['tempat_lahir'].", ".$row['tgl_lahir']);
	$sheet->setCellValue('G'.$i, $row['no_akta']);
	$sheet->setCellValue('H'.$i, $row['kewarganegaraan']);
	$sheet->setCellValue('I'.$i, $row['negara']);
	$sheet->setCellValue('J'.$i, $row['agama']);
	$sheet->setCellValue('K'.$i, $row['anak']);
	$sheet->setCellValue('L'.$i, $row['kebutuhan_khusus']);
	$sheet->setCellValue('M'.$i, $row['jeniskebutuhan']);
	$sheet->setCellValue('N'.$i, $row['alamat']);
	$sheet->setCellValue('O'.$i, $row['rt']."/".$row['rw']);
	$sheet->setCellValue('P'.$i, $row['dusun'].", ".$row['desa']);
	$sheet->setCellValue('Q'.$i, $row['kecamatan']);
	$sheet->setCellValue('R'.$i, $row['kdpos']);
	$sheet->setCellValue('S'.$i, $row['kepemilikan']);
	$sheet->setCellValue('T'.$i, $row['transport']);
	$sheet->setCellValue('U'.$i, $row['no_kks']);
	$sheet->setCellValue('V'.$i, $row['kps']);
	$sheet->setCellValue('W'.$i, $row['no_kps']);
	$i++;
}
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Data Keseluruhan.xlsx');
header("location:index.php");
?>