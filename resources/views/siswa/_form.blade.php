<!-- <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Form Kelas</h3>
    </div> -->
    {!! Form::model($model, ['url' => $url, 'method' => $method, 'class' => 'form-horizontal']) !!}
    <div class="box-body">

        <div class="form-group @if ($errors->has('nis')) has-error @endif">
            {!! Form::label('nis', 'NIS:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('nis', $model->nis, ['class' => 'form-control', 'placeholder' => 'NIS']) !!}
                @if ($errors->has('nis')) <p class="help-block">{{ $errors->first('nis') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('nama')) has-error @endif">
            {!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('nama', $model->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
                @if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('jenis_kelamin')) has-error @endif">
            {!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::radio('jenis_kelamin', 1, $model->jenis_kelamin == 1) !!} Laki - laki <br />
                {!! Form::radio('jenis_kelamin', 0, $model->jenis_kelamin == 0) !!} Perempuan
                @if ($errors->has('jenis_kelamin')) <p class="help-block">{{ $errors->first('jenis_kelamin') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('tempat_lahir')) has-error @endif">
            {!! Form::label('tempat_lahir', 'Tempat Lahir:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('tempat_lahir', $model->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
                @if ($errors->has('tempat_lahir')) <p class="help-block">{{ $errors->first('tempat_lahir') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('tanggal_lahir')) has-error @endif">
            {!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('tanggal_lahir', $model->tanggal_lahir, ['class' => 'form-control', 'placeholder' => 'Tanggal Lahir']) !!}
                @if ($errors->has('tanggal_lahir')) <p class="help-block">{{ $errors->first('tanggal_lahir') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('ayah_id')) has-error @endif">
            {!! Form::label('ayah_id', 'Ayah:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select('ayah_id',
                        \App\OrangTua::where('jenis_kelamin', 1)->orderBy('nama')->pluck('nama', 'id'),
                        $model->ayah_id,
                        ['class' => 'form-control', 'placeholder' => '- Pilih Ayah -']
                    )
                !!}
                @if ($errors->has('ayah_id')) <p class="help-block">{{ $errors->first('ayah_id') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('ibu_id')) has-error @endif">
            {!! Form::label('ibu_id', 'Ibu:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select('ibu_id',
                        \App\OrangTua::where('jenis_kelamin', 0)->orderBy('nama')->pluck('nama', 'id'),
                        $model->ibu_id,
                        ['class' => 'form-control', 'placeholder' => '- Pilih Ibu -']
                    )
                !!}
                @if ($errors->has('ibu_id')) <p class="help-block">{{ $errors->first('ibu_id') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('wali_id')) has-error @endif">
            {!! Form::label('wali_id', 'Wali:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select('wali_id',
                        \App\OrangTua::orderBy('nama')->pluck('nama', 'id'),
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
