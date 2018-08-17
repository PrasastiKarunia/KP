@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulir Kontrak Perusahaan') }}</div>

                <div class="card-body">
                    <form action="{{ URL::to('/fkp.store') }}"method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="kode_perusahaan" class="col-md-4 col-form-label text-md-right">{{ __('Kode Perusahaan') }}</label>

                            <div class="col-md-6">
                                <input id="kode_perusahaan" type="text" name="kode_perusahaan" class="form-control" value="{{ Auth::user()->kode_perusahaan }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_perusahaan" class="col-md-4 col-form-label text-md-right">{{ __('Nama Perusahaan*') }}</label>

                            <div class="col-md-6">
                                <input id="nama_perusahaan" type="text" name="nama_perusahaan" class="form-control" value="{{ Auth::user()->nama_perusahaan }}" readonly>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="nama_sub" class="col-md-4 col-form-label text-md-right">{{ __('Nama Subkontraktor') }}</label>

                            <div class="col-md-6">
                                <input id="nama_sub" type="text" name="nama_sub" class="form-control">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="no_kon" class="col-md-4 col-form-label text-md-right">{{ __('No.Kontrak/SPK/OK*') }}</label>

                            <div class="col-md-6">
                                <input id="no_kon" type="text" name="no_kon" class="form-control" onkeyup="validAngka(this)" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto_kon" class="col-md-4 col-form-label text-md-right">{{ __('Bukti Kontrak/SPK/OK*') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="pq" type="checkbox" name="pq" required> -->
                                <input id="foto_kon" type="file" name="foto_kon" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai" class="col-md-4 col-form-label text-md-right">{{ __('Nilai Kontrak*') }}</label>

                            <div class="col-md-6">
                                <input id="nilai" type="text" name="nilai" class="form-control" onkeyup="validAngka(this)" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pq" class="col-md-4 col-form-label text-md-right">{{ __('Sertifikat PQ K3*') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="pq" type="checkbox" name="pq" required> -->
                                <input id="pq" type="file" name="pq" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ahli" class="col-md-4 col-form-label text-md-right">{{ __('Sertifikat ahli K3*') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="ahli" type="checkbox" name="ahli" required> -->
                                <input id="ahli" type="file" name="ahli" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ukpj" class="col-md-4 col-form-label text-md-right">{{ __('Unit Kerja Peminta Jasa*') }}</label>
                            <div class="select col-md-6">  
                                <select id="ukpj" type="text"  name="ukpj" class="form-control" required>
                                    <option>Pilih Departemen</option>
                                    <option value="Departemen IT">Departemen IT</option>
                                    <option value="XXXXX">XXXXX</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lokasi" class="col-md-4 col-form-label text-md-right">{{ __('Lokasi Pekerjaan*') }}</label>
                            <div class="select col-md-6">  
                                <select id="lokasi" type="text"  name="lokasi" class="form-control"  required>
                                    <option>Pilih Lokasi Pekerjaan</option>
                                    <option value="Pabrik 1">Pabrik 1</option>
                                    <option value="Pabrik 2">Pabrik 2</option>
                                    <option value="Pabrik 3">Pabrik 3</option>
                                    <option value="Pelabuhan">Pelabuhan</option>
                                    <option value="Pergudangan">Pergudangan</option>
                                    <option value="Kantor Pusat">Kantor Pusat</option>
                                    <option value="Kantor Administrasi Lama">Kantor Administrasi Lama</option>
                                    <option value="Kawasan Diklat">Kawasan Diklat</option>
                                    <option value="Jalan Perusahaan">Jalan Perusahaan</option>
                                    <option value="Luar Kawasan Pabrik">Luar Kawasan Pabrik</option>
                                    <option value="IPA Gunungsari">IPA Gunungsari</option>
                                    <option value="IPA Babat">IPA Babat</option>
                                    <option value="Lainnya">Lain - lain</option>
                                </select>
                                <input id="detail_lokasi" type="text"  name="detail_lokasi" class="form-control" placeholder="Departemen IT divisi pengembangan aplikasi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-right" >{{ __('Kontak HP*') }}</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="text"  name="no_hp" class="form-control" maxlength="12" onkeyup="validAngka(this)" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="akk" class="col-md-4 col-form-label text-md-right">{{ __('Asuransi Keselamatan Kerja*') }}</label>

                            <div class="col-md-4 col-form-label">
                                <input id="akk" type="radio" name="akk" value="Personal" class="rad" checked>Personal<br>
                                <input id="akk" type="radio" name="akk" value="Jasa" class="rad">Jasa Kontruksi<br>
                                <input id="date_akk" type="date" name="date_akk" value="yyyy-mm-dd" min="1972-01-01" max="2050-12-31" style="display: none;">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
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
                        </div> -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- tambahkan jquery-->
                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(function(){
                            $(":radio.rad").click(function(){
                                $("#date_akk").hide()
                                if($(this).val() == "Jasa"){
                                    $("#date_akk").show();
                                }
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        function validAngka(a)
                        {
                            if(!/^[0-9.]+$/.test(a.value))
                            {
                                a.value = a.value.substring(0,a.value.length-1000);
                            }
                        }
                    </script>
                    <!-- <script type="text/javascript">
                        function validasi(){
                            var nomor_hp=document.forms["fkpform"]["no_hp"].value;
                            var no_kont=document.forms["fkpform"]["no_kont"].value;
                            var number=/^[0-9]+$/;
                            if (nomor_hp.length!=12 || nomor_hp.length!=11){
                                alert("Nomor HP Harus 11 / 12 Digit");
                                return false;
                            };
                        }
                    </script> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
