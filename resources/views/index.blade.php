
<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::FUNDRAISER</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
 
	<h3>Data Donasi Fundraiser</h3>
 	<br/>
	<br/>
	<a href="/"> << Back</a>	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
            <th>Tgl Donasi</th>
			<th>Nama Donatur</th>
			<th>Jumlah Donasi</th>
			<th>Tipe Donasi</th>
			<th>Jenis TRX</th>
			<th>No HP</th>
			<th>Email</th>            
            <th>Area</th>
            <th>ID Fundraiser</th>			
			<th>Nama Fundraiser</th>	
			<th>Status Donasi</th>	

		</tr>
		@foreach($fund as $p)
		<tr>
			<td>{{ $p->dondate }}</td>            
			<td>{{ $p->donname }}</td>
			<td>{{ $p->donamount }}</td>
			<td>{{ $p->dontype }}</td>
			<td>{{ $p->dontrx }}</td>
			<td>{{ $p->donphone }}</td>
            <td>{{ $p->donemail }}</td>
            <td>{{ $p->donarea }}</td>
            <td>{{ $p->fundid }}</td>			
            <td>{{ $p->fundname }}</td>			
            <td>{{ $p->fundstat }}</td>						
			<td>
				<a href="/fund/edit/{{ $p->trxid }}">Edit</a>
				<a href="/fund/hapus/{{ $p->trxid }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table> 

    <br/><br/>
	<a href="/fund/tambah"> + Tambah Donatur Baru</a>

</body>
</html>