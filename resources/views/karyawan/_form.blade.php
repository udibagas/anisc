<!-- <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Form Ruang</h3>
    </div> -->
    {!! Form::model($model, ['url' => $url, 'method' => $method, 'class' => 'form-horizontal']) !!}
    <div class="box-body">
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

        <div class="form-group @if ($errors->has('guru')) has-error @endif">
            {!! Form::label('guru', 'Guru:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::radio('guru', 1, $model->guru == 1) !!} Ya <br />
                {!! Form::radio('guru', 0, $model->guru == 0) !!} Tidak
                @if ($errors->has('guru')) <p class="help-block">{{ $errors->first('guru') }}</p> @endif
            </div>
        </div>

    </div>
    <div class="box-footer text-center">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
