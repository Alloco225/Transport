@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification a été envové sur votre adresse email') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez clicker sur le lien de vérification dans votre adresse email.') }}
                    {{ __("Si vous n'avez pas reçu de lien") }}, <a href="{{ route('verification.resend') }}">{{ __('cliquez ici pour en recevoir un nouveau') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
