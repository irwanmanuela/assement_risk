<html>
<head>
    <title>Sistem Management Project Sederhana</title>
</head>
<body>
<h2>Tambah Project</h2>
{{ Form::open(['method' => 'POST','route' => ['project.store']]) }}
<p>Nama : <input type="text" name="name"></p>
<p>Tipe : <input type="text" name="type_project"></p>
<p>Tanggal : <input type="date" name="start_date"></p>
<p>Notes : <textarea name="notes"></textarea></p>
{{ Form::submit('Tambah')}}
{{ Form::close() }}
</body>
</html>