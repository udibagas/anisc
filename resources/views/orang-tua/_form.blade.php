<!-- <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Form Kelas</h3>
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

        <div class="form-group @if ($errors->has('hubungan_keluarga')) has-error @endif">
            {!! Form::label('hubungan_keluarga', 'Hubungan Keluarga:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('hubungan_keluarga', $model->hubungan_keluarga, ['class' => 'form-control', 'placeholder' => 'Hubungan Keluarga']) !!}
                @if ($errors->has('hubungan_keluarga')) <p class="help-block">{{ $errors->first('hubungan_keluarga') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('jenis_kelamin')) has-error @endif">
            {!! Form::label('wali', 'Wali:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::radio('wali', 1, $model->wali == 1) !!} Ya <br />
                {!! Form::radio('wali', 0, $model->wali == 0) !!} Tidak
                @if ($errors->has('wali')) <p class="help-block">{{ $errors->first('wali') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('alamat')) has-error @endif">
            {!! Form::label('alamat', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('alamat', $model->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
                @if ($errors->has('alamat')) <p class="help-block">{{ $errors->first('alamat') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('telepon')) has-error @endif">
            {!! Form::label('telepon', 'Telepon:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('telepon', $model->telepon, ['class' => 'form-control', 'placeholder' => 'Telepon']) !!}
                @if ($errors->has('telepon')) <p class="help-block">{{ $errors->first('telepon') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('email')) has-error @endif">
            {!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('email', $model->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('pendidikan_terakhir')) has-error @endif">
            {!! Form::label('pendidikan_terakhir', 'Pendidikan Terkahir:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('pendidikan_terakhir', $model->pendidikan_terakhir, ['class' => 'form-control', 'placeholder' => 'Pendidikan Terkahir']) !!}
                @if ($errors->has('pendidikan_terakhir')) <p class="help-block">{{ $errors->first('pendidikan_terakhir') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('pekerjaan')) has-error @endif">
            {!! Form::label('pekerjaan', 'Pekerjaan:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('pekerjaan', $model->pekerjaan, ['class' => 'form-control', 'placeholder' => 'Pekerjaan']) !!}
                @if ($errors->has('pekerjaan')) <p class="help-block">{{ $errors->first('pekerjaan') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('penghasilan_per_bulan')) has-error @endif">
            {!! Form::label('penghasilan_per_bulan', 'Penghasilan Per Bulan:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('penghasilan_per_bulan', $model->penghasilan_per_bulan, ['class' => 'form-control', 'placeholder' => 'Penghasilan Per Bulan']) !!}
                @if ($errors->has('penghasilan_per_bulan')) <p class="help-block">{{ $errors->first('penghasilan_per_bulan') }}</p> @endif
            </div>
        </div>

    </div>
    <div class="box-footer text-center">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
