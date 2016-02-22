<table class="table table-striped table-bordered">
    <thead>
        <tr class="alert alert-warning"><th colspan="3" class="text-center">MATERI</th></tr>
        <tr>
            <th>Mata Pelajaran</th>
            <th>Materi</th>
            <th>Catatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($laporanPekananSiswa->detail as $m)
        <tr>
            <td>{{$m->mataPelajaran->nama}}</td>
            <td>{{$m->materi->judul}}</td>
            <td>{{$m->catatan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
