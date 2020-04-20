<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		body {
			padding-top: 150px;
		}
form:before {
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: -1;
    border-radius: 10px;
	background-color: #343a40;
}
		p {
			color:white;
	transition: all 0.5s ease;
		}
		p:hover {
			color: #007bff;
	margin-left:10px ;
}
	</style>
</head>

<body>

        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4 ">
                    <h1 class="display-4 py-2 text-truncate">Cari Data.</h1>
                    <div class="px-2">
                        <form action="cekpencarian.php" method="post">
							<div class="justify-content-center">
                            <div class="form-group">
                                <label class="sr-only">NISN</label>
                                <input type="text" class="form-control" placeholder="NISN" name="nisn">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama anda" name="nama">
                            </div>
								
                            <button type="submit" class="btn btn-primary btn-lg">Cari Data</button>
							</div>
							<a href="pendaftaran.php"><p align="left">Belum terdaftar ? -></p></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>