@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_perusahaan" class="col-md-4 col-form-label text-md-right">{{ __('Nama Perusahaan') }}</label>

                            <div class="col-md-6">
                                <input id="nama_perusahaan" type="text" class="form-control{{ $errors->has('nama_perusahaan') ? ' is-invalid' : '' }}" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" required autofocus>

                                @if ($errors->has('nama_perusahaan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama_perusahaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kode_perusahaan" class="col-md-4 col-form-label text-md-right">{{ __('Kode Perusahaan') }}</label>

                            <div class="col-md-6">
                                <input id="kode_perusahaan" type="text" class="form-control{{ $errors->has('kode_perusahaan') ? ' is-invalid' : '' }}" name="kode_perusahaan" value="{{ old('kode_perusahaan') }}" required>

                                @if ($errors->has('kode_perusahaan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kode_perusahaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
