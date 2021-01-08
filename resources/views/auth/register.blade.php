@extends('layouts.app')

@section('content')
<!-- Titlebar -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>{{ __('Register') }}</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>{{ __('Register') }}</li>
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
			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">
				<form method="POST" action="{{ route('register') }}" class="register">
                @csrf
				<p class="form-row form-row-wide">
					<label for="name">{{ __('Name') }}:
						<i class="ln ln-icon-Male"></i>
						<input type="text" class="input-text @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
					</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</p>
					
				<p class="form-row form-row-wide">
					<label for="email">{{ __('E-Mail Address') }}:
						<i class="ln ln-icon-Mail"></i>
						<input type="email" class="input-text @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" />
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
						<input class="input-text @error('password') is-invalid @enderror" type="password" name="password" id="password" required autocomplete="new-password" />
					</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</p>

				<p class="form-row form-row-wide">
					<label for="password-confirm">{{ __('Confirm Password') }}:
						<i class="ln ln-icon-Lock-2"></i>
						<input class="input-text" type="password" name="password_confirmation" id="password-confirm" required autocomplete="new-password" />
					</label>
				</p>

				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" name="register" value="{{ __('Register') }}" />
				</p>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection
