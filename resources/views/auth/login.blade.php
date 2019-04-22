@extends('layouts.app')
@section('content')
<div class="box special features sign-in-par">
			<div class="row mention mb-3">
				<div class="col-xs-6 tab" >
					<a href="{{ route('login') }}" class="actived " >{{ __('Je suis membre') }}</a>
				</div>
				<div class="col-xs-6 tab" >
					<a href="{{ route('register') }}" class="register-form-link" >{{ __('Première connexion') }}</a>
				</div>
			</div>
			<div class="container">
				<!-- Div affichant les erreurs -->
				@include ('errors')

			<form method="POST" action="{{ route('login') }}" id="formLogin">
            @csrf
				<div class="form-group">
                    <label for="email" class="question">{{ __('E-Mail Address') }}</label>
                    
                    <input type="email" name="email"class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="emailcon" placeholder="votre email " value="{{ old('email') }}" required autofocus>
                    
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
				</div>
				<div class="form-group">
                    <label for="pwd" class="question">{{ __('Password') }}</label>
                    
                    <input type="password" name="password"class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="pwd" placeholder="votre mot passe " >
                               @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				</div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember"> @lang('Se souvenir de moi')</label>
                    </div>
                </div>
				<button type="submit" class="connexionButton"> {{ __('Connexion') }}</button>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-12">
							<div class="text-center">
                            
                                @if (Route::has('password.request'))
                                    <a class="forgot-password" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
@endsection


		

