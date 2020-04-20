	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color: #FF0000;}
		.container {
			padding-top: 25px;
		}
				
	</style>
</head>

<body>	
<div class="container rounded shadow bg-white ">
	<div class="card ">
				<div class="card-header bg-primary text-white shadow sticky-top" align="center">
					<p class="h4">FORMULIR PESERTA DIDIK</p>
				</div>
		
				<div class="card-body bg-dark text-white">
				<form method="post" action="reportdatapribadi.php" >
					
				<span class="d-block p-2 bg-secondary text-white rounded shadow-sm">DATA PRIBADI</span><br>
					
				<?php
	
include ("koneksitugas.php");
$sql = "select * from daftarmhs where nisn=".$_POST['nisn']." and nama='".$_POST['nama']."';";
$result = mysqli_query($connprak, $sql);
if (mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_row($result)){
	?>
			<div class="form-group row">
			  <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
					<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[1]; ?></label>
					<input type="hidden" name="nama" value="<?php $_POST['nama'] ?>"> 
				</div>
			</div>
			
			<div class="form-group row">
			  <label for="nama" class="col-sm-3 col-form-label">NISN</label>
					<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[0]; ?></label>
					<input type="hidden" name="nisn" value="<?php $_POST['nisn'] ?>">
				</div>
			</div>
					
			<div class="form-group row">
				<label for="email" class="col-sm-3 col-form-label">Email</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[2]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tanggal Registrasi</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[3]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="telp" class="col-sm-3 col-form-label">No. Telpon</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[4]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="jeniskel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
					<div class="col-sm">
						<label class="col-sm text-white"><?php echo $row[5]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="nik" class="col-sm-3 col-form-label">NIK</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[6]; ?></label>
				</div>
			</div>
		
			<div class="form-group row">
				<label for="temlahir" class="col-sm-3 col-form-label">Tempat tanggal Lahir</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[7].", ".$row[8]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="akta" class="col-sm-3 col-form-label">No. Akta Kelahiran</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[9]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
			  <label for="agama" class="col-sm-3 col-form-label">Agama</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[12]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
					<div class="col-sm">
						<label class="col-sm text-white"><?php echo $row[10]; ?>, <?php echo $row[11]; ?></label>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="kkhusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm">
						<label class="col-sm text-white"><?php echo $row[14]; ?>, <?php echo $row[15]; ?></label>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[16]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="rtrw" class="col-sm-3 col-form-label">RT/RW</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[17]."/".$row[18]; ?></label>
					</div>
			</div>
					
			<div class="form-group row">
				<label for="dusun/desa" class="col-sm-3 col-form-label">Dusun/Desa</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[19]." / ".$row[20]; ?></label>
					</div>
			</div>
					
			<div class="form-group row">
				<label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[21]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="kdpos" class="col-sm-3 col-form-label">Kode Pos</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[22]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
			  <label for="kepemilikan" class="col-sm-3 col-form-label">Kepemilikan <br> tempat tinggal</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[23]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
			  <label for="transport" class="col-sm-3 col-form-label">Moda Transportasi</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[24]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="kks" class="col-sm-3 col-form-label">No. KKS <br>(Kartu Keluarga Sejahtera)</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[25]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="anak" class="col-sm-3 col-form-label">Anak ke</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[13]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="kps" class="col-sm-3 col-form-label">Penerima KPS</label>
					<div class="col-sm">
						<label class="col-sm text-white"><?php echo $row[26]; ?></label>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="nokps" class="col-sm-3 col-form-label">No. KPS <br>(Apabila menerima)</label>
				<div class="col-sm">
					<label class="col-sm text-white"><?php echo $row[27]; ?></label>
				</div>
					</div>
				  </form>
</div>
</div>

			<div class="col-sm-4">
				<?php
		}
}
			mysqli_close($connprak);	
			?>
			</div>
			
</div>
	
</body>
</html>