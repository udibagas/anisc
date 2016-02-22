<table class="table table-striped table-bordered">
    <thead>
        <tr class="alert alert-warning"><th colspan="3" class="text-center">MATERI</th></tr>
        <tr>
            <th>Judul</th>
            <th>Keterangan</th>
            <th>Jumlah Jam</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bab->materi as $m)
        <tr>
            <td>{{$m->judul}}</td>
            <td>{{$m->keterangan}}</td>
            <td>{{$m->jumlah_jam}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
