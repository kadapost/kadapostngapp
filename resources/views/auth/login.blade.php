@extends('layouts.app')

@section('content')
<!-- Titlebar -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>{{ __('Login') }}</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>{{ __('Login') }}</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content -->

<!-- Container -->
<div class="container">

	<div class="my-account">

		<div class="tabs-container">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form method="POST" action="{{ route('login') }}" class="login">
                    @csrf
					<p class="form-row form-row-wide">
						<label for="email">{{ __('E-Mail Address') }}:
							<i class="ln ln-icon-Male"></i>
							<input type="email" class="input-text @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
						</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</p>

					<p class="form-row form-row-wide">
						<label for="password">{{ __('Password') }}:
							<i class="ln ln-icon-Lock-2"></i>
							<input class="input-text @error('password') is-invalid @enderror" type="password" name="password" id="password" required autocomplete="current-password" />
						</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</p>

					<p class="form-row">
						<input type="submit" class="button border fw margin-top-10" name="login" value="Login" />

						<label for="remember" class="rememberme">
						<input name="remember" type="checkbox" id="remember" value="forever" {{ old('remember') ? 'checked' : '' }} /> {{ __('Remember Me') }}</label>
					</p>
                    @if (Route::has('password.request'))
					<p class="lost_password">
						<a href="{{ route('password.request') }}" >{{ __('Forgot Your Password?') }}</a>
					</p>
					@endif
				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

				<form method="post" class="register">
					
				<p class="form-row form-row-wide">
					<label for="username2">Username:
						<i class="ln ln-icon-Male"></i>
						<input type="text" class="input-text" name="username" id="username2" value="" />
					</label>
				</p>
					
				<p class="form-row form-row-wide">
					<label for="email2">Email Address:
						<i class="ln ln-icon-Mail"></i>
						<input type="text" class="input-text" name="email" id="email2" value="" />
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password1">Password:
						<i class="ln ln-icon-Lock-2"></i>
						<input class="input-text" type="password" name="password1" id="password1"/>
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password2">Repeat Password:
						<i class="ln ln-icon-Lock-2"></i>
						<input class="input-text" type="password" name="password2" id="password2"/>
					</label>
				</p>

				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
				</p>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection
