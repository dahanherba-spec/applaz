<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::FUNDRAISER::EDIT</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
 
	<h3>Edit Donasi</h3>
 	<br/>
	<br/>
	<a href="/fund"> << Back</a>
	
	<br/>
	<br/>
 
	@foreach($fund as $p)
	<form action="/fund/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="trxid" value="{{ $p->trxid }}"> <br/>
		Tanggl Donasi &nbsp;<input type="text" name="dondate" required="required" value="{{ $p->dondate }}"> Format: 2025/12/10<br/>
		Nama Donatur <input type="text" name="donname" required="required" value="{{ $p->donname }}"> zzzzzzzzz<br/>
		Jumlah Donasi <input type="text" name="donamount" required="required" value="{{ $p->donamount }}"> 000000000<br/>
		Tipe Donasi &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dontype" required="required" value="{{ $p->dontype }}"> Zakat/Infaq/Shodaqoh<br/>
		Jenix TRX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dontrx" required="required" value="{{ $p->dontrx }}"> Cash/TF<br/>
		No HP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="donphone" required="required" value="{{ $p->donphone }}"></input> 08zzzzzzzzz<br/>		
		Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="donemail" required="required" value="{{ $p->donemail }}"> zzz@zzzzz.zzz<br/>
		Domisili &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="donarea" required="required" value="{{ $p->donarea }}"> zzzzzzzzz<br/>
		ID Fundraiser &nbsp;&nbsp;<input type="text" name="fundid" required="required" value="{{ $p->fundid }}"> zzzzzzzz<br/>
		Nama Fundraiser &nbsp;&nbsp;<input type="text" name="fundname" required="required" value="{{ $p->fundname }}"> zzzzzzzz<br/><br/>
        <input type="hidden" name="fundstat" value="{{ $p->fundstat }}">
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>