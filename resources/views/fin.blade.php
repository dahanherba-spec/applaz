
<!DOCTYPE html>
<html>
<head>
	<title>LAZAPP::KEUANGAN</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style>
		.input-container {
  			display: flex; /* Aligns items horizontally */
  			gap: 10px;      /* Adds space between them */
		}

		input {
  			flex-grow: 0; /* Makes input take up remaining space */
  			padding: 8px;
		}

		button {
  			padding: 8px 16px;
  			cursor: pointer;
		}
	</style>
</head>
<body>
 
	<h3>Keuangan</h3>
	<br/><br/>
        <!-- Import Excel -->
        <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
		    <div class="input-container">
            @csrf
            <input type="file" name="file" required class="btn btn-warning btn-sm">
            <button type="submit" class="btn btn-success btn-sm">Upload Donasi dari Mutasi Bank</button>
			</div>	
        </form>

        <!-- Export Users
        <a href="{{ route('users.export') }}">
        	<button class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition">
            	Export Data Donasi
        	</button>
        </a>		
		-->	
    <br/>

	<table border="1">
		<tr>
            <th>&nbsp;Tgl Donasi&nbsp;</th>
			<th>&nbsp;Nama Donatur&nbsp;</th>
			<th>&nbsp;Jumlah Donasi&nbsp;</th>
			<th>&nbsp;Tipe Donasi&nbsp;</th>
			<th>&nbsp;Jenis TRX&nbsp;</th>
			<th>&nbsp;ID Fundraiser&nbsp;</th>
			<th>&nbsp;Nama Fundraiser&nbsp;</th>			
			<th>&nbsp;Status Donasi&nbsp;</th>
			<th></th>            
		</tr> 
	
		@foreach($fin as $p)
		<tr>
			<td>&nbsp;{{ $p->dondate }}&nbsp;</td>
			<td>&nbsp;{{ $p->donname }}&nbsp;</td>
			<td>&nbsp;{{ $p->donamount }}&nbsp;</td>
			<td>&nbsp;{{ $p->dontype }}&nbsp;</td>
			<td>&nbsp;{{ $p->dontrx }}&nbsp;</td>
			<td>&nbsp;{{ $p->fundid }}&nbsp;</td>
			<td>&nbsp;{{ $p->fundname }}&nbsp;</td>
			<td>&nbsp;{{ $p->fundstat }}&nbsp;</td>
			<td>
			<a class="btn btn-warning btn-sm" href="/fin/verifikasi/{{ $p->trxid }}" role="button">&nbsp;Validasi&nbsp;</a>
			</td>			
		</tr>
		@endforeach
	</table> 
	<br/>
	<a class="btn btn-warning btn-sm" href="/" role="button">&nbsp;<< Back&nbsp;</a>
</body>
</html>