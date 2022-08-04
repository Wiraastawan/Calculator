<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="../Models/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="wrapper">
        <nav>
        <div class="container-flex">
            <div class="brand">
                <a href="">Calculator</a>
            </div>
            <div class="burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            </div>
            <div class="bg-sidebar"></div>
            <ul class="sidebar">
                <li><a href="#standart">Standart</a></li>
            </ul>
        </div>
        </nav>
    </div>
    <?php
    include "../proses/calculator.php";
    ?>
    <div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>	
    </div>
    <script src="app.js"></script>
    </body>
    </html>