<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script language="javascript">
		function pesan(){
			alert("Anda belum terdaftar, silahkan isi form pendaftaran berikut");
		}
	</script>
	<style>
		.warning {color: #FF0000;}
		.container {
			padding-top: 25px;
		}
			
	</style>
</head>

<body onLoad=pesan()>
	<?php
	
	$error_tanggal= "";		$error_nisn = "";		$error_agama = "";		$error_rw = "";			$error_kepemilikan = "";
	$error_nama = "";		$error_nik = "";		$error_kwn = "";		$error_dusun = "";		$error_transport = "";
	$error_email = "";		$error_temlahir = "";	$error_kkhusus = "";	$error_desa= "";		$error_kks = "";
	$error_telp = "";		$error_tgllahir = "";	$error_alamat = "";		$error_kecamatan = "";	$error_anak = "";
	$error_jeniskel= "";	$error_akta = "";		$error_rt = "";			$error_kdpos = "";		$error_kps = "";
	$error_nokps = "";		$error_check = "";		$error_isian = "";
	
	$tanggal = "";	$nik = "";		$kwn = "";		$dusun = "";		$transport = "";
	$nama = "";		$temlahir = "";	$kkhusus = "";	$desa= "";			$kks = "";
	$email = "";	$tgllahir = "";	$alamat = "";	$kecamatan = "";	$anak = "";
	$telp = "";		$akta = "";		$rt = "";		$kdpos = "";		$kps = "";
	$jeniskel= "";	$agama = "";	$rw = "";		$kepemilikan = "";	$nokps = "";
	$nisn = "";		$check = "";	$negara = "";	$jeniskkhusus = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST["tanggal"])){
			$error_tanggal = "Tanggal tidak boleh kosong";
		} else{
			$tanggal = cek_input($_POST["tanggal"]);
		}
		
		if(empty($_POST["nama"])){
			$error_nama = "Nama tidak boleh kosong";
		} else{
			$nama = cek_input($_POST["nama"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$nama)){
				$error_nama = "Input Hanya boleh huruf dan spasi";
				$nama = "";
			}else $nama = cek_input($_POST["nama"]);
		}
		
		if(empty($_POST["email"])){
			$error_email = "Email tidak boleh kosong";
		} else{ 
			$email = cek_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error_email = "Format email valid";
			}
		}
		
		if(empty($_POST["telp"])){
			$error_telp = "Telp tidak boleh kosong";
		} else{ 
			$telp = cek_input($_POST["telp"]);
			if (!is_numeric($telp)){
				$error_telp = "Nomor HP hanya boleh angka";
			}
		}
		
		if(empty($_POST["radio"])){
			$error_jeniskel = "Pilih salah satu jenis kelamin";
		} else{
			$jeniskel = cek_input($_POST["radio"]);
			}
		
		if(empty($_POST["nisn"])){
			$error_nisn = "NISN tidak boleh kosong";
		} else{ 
			$nisn = cek_input($_POST["nisn"]);
			if (!is_numeric($nisn)){
				$error_nisn = "NISN hanya boleh angka";
			}
		}
	
		if(empty($_POST["nik"])){
			$error_nik = "NIK tidak boleh kosong";
		} else{ 
			$nik = cek_input($_POST["nik"]);
			if (!is_numeric($nik)){
				$error_nik = "NIK hanya boleh angka";
			}
		}
		
		if(empty($_POST["temlahir"])){
			$error_temlahir = "Tempat lahir tidak boleh kosong";
		} else{
			$temlahir = cek_input($_POST["temlahir"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$temlahir)){
				$error_temlahir = "Input Hanya boleh huruf dan spasi";
			}
		}
		
		if(empty($_POST["tgllahir"])){
			$error_tgllahir = "Tanggal lahir tidak boleh kosong";
		} else{
			$tgllahir = cek_input($_POST["tgllahir"]);
		}
		
		if(empty($_POST["akta"])){
			$error_akta = "No. Akta kelahiran tidak boleh kosong";
		} else{
			$akta = cek_input($_POST["akta"]);
			if (!preg_match("/^[a-zA-Z0-9]*$/",$akta)){
				$error_akta = "Input Hanya boleh huruf dan angka";
				$akta = "";
			}else{
				$akta = cek_input($_POST["akta"]);
			}
		}
		
		if(empty($_POST["agama"])){
			$error_agama = "Pilih salah satu Agama";
		} else if($_POST["agama"]=="noneag"){
			$error_agama = "Pilih salah satu Agama";
		} else{
			$agama = cek_input($_POST["agama"]);
		}
		
		if(empty($_POST["radiokwn"])){
			$error_kwn = "Pilih salah satu";
		} else{
			$kwn = cek_input($_POST["radiokwn"]);
			$negara = cek_input($_POST["negara"]);
			}
		
		if(empty($_POST["radiokkhusus"])){
			$error_kkhusus = "Pilih salah satu";
		} else{
			$kkhusus = cek_input($_POST["radiokkhusus"]);
			$jeniskkhusus = cek_input($_POST["jeniskkhusus"]);
			}
		
		if(empty($_POST["alamat"])){
			$error_alamat = "Alamat tidak boleh kosong";
		} else{ 
			$alamat = cek_input($_POST["alamat"]);
		}
		
		if(empty($_POST["rt"] || $_POST["rw"])){
			$error_rt = "RT/RW tidak boleh kosong";
		}else{ 
			$rt = cek_input($_POST["rt"]);
			$rw = cek_input($_POST["rw"]);
		}
		
		if(empty($_POST["dusun"] || $_POST["desa"])){
			$error_dusun = "dusun/desa tidak boleh kosong";
		}else{ 
			$dusun = cek_input($_POST["dusun"]);
			$desa = cek_input($_POST["desa"]);
		}
		
		if(empty($_POST["kecamatan"])){
			$error_kecamatan = "Kecamatan tidak boleh kosong";
		} else{
			$kecamatan = cek_input($_POST["kecamatan"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$kecamatan)){
				$error_kecamatan = "Input Hanya boleh huruf dan spasi";
				$kecamatan = null;
			}else $kecamatan = cek_input($_POST["kecamatan"]);
		}
		
		if(empty($_POST["kdpos"])){
			$error_kdpos = "Kode Pos tidak boleh kosong";
		} else{ 
			$kdpos = cek_input($_POST["kdpos"]);
			if (!is_numeric($kdpos)){
				$error_kdpos = "Kode Pos hanya boleh angka";
			}
		}
		
		if(empty($_POST["kepemilikan"])){
			$error_kepemilikan = "Pilih salah satu";
		} else if($_POST["kepemilikan"]=="nonekp"){
			$error_kepemilikan = "Pilih salah satu";
		} else{
			$kepemilikan = cek_input($_POST["kepemilikan"]);
		}
		
		if(empty($_POST["transport"])){
			$error_transport = "Pilih salah satu";
		} else if($_POST["transport"]=="nonetr"){
			$error_transport = "Pilih salah satu";
		} else{
			$transport = cek_input($_POST["transport"]);
		}
		
		if(!is_numeric($_POST["kks"])){
			$error_kks = "No. KKS hanya boleh angka";
		} else{ 
			$kks = cek_input($_POST["kks"]);
		}
		
		if(!is_numeric($_POST["anak"])){
			$error_anak = "Input hanya boleh angka";
		} else{ 
			$anak = cek_input($_POST["anak"]);
		}
		
		if(empty($_POST["radiokps"])){
			$error_kps = "Pilih salah satu";
		} else{
			$kps = cek_input($_POST["radiokps"]);
		}
		
		if (is_null($_POST["nokps"])){
			$nokps = null;
		}else{
			if (is_numeric($_POST["nokps"])){
			$nokps = cek_input($_POST["nokps"]);
		}
		}
		
		if(isset($_POST["checkbox1"])){
			if(empty($tanggal && $nama && $email && $telp && $jeniskel && $nisn && $nik && $temlahir && $tgllahir && $akta && $agama && $kwn && $kkhusus && $alamat && $rt && $rw && $dusun && $desa && $kecamatan && $kdpos && $kepemilikan && $transport && $kks && $anak && $kps )){
				$error_check = "pastikan semua data terisi";
			} else {
				$check = cek_input($_POST["checkbox1"]);
			include "simpan.php";
			header("location:index.php");
			}
			
		} else {
			$error_check = "Pastikan data anda di isi dengan benar";
		}
 
	
		
	}
	
	function cek_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	} 
		
	?>
