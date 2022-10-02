@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card mt-3 p-3">
				<div class="card-body">
					<h4 class="card-title fw-bold mb-4">会員登録</h4>
					<div class="row mb-3">
						<form method="POST" action="{{ route('register') }}">
							@csrf
							<div class="col-md-6 col-12 mt-4">
								<label for="bame" class="form-label fw-bold">姓&nbsp;<span class="text-danger f-small px-2 me-2">*</span></label>
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
		
							<div class="col-md-6 col-12 mt-4">
								<label for="email" class="form-label fw-bold">メールアドレス&nbsp;<span class="text-danger f-small px-2 me-2">*</span></label>
								<input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="name" autofocus>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="col-md-6 col-12 mt-4">
								<label for="password" class="form-label fw-bold">パスワード&nbsp;<span class="text-danger f-small px-2 me-2">*</span></label>
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" autocomplete="new-password">
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="col-md-6 col-12 mt-4">
								<label for="password_confirmation" class="form-label fw-bold">パスワード（確認）&nbsp;<span class="text-danger f-small px-2 me-2">*</span></label>
								<input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" name="password_confirmation" autocomplete="new-password">
								@error('password_confirmation')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="mt-3">
								<button class="btn btn-primary">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
