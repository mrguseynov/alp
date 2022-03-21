@extends('layouts.app')

@section('content')

<div class="header-content-title">
    <div class="page-title-wrapper">
        <div class="container">
            <h2 class="page-title"> {{ __('Register') }}</h2>
            <ul class="breadcrumb">
                <li><a href="{{route('home', app()->getlocale())}}"><i class="material-icons"></i>{{ __('Home') }}</a></li>

                <li><a href="{{route('register', app()->getlocale())}}">{{ __('Register') }}</a></li>
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
                <p>{{ __('If you already have an account with us, please login at the') }} <a href="{{ route('login', app()->getLocale()) }}"> <b>"{{ __('login page') }}"</b></a>.</p>
                <form method="POST" action="{{ route('register', app()->getLocale()) }}" class="form-horizontal">
					@csrf
                    <fieldset id="account">
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="name">{{ __('Name') }}</label>
							<div class="col-sm-10">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="email">{{ __('Email Adress') }}</label>
							<div class="col-sm-10">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="password">{{ __('Password') }}</label>
							<div class="col-sm-10">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="password-confirm">{{ __('Confirm Password') }}</label>
							<div class="col-sm-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
						</div>
                    </fieldset>
					<div class="buttons">
						<div class="pull-right">
							<button type="submit" class="btn btn-primary">
								{{ __('Register') }}
							</button>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>


























@endsection
