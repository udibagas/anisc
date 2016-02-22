<tr>
    <td class="@if ($errors->has('detail.'.$index.'.mata_pelajaran_id')) has-error @endif">
        {!! Form::select(
            'detail['.$index.'][mata_pelajaran_id]',
            App\MataPelajaran::pluck('nama', 'id'),
            $model->mata_pelajaran_id,
            ['class' => 'form-control', 'placeholder' => '- Pilih Mata Pelajaran -']
        ) !!}
    </td>
    <td class="@if ($errors->has('detail.'.$index.'.materi_id')) has-error @endif">
        {!! Form::select(
            'detail['.$index.'][materi_id]',
            App\Materi::pluck('judul', 'id'),
            $model->materi_id,
            ['class' => 'form-control', 'placeholder' => '- Pilih Materi -']
        ) !!}
    </td>
    <td class="@if ($errors->has('detail.'.$index.'.catatan')) has-error @endif">
        {!! Form::text(
            'detail['.$index.'][catatan]', $model->catatan,
            ['class' => 'form-control', 'placeholder' => 'Catatan']
        ) !!}
    </td>
    <td><a href="#" class="hapus-detail"><span class="fa fa-trash"></span></a></td>
</tr>
