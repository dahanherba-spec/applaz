<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::CRM/FUNDRAISER::EDIT</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
 
	<h3>Edit Donasi</h3>
 	<br/>
	<br/>
	<div class="form-row">
	    <div class="form-group col-md-6">
			<a class="btn btn-warning btn-sm" href="/fund" role="button">&nbsp;<< Back&nbsp;</a>
		</div>
	</div>
	<br/>
	<br/>
 
	@foreach($fund as $p)
	<form action="/fund/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="trxid" value="{{ $p->trxid }}"><br/>
		<div class="form-row">
		    <div class="form-group col-md-6">
				<label for="dondate">Tanggal Donasi:</label>
				<input type="date" id="dondate" class="form-control" name="dondate">
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
				<input type="text" class="form-control" name="donname" required="required" value="{{ $p->donname }}">
			</div>
			<div class="form-group col-md-6">
				<label for="donamount">Jumlah Donasi:</label>	
				<input type="text" class="form-control" name="donamount" required="required" value="{{ $p->donamount }}">
			</div>
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
			<div class="form-group col-md-6">
				<label for="donphone">No HP:</label>	
				<input name="donphone" class="form-control" required="required" value="{{ $p->donphone }}"></input>	
			</div>			
			<div class="form-group col-md-6">
				<label for="donemail">Email:</label>	
				<input type="text" class="form-control" name="donemail" required="required" value="{{ $p->donemail }}">
			</div>	
			<div class="form-group col-md-6">
				<label for="donarea">Domisili:</label>	
				<input type="text" class="form-control" name="donarea" required="required" value="{{ $p->donarea }}">
			</div>	
			<div class="form-group col-md-6">
				<label for="fundid">ID Fundraiser:</label>	
				<input type="text" class="form-control" name="fundid" required="required" value="{{ $p->fundid }}">
			</div>	
			<div class="form-group col-md-6">
				<label for="fundname">Nama Fundraiser:</label>	
				<input type="text" class="form-control" name="fundname" required="required" value="{{ $p->fundname }}">
			</div>
        <input type="hidden" name="fundstat" value="{{ $p->fundstat }}">
		<input type="submit" value="Simpan Data" role="button" class="btn btn-warning btn-sm">
	</form>
	@endforeach
		
</body>
</html>