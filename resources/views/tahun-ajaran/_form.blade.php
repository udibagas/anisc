<!-- <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Form Tahun Ajaran</h3>
    </div> -->
    {!! Form::model($model, ['url' => $url, 'method' => $method, 'class' => 'form-horizontal']) !!}
    <div class="box-body">
        <div class="form-group @if ($errors->has('periode')) has-error @endif">
            {!! Form::label('periode', 'Periode:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('periode', $model->periode, ['class' => 'form-control', 'placeholder' => 'Periode']) !!}
                @if ($errors->has('periode')) <p class="help-block">{{ $errors->first('periode') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('mulai')) has-error @endif">
            {!! Form::label('mulai', 'Mulai:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('mulai', $model->mulai, ['class' => 'form-control', 'placeholder' => 'Mulai']) !!}
                @if ($errors->has('mulai')) <p class="help-block">{{ $errors->first('mulai') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('selesai')) has-error @endif">
            {!! Form::label('selesai', 'Selesai:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('selesai', $model->selesai, ['class' => 'form-control', 'placeholder' => 'Selesai']) !!}
                @if ($errors->has('selesai')) <p class="help-block">{{ $errors->first('selesai') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('aktif')) has-error @endif">
            {!! Form::label('aktif', 'Aktif:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::radio('aktif', 1, $model->aktif == 1) !!} Ya
                {!! Form::radio('aktif', 0, $model->aktif == 0) !!} Tidak
                @if ($errors->has('aktif')) <p class="help-block">{{ $errors->first('aktif') }}</p> @endif
            </div>
        </div>

    </div>
    <div class="box-footer text-center">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
