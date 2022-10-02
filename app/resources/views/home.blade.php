@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			@foreach($words as $word)
			<div class="card mt-3" style="width: 100%">
				<div class="card-body">
					<h5 class="card-title">{{ $word->user->name }}</h5>
					<p class="card-text">{{ $word->content }}</p>
					<div class="text-end">
						<span>投稿日：{{ !is_null($word->created_at) ? $word->created_at->format('Y-m-d') : '--' }}</span>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
