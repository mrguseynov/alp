@extends('layouts.app')

@section('content')
<div class="header-content-title">
    <div class="page-title-wrapper">
        <div class="container">
            <h2 class="page-title"> {{ __('Login') }}</h2>
            <ul class="breadcrumb">
                <li><a href="{{route('home', app()->getlocale())}}"><i class="material-icons"></i>{{ __('Home') }}</a></li>

                <li><a href="{{route('login', app()->getlocale())}}">{{ __('Login') }}</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="account-login" class="container">
    <div class="row">
        <aside id="column-left" class="col-sm-3 hidden-xs Lwidth">
            <div class="theiaStickySidebar">
                <div class="leftbar"></div>
                <div class="filter_left_button">
                    <button class="left-button column_button">l</button>
                    <button class="cancel-button column_button">x</button>
                </div>
                <div class="left-right-inner">
                    <div class="swiper-viewport">
                        <div id="banner0" class="swiper-container swiper-container-horizontal swiper-container-fade">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-active" style="width: 291px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                    <a href="#">
                                        <img src="https://demo.templatetrip.com/Opencart/OPCTM01/OPCTM010_techyguy/OPC01/image/cache/catalog/demo/banners/left-banner-300x460.jpg" alt="Left-Banner" class="img-responsive">
                                        <div class="left-description">
                                            <div class="title">Home Speaker</div>
                                            <div class="left-button">Shop Now</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </aside>
        <div id="content" class="col-sm-10 Cwidth left-column">
            <div class="theiaStickySidebar">
                <div class="row">
                    <div class="col-sm-6 new-customer">
						<div class="well">
							<h2>{{ __('New Customer') }}</h2>
							<p><strong>{{ __('Register') }}</strong></p>
							<p>{{ __("By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.") }}</p>
						</div>
						<div class="bottom-form">
							<a href="{{ route('register', app()->getLocale()) }}" class="btn btn-primary">{{ __('Register') }}</a></div>
						</div>
                    <div class="col-sm-6 customer-login">
						<form method="POST" action="{{ route('login', app()->getLocale()) }}">
							@csrf
							<div class="well">
								<h2>{{ __('Returning Customer') }}</h2>
								<p><strong>{{ __('I am a returning customer') }}</strong></p>

								<div class="form-group">
									<label class="control-label" for="email">{{ __('Email Address') }}</label>
									<input id="email" type="email" placeholder="{{ __('Your E-mail Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label class="control-label" for="password">Password</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-check">
                                    <label class="checkbox-inline">
                                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                      </label>


									<label class="form-check-label" for="remember">
										{{ __('Remember Me') }}
									</label>
								</div>


							</div>
							<div class="bottom-form">

								@if (Route::has('password.request'))
                                    <a href="{{ route('password.request', app()->getLocale()) }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

								<button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
