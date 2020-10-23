@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center vh-100" style="align-items: center;">
        <div class="col-md-8">
            <div class="card border-0" style="background-color: #363232;">
                <div class="card-header">{{ __('Verifique seu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para seu endereço de email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, favor checar o link de vericação no seu email.') }}
                    {{ __('Caso não tenha recebido o email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui para fazer mais uma requisição') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
