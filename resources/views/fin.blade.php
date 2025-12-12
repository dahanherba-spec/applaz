
<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::FINANCE</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
 
	<h3>Data Donasi Finance</h3>
	<br/>
	<br/>
 	<a href="/"> << Back</a>
    <br/><br/>

	<table border="1">
		<tr>
            <th>Tanggal Donasi</th>
			<th>Nama Donatur</th>
			<th>Jumlah Donasi</th>
			<th>Tipe Donasi</th>
			<th>Jenis TRX</th>
			<th>ID Fundraiser</th>
			<th>Nama Fundraiser</th>			
			<th>Status Donasi</th>
			<th>Aksi</th>            
		</tr>
	
		@foreach($fin as $p)
		<tr>
			<td>{{ $p->dondate }}</td>
			<td>{{ $p->donname }}</td>
			<td>{{ $p->donamount }}</td>
			<td>{{ $p->dontype }}</td>
			<td>{{ $p->dontrx }}</td>
			<td>{{ $p->fundid }}</td>
			<td>{{ $p->fundname }}</td>
			<td>{{ $p->fundstat }}</td>
			<td>
				<a href="/fin/verifikasi/{{ $p->trxid }}">Verifikasi</a>
			</td>			
		</tr>
		@endforeach
	</table> 
</body>
</html>