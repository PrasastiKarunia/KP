<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SI Petrokimia') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.1.0.min') }}" defer></script>
    <script src="{{ asset('js/jquery.price_format.2.0') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../../assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="../../assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" style="color: #fff">
                {{ config('app.name', 'SI Petrokimia') }}
            </a>
            </div>
        </nav>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Formulir Personal') }}</div>
                        <div class="card-body">
                            <form id="example-form" action="{{ URL::to('/fp.store') }}" class="m-t-40" method="POST">
                                {{ csrf_field() }}

                                <div>
                                    <h3>Data Personal</h3>
                                    <section>
                                        <div class="form-group row">
                                            <label for="nama_perusahaan" class="col-md-4 col-form-label text-md-right">{{ __('Nama Perusahaan*') }}</label>

                                            <div class="col-md-6">
                                                <input id="nama_perusahaan" type="text" name="nama_perusahaan" class="form-control" value="{{ Auth::user()->nama_perusahaan }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama_sub" class="col-md-4 col-form-label text-md-right">{{ __('Nama Subkontraktor') }}</label>
                                            <div class="col-md-6">
                                                <input id="nama_sub" type="text" name="nama_sub" class="form-control">
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label for="nama_personal" class="col-md-4 col-form-label text-md-right">{{ __('Nama Personal*') }}</label>

                                            <div class="col-md-6">
                                                <input id="nama_personal" type="text" name="nama_personal" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto_diri" class="col-md-4 col-form-label text-md-right">{{ __('Foto Diri*') }}</label>

                                            <div class="col-md-4 col-form-label">
                                                <input id="foto_diri" type="file" name="foto_diri" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="no_ktp" class="col-md-4 col-form-label text-md-right">{{ __('No. KTP*') }}</label>

                                            <div class="col-md-6">
                                                <input id="no_ktp" type="text" name="no_ktp" class="form-control" maxlength="16" onkeyup="validAngka(this)" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto_ktp" class="col-md-4 col-form-label text-md-right">{{ __('Foto KTP*') }}</label>

                                            <div class="col-md-4 col-form-label">
                                                <input id="foto_ktp" type="file" name="foto_ktp" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat*') }}</label>

                                            <div class="col-md-6">
                                                <input id="alamat" type="text" name="alamat" class="form-control" required>
                                            </div>
                                        </div>
                                        <!-- <div id="hasil"></div> -->
                                        <div class="form-group row">
                                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir*') }}</label>
                                            <div class="col-md-4 col-form-label">
                                                <input id="tanggal_lahir" type="date" name="tanggal_lahir" value="yyyy-mm-dd" min="1950-01-01" max="2050-12-31"class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="usia" class="col-md-4 col-form-label text-md-right">{{ __('Usia*') }}</label>

                                            <div class="col-md-6">
                                                <input id="usia" type="text" name="usia" class="form-control" maxlength="2" onkeyup="validAngka(this)" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="surat_kesehatan" class="col-md-4 col-form-label text-md-right">{{ __('Surat Kesehatan*') }}</label>

                                            <div class="col-md-4 col-form-label">
                                                <input id="surat_kesehatan" type="file" name="surat_kesehatan" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto_akk" class="col-md-4 col-form-label text-md-right">{{ __('Asuransi Keselamatan Kerja*') }}</label>

                                            <div class="col-md-4 col-form-label">
                                                <input id="foto_akk" type="file" name="foto_akk">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="helm_kuning" class="col-md-4 col-form-label text-md-right">{{ __('Helm Kuning') }}</label>

                                            <div class="col-form-label">
                                                <input id="helm_kuning" type="checkbox" name="helm_kuning" value="Helm Kuning" required>*perlengkapan harus disiapkan
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="seragam_pkg" class="col-md-4 col-form-label text-md-right">{{ __('Seragam Kontraktor PKG') }}</label>
                                            
                                            <div class="col-form-label">
                                                <input id="seragam_pkg" type="checkbox" name="seragam_pkg" required>*perlengkapan harus disiapkan
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sepatu_safety" class="col-md-4 col-form-label text-md-right">{{ __('Sepatu Safety') }}</label>

                                            <div class="col-form-label">
                                                <input id="sepatu_safety" type="checkbox" name="sepatu_safety" required>*perlengkapan harus disiapkan
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="masker" class="col-md-4 col-form-label text-md-right">{{ __('Masker') }}</label>

                                            <div class="col-form-label">
                                                <input id="masker" type="checkbox" name="masker" required>*perlengkapan harus disiapkan
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="baju_panjang" class="col-md-4 col-form-label text-md-right">{{ __('Baju Lengan Panjang') }}</label>

                                            <div class="col-form-label">
                                                <input id="baju_panjang" type="checkbox" name="baju_panjang" required>*perlengkapan harus disiapkan
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="others" class="col-md-4 col-form-label text-md-right">{{ __('Lainnya') }}</label>

                                            <div class="col-md-6">
                                                <input id="others" type="text" name="others" class="form-control">
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Tes</h3>
                                    <section>
                                        <div class="form-group row" style="margin-bottom: 0;">
                                            <label for="s1" class="col-md-8 text-md-left col-form-label" style="margin-bottom: 0;padding-bottom= 0;">1. Apa kepanjangan dari K3?</label></div>
                                            <div class="text-md-left col-form-label">
                                                <input id="s1" type="radio" name="s1" value="a" required>a. Keselamatan Kelompok Kerja<br>
                                                <input id="s1" type="radio" name="s1" value="b" required>b. Keselamatan dan Kesehatan Kerja <br>
                                                <input id="s1" type="radio" name="s1" value="c" required>c. Keselamatan dan Keamanan Kerja <br>
                                                <input id="s1" type="radio" name="s1" value="d" required>d. Kerjasama, Kinerja, Kepatuhan
                                            </div>
                                        </section>
                                        <h3>Persetujuan</h3>
                                        <section>                                            
                                            <label for="acceptTerms">Menyatakan siap melaksanakan dan mematuhi segala ketentuan peraturan Keselamatan dan Kesehatan Kerja yang berlaku di wilayah PT Petrokimia Gresik. Apabila dikemudian hari saya melanggar segala ketentuan dan peraturan yang ada, <b>saya bersedia dikenai atau diberi sanksi yang telah ditetapkan.</b>Sanksi tersebut termasuk denda dan pemutusan hubungan kerja sesuai dengan ketentuan yang berlaku</label>
                                            <div class="col-form-label">
                                                <input id="acceptTerms" type="checkbox" name="acceptTerms" required>Saya menyetujui pernyataan diatas
                                            </div>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- All Jquery -->
            <!-- ============================================================== -->
            <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
            <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
            <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
            <!--Wave Effects -->
            <script src="../../dist/js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="../../dist/js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="../../dist/js/custom.min.js"></script>
            <!-- this page js -->
            <script src="../../assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
            <script src="../../assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
            <!-- <script>
            function filePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#example-form + img').remove();
                        $('#example-form').after('<img src="'+e.target.result+'" width="450" height="300"/>');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#file").change(function () {
                filePreview(this);
            });
            </script> -->
            <!-- <script>
            date = new Date($('#tanggal_lahir').val());
            var tahun1 = date.getFullYear();
        // var tgl = new Date();
        // var tahun = tgl.getFullYear();
        document.getElementById("hasil").innerHTML = tahun1;
    </script> -->
        <script>
        // Basic Example with form
        var form = $("#example-form");
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                form.submit();
                alert("Data Berhasil Ditambahkan");
                // Submit form input
                
            }
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
</body>
</html>