<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::FINANCE::VERIFIKASI</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
 
	<h3>Verifikasi Donasi</h3>
 	<br/>
	<br/>
	<a href="/fin"> << Back</a>
	
	<br/>
	<br/>
 
	@foreach($veri as $p)
	<form action="/fin/verified" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="trxid" value="{{ $p->trxid }}"> <br/>
		Status Donasi &nbsp;&nbsp;<input type="text" name="fundstat" value="{{ $p->fundstat }}" required="required"> notVerified|Verified<br/><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>