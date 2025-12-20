<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::FUNDRAISER::TAMBAH</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body> 
	<h3>Tambah Donasi Baru</h3>
 	<br/><br/>
	<div class="form-row">
	    <div class="form-group col-md-6">
			<a class="btn btn-warning btn-sm" href="/" role="button">&nbsp;<< Back&nbsp;</a>
		</div><br/>
	</div>
	<br/><br/>

	<form action="/fund/store" method="post">
		{{ csrf_field() }}
		<div class="form-row">
		    <div class="form-group col-md-6">
				<label for="dondate">Tanggal Donasi:</label><br/>
				<input type="date" id="dondate" name="dondate">
				<script>
					const dateInput = document.getElementById('dondate');
					const today = new Date();
					const formattedDate = today.getFullYear() + '-' +
					String(today.getMonth() + 1).padStart(2, '0') + '-' +
					String(today.getDate()).padStart(2, '0');
					dondate.value = formattedDate;
				</script>
  			</div>
		    <div class="form-group col-md-6">
	    		<label for="donname">Nama Donatur:</label>	
				<input type="text" class="form-control" id="donname" name="donname"  required="required" placeholder="Nama Donatur">
  			</div>
		    <div class="form-group col-md-6">
				<label for="donamount">Jumlah Donasi:</label>	
				<input type="text" class="form-control" id="donamount" name="donamount" required="required" placeholder="00000000">
  			</div>
		</div>
		<div class="form-row">
		    <div class="form-group col-md-6">
				<label for="dontype">Tipe Donasi:</label>
				<select id="dontype" name="dontype" class="form-control">
  					<option value="">Pilih</option>
  					<option value="Zakat">Zakat</option>
  					<option value="Infaq">Infaq</option>
  					<option value="Sodaqoh">Sodaqoh</option>
				</select>
  			</div>
		    <div class="form-group col-md-6">
				<label for="dontrx">Jenis Transaksi:</label>
				<select id="dontrx" name="dontrx" class="form-control">
  					<option value="">Pilih</option>
  					<option value="Cash">Tunai</option>
  					<option value="TF">Transfer</option>
				</select>
			</div>
		</div>
		<div class="form-row">
		    <div class="form-group col-md-6">
				<label for="donphone">No HP:</label>
				<input name="donphone" required="required" class="form-control" placeholder="08xxxxxxxx"></input>
			</div>
		    <div class="form-group col-md-6">
				<label for="donemail">Email:</label>
				<input type="text" name="donemail" required="required" class="form-control" placeholder="zzz@zzz.zzz">
			</div>
		    <div class="form-group col-md-6">
				<label for="donarea">Domisili:</label>
				<input type="text" name="donarea" required="required" class="form-control" placeholder="Kota/Kabupaten">
			</div>
		    <div class="form-group col-md-6">
				<label for="fundid">ID Fundraiser:</label>
				<input type="text" name="fundid" required="required" class="form-control" placeholder="zzzYYMM0000">
			</div>
		    <div class="form-group col-md-6">
				<label for="fundname">Nama Fundraiser:</label>
				<input type="text" name="fundname" required="required" class="form-control" placeholder="Nama Fundraiser">
			</div>
		    <div class="form-group col-md-6">
				<br/>
				<input type="hidden" name=fundstat value="inValid">
				<input type="submit" value="Simpan Data" role="button" class="btn btn-warning btn-sm">
			</div>		
		</div>
	</form>
 
</body>
</html>