<!DOCTYPE html>
<html>
<head>
    <title>Import XLS in Laravel</title>
</head>
<body>
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Select XLS/XLSX file:</label>
        <input type="file" name="file" required>
        <button type="submit">Import</button>
    </form>
</body>
</html>