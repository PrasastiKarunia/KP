@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Formulir Kontrak Perusahaan') }}</div>

				<div class="card-body">
					<label class="row justify-content-center" style="text-align: center;">Berikut adalah jadwal safety induction yang harus diikuti </label> 
					<label class="row justify-content-center" style="font-size: 24px"> Hari : </label>
					<div class="form-group">
						<div class="col-md-6">
							<form action="{{ URL::to('/fp') }}">
								@csrf								
								<button type="submit" class="btn btn-primary">
									{{ __('Tambah Personel') }}
								</button>

							</form><br>
							<form action="{{ URL::to('/') }}">
								<button type="submit" class="btn btn-primary" >
									{{ __('Selesai') }}
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
