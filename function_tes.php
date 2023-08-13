<!DOCTYPE html>
<html>
<head>
	<title>Preview Gambar</title>
	<style>
		/* Style untuk tombol */
		#myBtn {
			display: block;
			margin: 20px auto;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		/* Style untuk popup modal */
		#myModal {
			display: none;
			position: fixed;
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgba(0,0,0,0.9);
		}

		/* Style untuk gambar di dalam modal */
		.modal-content {
			margin: auto;
			display: block;
			width: 80%;
			max-width: 700px;
		}

		/* Style untuk tombol close */
		.close {
			position: absolute;
			top: 15px;
			right: 35px;
			color: #f1f1f1;
			font-size: 40px;
			font-weight: bold;
			cursor: pointer;
		}

		.close:hover,
		.close:focus {
			color: #bbb;
			text-decoration: none;
			cursor: pointer;
		}
	</style>
</head>
<body>

	<!-- Tombol untuk menampilkan popup modal -->
	<button id="myBtn">Tampilkan Gambar</button>

	<!-- Popup modal -->
	<div id="myModal" class="modal">
		<span class="close">&times;</span>
		<img class="modal-content" id="img01">
	</div>

	<!-- JavaScript untuk menampilkan dan menyembunyikan popup modal -->
	<script>
		// Ambil elemen-elemen yang dibutuhkan
		var modal = document.getElementById("myModal");
		var btn = document.getElementById("myBtn");
		var span = document.getElementsByClassName("close")[0];
		var img = document.getElementById("img01");

		// Ketika tombol ditekan, tampilkan modal
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// Ketika tombol close ditekan, sembunyikan modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// Ketika pengguna mengklik area di luar modal, sembunyikan modal
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		// Tampilkan gambar pada modal
		<?php
			// Koneksi ke database MySQL
			$servername = "localhost";
			$username = "root";
			$password = "alhazen93";
			$dbname = "ujian_ramadhan";
			$conn = new mysqli($servername, $username, $password, $dbname);

            

			// Query untuk mengambil alamat gambar dari database
			$sql = "SELECT * FROM daftar_gambar WHERE id = $id";
			$result = $conn->query($sql);

			// Tampilkan alamat gambar pada modal
			if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "img.src = '" . $row["path"] . "';";
            }
            $conn->close();
        ?>
        </script>
                
    </body>
</html>
