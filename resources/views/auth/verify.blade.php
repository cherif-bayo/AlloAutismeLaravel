@extends('layouts.app')

@section('content')
<<div class="box special features sign-in-par">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérification de votre adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse email.') }}
                        </div>
                    @endif

                    {{ __("Avant d'utiliser ce site veuillez trouver le lien de vérification dans vos emails") }}
                    {{ __("Si vous n'avez pas reçu l'email") }}, <a class="verificationEmail" href="{{ route('verification.resend') }}">{{ __('cliquez ici pour en recevoir un nouveau') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
