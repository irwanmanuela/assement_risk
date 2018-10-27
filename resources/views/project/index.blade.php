<html>
<head>
    <title>Sistem Management Siswa Sederhana</title>
</head>
<body>
<h2>List Siswa - <a href="{{ url('siswa/create') }}">Tambah Data</a></h2>
<table border="1" cellpadding="5" cellspacing="0" width="50%">
    <thead>
    <tr>
        <td>Nama</td>
        <td>Type</td>
        <td>Tanggal</td>
        <td>Notes</td>
        <td>Aksi</td>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $project)
        <tr>
            <td>{{ $project->name }}</td>
            <td>{{ $project->type_project }}</td>
            <td>{{ $project->start_date }}</td>
            <td>{{ $project->notes }}</td>
            <td>
                <a href="{{ url('project/'.$project->id.'/edit') }}"><button>Edit</button></a>
                {{ Form::open(['method' => 'DELETE','route' => ['project.destroy', $project->id]]) }}
                {{ Form::submit('Delete')}}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>