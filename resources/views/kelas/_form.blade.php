<!-- <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Form Kelas</h3>
    </div> -->
    {!! Form::model($model, ['url' => $url, 'method' => $method, 'class' => 'form-horizontal']) !!}
    <div class="box-body">

        <div class="form-group @if ($errors->has('tahun_ajaran_id')) has-error @endif">
            {!! Form::label('tahun_ajaran_id', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select('tahun_ajaran_id',
                        \App\TahunAjaran::pluck('periode', 'id'),
                        $model->tahun_ajaran_id,
                        ['class' => 'form-control', 'placeholder' => '- Pilih Tahun Ajaran -']
                    )
                !!}
                @if ($errors->has('tahun_ajaran_id')) <p class="help-block">{{ $errors->first('tahun_ajaran_id') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('jenjang')) has-error @endif">
            {!! Form::label('jenjang', 'Janjang:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select('jenjang',
                        \App\TahunAjaran::jenjang(),
                        $model->jenjang,
                        ['class' => 'form-control', 'placeholder' => '- Pilih Jenjang -']
                    )
                !!}
                @if ($errors->has('jenjang')) <p class="help-block">{{ $errors->first('jenjang') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('tingkat')) has-error @endif">
            {!! Form::label('tingkat', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select('tingkat',
                        \App\TahunAjaran::tingkat(),
                        $model->tingkat,
                        ['class' => 'form-control', 'placeholder' => '- Pilih Tingkat -']
                    )
                !!}
                @if ($errors->has('tingkat')) <p class="help-block">{{ $errors->first('tingkat') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('nama')) has-error @endif">
            {!! Form::label('nama', 'Nama Kelas:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('nama', $model->nama, ['class' => 'form-control', 'placeholder' => 'Nama Kelas']) !!}
                @if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('ruang_id')) has-error @endif">
            {!! Form::label('ruang_id', 'Ruang:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select('ruang_id',
                        \App\Ruang::pluck('nama', 'id'),
                        $model->ruang_id,
                        ['class' => 'form-control', 'placeholder' => '- Pilih Ruang -']
                    )
                !!}
                @if ($errors->has('ruang_id')) <p class="help-block">{{ $errors->first('ruang_id') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('wali_id')) has-error @endif">
            {!! Form::label('wali_id', 'Wali:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select('wali_id',
                        \App\Karyawan::guru()->pluck('nama', 'id'),
                        $model->wali_id,
                        ['class' => 'form-control', 'placeholder' => '- Pilih Wali -']
                    )
                !!}
                @if ($errors->has('wali_id')) <p class="help-block">{{ $errors->first('wali_id') }}</p> @endif
            </div>
        </div>

    </div>
    <div class="box-footer text-center">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
