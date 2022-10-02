@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<form method="POST" action="{{ route('word.store') }}">
			@csrf
			<div class="col-12 mt-4">
				<label for="content" class="form-label fw-bold">文字列&nbsp;<span class="text-danger f-small px-2 me-2">*</span></label>
				<input id="content" type="content" placeholder="255文字以下で入力してください" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}" name="content">
				@error('content')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<div class="col-12 mt-4">
				<button type="submit" class="btn btn-primary">登録する</button>
			</div>
		</form>
  </div>
</div>
@endsection