<div class="container rounded shadow bg-white">
	<div class="card ">
				<div class="card-header bg-primary text-white shadow sticky-top" align="center">
					<p class="h4">FORMULIR PESERTA DIDIK</p>
				</div>
		<div class="warning"><?php echo $error_isian;?></div>
		
				<div class="card-body bg-dark text-white">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					<div class="container row">
   						<div class="col-sm">
							<div class="form-group row">
		 						<label for="tanggal" class="col-form-label">Tanggal</label>
								<input type="date" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : ""); ?>" id="tanggal" placeholder="tanggal" value="<?php echo $tanggal; ?>"><span class="warning"><?php echo $error_tanggal; ?></span>
		  					</div>
     					</div>
    					<div class="col-sm">
    					</div>
    					<div class="col-sm">
							<span class="badge bg-primary text-white text-wrap float-right" style="width: 6rem;"><h4 align="center">F-PD</h4></span>
    					</div>
  					</div>
					<div class="col-md-4"></div>
				<span class="d-block p-2 bg-secondary text-white rounded shadow-sm">DATA PRIBADI</span><br>
					
				
			<div class="form-group row">
				<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
					<div class="col-sm-6">
					<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : "");?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama;?>
						</span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="email" class="col-sm-3 col-form-label">Email</label>
				<div class="col-sm-6">
					<input type="text" name="email" class="form-control <?php echo($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="telp" class="col-sm-3 col-form-label">No. Telpon</label>
				<div class="col-sm-5">
					<input type="text" name="telp" class="form-control <?php echo($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="Telpon" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="jeniskel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-8">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="laki" name="radio" class="custom-control-input" value="Laki - Laki">
  					<label class="custom-control-label" for="laki">Laki -Laki </label>
				</div> 
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="perempuan" name="radio" class="custom-control-input" value="Perempuan"> 
  					<label class="custom-control-label" for="perempuan">Perempuan</label>
				</div>
					<?php echo ($error_jeniskel !="" ? "" : "");?>
						<span class="warning"><?php echo $error_jeniskel;?></span>
				
					</div>
			</div>
					
			<div class="form-group row">
				<label for="nisn" class="col-sm-3 col-form-label">NISN</label>
				<div class="col-sm-5">
					<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="nik" class="col-sm-3 col-form-label">NIK</label>
				<div class="col-sm-5">
					<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
				</div>
			</div>
		
			<div class="form-group row">
				<label for="temlahir" class="col-sm-3 col-form-label">Kota Lahir</label>
				<div class="col-sm-4">
					<input type="text" name="temlahir" class="form-control <?php echo($error_temlahir !="" ? "is-invalid" : ""); ?>" id="temlahir" placeholder="Kota Lahir" value="<?php echo $temlahir; ?>"><span class="warning"><?php echo $error_temlahir; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="temlahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-4">
					<input type="date" name="tgllahir" class="form-control <?php echo($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" placeholder="Tanggal lahir" value="<?php echo $tgllahir; ?>"><span class="warning"><?php echo $error_tgllahir; ?></span>
				</div>
			</div>	
					
			<div class="form-group row">
				<label for="akta" class="col-sm-3 col-form-label">No. Akta Kelahiran</label>
				<div class="col-sm-5">
					<input type="text" name="akta" class="form-control <?php echo($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="No. Akta kelahiran" value="<?php echo $akta; ?>"><span class="warning"><?php echo $error_akta; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
			  <label for="agama" class="col-sm-3 col-form-label">Agama</label>
				<div class="col-sm-4"><select name="agama" class="form-control <?php echo($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" value="<?php echo $agama; ?>" >
				  <option value="noneag">Pilih Agama anda...</option>
				  <option value="Islam">Islam</option>
				  <option value="Kristen">Kristen</option>
				  <option value="Katholik">Katholik</option>
				  <option value="Hindu">Hindu</option>
				  <option value="Budha">Budha</option>
				  <option value="Konghuchu">Konghuchu</option>
                </select><span class="warning"><?php echo $error_agama; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
					<div class="col-sm">
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="wni" name="radiokwn" class="custom-control-input" value="WNI">
  							<label class="custom-control-label" for="wni">WNI</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="wna" name="radiokwn" class="custom-control-input" value="WNA">
  							<label class="custom-control-label" for="wna">WNA</label>
						</div>
						<div class="col-sm-4 custom-control-inline">
							<input type="text" name="negara" class="form-control" id="negara" placeholder="Negara Asal" value="<?php echo $negara; ?>">
				</div>
							<?php echo ($error_kwn !="" ? "" : "");?>
							<span class="warning"><?php echo $error_kwn;?></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="kkhusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm">
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="ya" name="radiokkhusus" class="custom-control-input" value="YA">
  							<label class="custom-control-label" for="ya">YA</label>
						</div> 
						<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="tidak" name="radiokkhusus" class="custom-control-input" value="TIDAK"> 
  							<label class="custom-control-label" for="tidak">TIDAK</label>
						</div>
						<div class="col-sm-4 custom-control-inline">
							<input type="text" name="jeniskkhusus" class="form-control" id="jeniskkhusus" placeholder="Kebutuhan khusus" value="<?php echo $jeniskkhusus; ?>">
				</div>
						<?php echo ($error_kkhusus !="" ? "" : "");?>
						<span class="warning"><?php echo $error_kkhusus;?></span>	
							
						</div>
				</div>
				
			<div class="form-group row">
				<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
				<div class="col-sm-7">
					<textarea name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : ""); ?>"><?php echo $alamat; ?></textarea><span class="warning" ><?php echo $error_alamat; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="rtrw" class="col-sm-3 col-form-label">RT/RW</label>
				<div class="col-sm-1">
					<input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>">
					</div>	
				<div class="col-sm-1">
					<input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>">
				</div>
				<div class="col-sm"><span class="warning"><?php echo $error_rt ;  ?></span></div>
			</div>
					
			<div class="form-group row">
				<label for="dusun/desa" class="col-sm-3 col-form-label">Dusun/Desa</label>
				<div class="col-sm-2">
					<input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>">
					</div>	
				<div class="col-sm-2">
					<input type="text" name="desa" class="form-control <?php echo($error_desa !="" ? "is-invalid" : ""); ?>" id="desa" placeholder="Desa" value="<?php echo $desa; ?>">
				</div>
				<div class="col-sm"><span class="warning"><?php echo $error_dusun ;  ?></span></div>
			</div>
					
			<div class="form-group row">
				<label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
				<div class="col-sm-4">
					<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="kdpos" class="col-sm-3 col-form-label">Kode Pos</label>
				<div class="col-sm-2">
					<input type="text" name="kdpos" class="form-control <?php echo($error_kdpos !="" ? "is-invalid" : ""); ?>" id="kdpos" placeholder="Kode Pos" value="<?php echo $kdpos; ?>">
				</div>
				<div class="col-sm-3"><span class="warning"><?php echo $error_kdpos; ?></span></div>
			</div>
					
			<div class="form-group row">
			  <label for="kepemilikan" class="col-sm-3 col-form-label">Kepemilikan <br> tempat tinggal</label>
				<div class="col-sm-4"><select name="kepemilikan" class="form-control <?php echo($error_kepemilikan !="" ? "is-invalid" : ""); ?>" id="kepemilikan" value="<?php echo $kepemilikan; ?>" >
				  <option value="nonekp">Pilih salah satu...</option>
				  <option value="Rumah orang tua">Rumah orang tua</option>
				  <option value="Rumah kerabat">Rumah kerabat</option>
				  <option value="Kontrakan">Kontrakan</option>
				  <option value="Kos">Kos</option>
                </select><span class="warning"><?php echo $error_kepemilikan; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
			  <label for="transport" class="col-sm-3 col-form-label">Moda Transportasi</label>
				<div class="col-sm-4"><select name="transport" class="form-control <?php echo($error_transport !="" ? "is-invalid" : ""); ?>" id="transport" value="<?php echo $transport; ?>" >
				  <option value="nonetr">Pilih salah satu...</option>
				  <option value="Jalan kaki">Jalan kaki</option>
				  <option value="Motor pribadi">Motor pribadi</option>
				  <option value="Mobil pribadi">Mobil pribadi</option>
				  <option value="Angkutan umum">Angkutan umum</option>
                </select><span class="warning"><?php echo $error_transport; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="kks" class="col-sm-3 col-form-label">No. KKS <br>(Kartu Keluarga Sejahtera)</label>
				<div class="col-sm-5">
					<input type="text" name="kks" class="form-control <?php echo($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="No. KKS" value="<?php echo $kks; ?>"><span class="warning"><?php echo $error_kks; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="anak" class="col-sm-3 col-form-label">Anak ke</label>
				<div class="col-sm-1">
					<input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : ""); ?>" id="anak" placeholder="Anak ke" value="<?php echo $anak; ?>"></span>
				</div><div class="col-sm-3"><span class="warning"><?php echo $error_anak; ?></div>
			</div>
					
			<div class="form-group row">
				<label for="kps" class="col-sm-3 col-form-label">Penerima KPS</label>
					<div class="col-sm-8">
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="penerima" name="radiokps" class="custom-control-input" value="penerima">
  							<label class="custom-control-label" for="penerima">YA</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="bukan" name="radiokps" class="custom-control-input" value="bukan">
  							<label class="custom-control-label" for="bukan">TIDAK</label>
						</div>
						<span class="warning"><?php echo $error_kps;?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="nokps" class="col-sm-3 col-form-label">No. KPS <br>(Apabila menerima)</label>
				<div class="col-sm-5">
					<input type="text" name="nokps" class="form-control <?php echo($error_nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder="No. KPS" value="<?php echo $nokps; ?>"><span class="warning"><?php echo $error_nokps; ?></span>
				</div>
			</div>
					
					<div class="form-group row">
						<div class="col-sm-3 col-form-label"></div>
						<div class="col-sm-5 checkbox"><input name="checkbox1" type="checkbox" id="checkbox1" value="<?php echo $check; ?>"><label for="checkbox1" class="col-form-label">Saya telah mengisi form dengan sebenar - benarnya</label><span class="warning"><?php echo $error_check; ?></span></div>
					</div>
					
			<div class="form-group row float-right">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary" value="Get Selected Values">Simpan</button>
				</div>	
			</div>
					</form>
</div>
</div>			
</div>

	
</body>
</html>