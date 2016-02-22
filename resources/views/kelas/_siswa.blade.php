<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelas->siswa as $s)
        <tr>
            <td>{{$s->nis}}</td>
            <td>{{$s->nama}}</td>
            <td>{{$s->jenis_kelamin ? 'L' : 'P'}}</td>
            <td>{{$s->tempat_lahir}}</td>
            <td>{{$s->tanggal_lahir}}</td>
            <td>
                {!! Form::open(['url' => '/kelas/hapus-siswa/'.$kelas->id]) !!}
                    {!! Form::hidden('siswa_id', $s->id) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
