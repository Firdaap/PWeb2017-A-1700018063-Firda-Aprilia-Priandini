<html>
<head>
		<title>To Do Apps</title>
		<link rel="stylesheet" type="text/css" href="style.css">
<head>
<body>
	<div class="container">
		<center>
			<div class="judul">
				<h1>SHOPPING LIST</h1>
			</div>

			<div class="daftar" id="daftar"></div>

			<div class="tambah">
				<input type="text" class="data" id="data" placeholder="Masukkan daftar baru">
				<button class="add" onclick="add()">+</button>
			</div>
		</center>
	</div>

		<script>
			// deklarasi variabel objek
			var list = document.getElementById('daftar');
			var data = document.getElementById('data');
			v
			function add() {
				list.innerHTML += `<input type="checkbox" class="item" value="${data.value}"> ${data.value} <br>`;
				data.value = '';
			}

		</script>
</body>
</html>
 