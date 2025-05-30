<?php 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Compeer.hood</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
		<header>
	<div class="container">
		<h1><a href="index.php">Compeer.hood</a></h1>
		<ul class="nav">
			<li class="dropdown">
				<a href="produk.php" class="dropbtn">Produk ▼</a>
				<div class="dropdown-content">
					<?php 
					$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
					if(mysqli_num_rows($kategori) > 0){
						while($k = mysqli_fetch_array($kategori)){
				?>
					<a href="produk.php?kat=<?php echo $k['category_id'] ?>">
						<div class="col-5">
							
							<p><?php echo $k['category_name'] ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Kategori tidak ada</p>
				<?php } ?>
				</div>
			</li>
		</ul>

		</header>
<div class="img1">
	<img src="img/Artboard 3.png"  alt="Compeer Shopee Banner" class="image">
</div>


			



		<div class="video">
  <video controls width="100%" height="auto">
    <source src="vid/IMG_6044.MP4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
				</div>
				</div>
</div>
					



	</div>
</section>

	

	

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<h4>No. Hp</h4>
			<p><?php echo $a->admin_telp ?></p>
			
		</div>
	</div>
</body>
</html>