
<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::CRM/FUNDRAISER</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
 
	<h3>CRM/Fundraiser</h3>
 	<br/><br/>
	<a class="btn btn-success btn-sm" href="/fund/tambah" role="button">&nbsp; + Tambah Donasi Baru&nbsp;</a>
	<br/><br/>
 
	<table border="1">
		<tr>
            <th>&nbsp;Tgl Donasi&nbsp;</th>
			<th>&nbsp;Nama Donatur&nbsp;</th>
			<th>&nbsp;Jumlah Donasi&nbsp;</th>
			<th>&nbsp;Tipe Donasi&nbsp;</th>
			<th>&nbsp;Jenis TRX&nbsp;</th>
			<th>&nbsp;No HP&nbsp;</th>
			<th>&nbsp;Email&nbsp;</th>            
            <th>&nbsp;Area&nbsp;</th>
            <th>&nbsp;ID Fundraiser&nbsp;</th>			
			<th>&nbsp;Nama Fundraiser&nbsp;</th>	
			<th>&nbsp;Status Donasi&nbsp;</th>	

		</tr>
		@foreach($fund as $p)
		<tr>
			<td>&nbsp;{{ $p->dondate }}&nbsp;</td>            
			<td>&nbsp;{{ $p->donname }}&nbsp;</td>
			<td>&nbsp;{{ $p->donamount }}&nbsp;</td>
			<td>&nbsp;{{ $p->dontype }}&nbsp;</td>
			<td>&nbsp;{{ $p->dontrx }}&nbsp;</td>
			<td>&nbsp;{{ $p->donphone }}&nbsp;</td>
            <td>&nbsp;{{ $p->donemail }}&nbsp;</td>
            <td>&nbsp;{{ $p->donarea }}&nbsp;</td>
            <td>&nbsp;{{ $p->fundid }}&nbsp;</td>			
            <td>&nbsp;{{ $p->fundname }}&nbsp;</td>			
            <td>&nbsp;{{ $p->fundstat }}&nbsp;</td>						
			<td>
				<a class="btn btn-warning btn-sm" href="/fund/edit/{{ $p->trxid }}" role="button">Edit</a>
				<a class="btn btn-danger btn-sm" href="/fund/hapus/{{ $p->trxid }}" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table> 
    <br/>
	<a class="btn btn-warning btn-sm" href="/" role="button">&nbsp;<< Back&nbsp;</a>
</body>
</html>