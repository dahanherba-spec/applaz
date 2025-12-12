<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::FUNDRAISER::TAMBAH</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
 
	<h3>Tambah Donatur</h3>
 	<br/>
	<br/>
	<a href="/fund"> << Back</a>
	
	<br/>
	<br/>
 
	<form action="/fund/store" method="post">
		{{ csrf_field() }}
		Tanggl Donasi &nbsp;<input type="text" name="dondate" required="required"> Format: 2025/12/10<br/>
		Nama Donatur <input type="text" name="donname" required="required"> zzzzzzzzz<br/>
		Jumlah Donasi <input type="text" name="donamount" required="required"> 000000000<br/>
		Tipe Donasi &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dontype" required="required"> Zakat/Infaq/Shodaqoh<br/>
		Jenix TRX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dontrx" required="required"> Cash/TF<br/>
		No HP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="donphone" required="required"></input> 08zzzzzzzzz<br/>		
		Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="donemail" required="required"> zzz@zzzzz.zzz<br/>
		Domisili &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="donarea" required="required">zzzzzzzzzzz<br/>
		ID Fundraiser &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fundid" required="required">zzzYYMM0000<br/>
		Nama Fundraiser &nbsp;&nbsp;<input type="text" name="fundname" required="required"> zzzzzzzz<br/><br/>
		<input type="hidden" name=fundstat value="notVerified">
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>