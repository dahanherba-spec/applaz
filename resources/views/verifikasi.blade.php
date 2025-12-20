<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::KEUANGAN::VALIDASI</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
 
	<h3>Validasi Donasi</h3>
 	<br/><br/>
	<div class="form-row">
	    <div class="form-group col-md-6">
			<a class="btn btn-warning btn-sm" href="/fin" role="button">&nbsp;<< Back&nbsp;</a>
		</div><br/>
	</div>
	<br/><br/>
 
	@foreach($veri as $p)
	<form action="/fin/verified" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="trxid" value="{{ $p->trxid }}"> <br/>
		<div class="form-row">
		    <div class="form-group col-md-6">
				<label for="fundstat">Status Donasi:</label>
				<select id="fundstat" name="fundstat" value="{{ $p->fundstat }}" class="form-control">
  					<option value="">Pilih</option>
  					<option value="inValid">inValid</option>
  					<option value="Valid">Valid</option>
				</select>
				<br/><br/><br/><br/>
				<input type="submit" value="Simpan Data" role="button" class="btn btn-warning btn-sm">
  			</div>
		</div>
	</form>
	@endforeach
		
</body>
</html>