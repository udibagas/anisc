<!-- <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Form Ruang</h3>
    </div> -->
    {!! Form::model($model, ['url' => $url, 'method' => $method, 'class' => 'form-horizontal']) !!}
    <div class="box-body">
        <div class="form-group @if ($errors->has('kode')) has-error @endif">
            {!! Form::label('kode', 'Kode:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('kode', $model->kode, ['class' => 'form-control', 'placeholder' => 'Kode']) !!}
                @if ($errors->has('kode')) <p class="help-block">{{ $errors->first('kode') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('nama')) has-error @endif">
            {!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('nama', $model->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
                @if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('fungsi')) has-error @endif">
            {!! Form::label('fungsi', 'Fungsi:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('fungsi', $model->fungsi, ['class' => 'form-control', 'placeholder' => 'Fungsi']) !!}
                @if ($errors->has('fungsi')) <p class="help-block">{{ $errors->first('fungsi') }}</p> @endif
            </div>
        </div>

    </div>
    <div class="box-footer text-center">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
