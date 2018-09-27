<!DOCTYPE>
<html>
	<head>
		<title> List Nama Artis</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="custom.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">List Artis</a>
    			</div>
				<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li><a href="#">Artis Cantik</a></li>
					<li><a href="#">Artis Ganteng</a></li>
				</ul>
				 <form class="navbar-form navbar-right">
				 	<div class="form-group">
				 		<input type="text" class="form-control" placeholder="Cari Nama Artis">
  					</div>
  					<button type="submit" class="btn btn-default">Submit</button>
				</form>
  			</div>
		</nav>
		<br><br><br>
		<h3>Daftar Artis Cantik </h3>
		
			<div class="container">
			<table class="table table-bordered" >
				<thead>
					<tr class="active">
						<div class="thead">
							<th> Nama </th>
							<th> Tanggal Lahir </th>
							<th> Tempat Lahir </th>
							<th> Agama </th>
							<th> Foto </th>
						</div>
					</tr>
				</thead>
				<tbody>
					<?php include 'list_artis.php';
						foreach($kumpulan_artis as $artis){
							echo "<tr class='active'>";
								echo "<td>". $artis["nama"]. "</td>";
								echo "<td>". $artis["tgl_lahir"]. "</td>";
								echo "<td>". $artis["tempat_lahir"]. "</td>";
								echo "<td>". $artis["agama"]. "</td>";
								echo "<td style='text-align:center'>". $artis["foto"]. "</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
				<div class="col-md-12">
					<div class="footer"><p>Copyright 2018 FADLI RAMADHAN</p></div>
		</div>
	</body>
</html>