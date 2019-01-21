@extends('layouts.base')
@section('pageTitle', 'Login')

@section('content')
<div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
        <div class="box-shadow border rounded my-5 p-3 text-center">
            <p class="font-weight-bold mb-4">{{ __('Entrar') }}</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="custom-label">{{ __('E-Mail') }}</label>

                    <input id="email" type="email" class="form-control custom-form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                </div>

                <div class="form-group">
                    <label for="password" class="custom-label">{{ __('Senha') }}</label>

                    <input id="password" type="password" class="form-control custom-form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label class="custom-label">
                            <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}> {{ __('Relembrar-me') }}
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fas fa-sign-in-alt"></i> {{ __('Entrar') }}
                    </button>

                    <a class="btn btn-sm btn-link mt-2" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
