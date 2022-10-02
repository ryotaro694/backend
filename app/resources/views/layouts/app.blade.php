<!doctype html>
<html lang="ja">
<head>
	<title>バックエンド課題</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="{{ mix('js/app.js') }}" defer></script>
  @stack('style')
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">ログイン</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">アカウント登録</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home') }}">投稿一覧</a>
					</li>
					@auth('web')
					<li class="nav-item">
						<a class="nav-link" href="{{ route('word.create') }}">文字列投稿</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('logout') }}"
						  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</li>
					@endauth
				</ul>
			</div>
		</div>
		</nav>
    <main class="py-4 min-vh-100">
    @yield('content')
    </main>
@stack('script')
</body>
</html>