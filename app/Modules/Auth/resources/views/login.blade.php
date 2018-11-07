@extends('dashboard::layouts.auth')

@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="label">{{ __('E-Mail Address') }}</label>
                                <div class="input-group">
                                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" name="email" required autofocus>
                                    <div class="input-group-append">
                                      <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                      </span>
                                    </div>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label">{{ __('Password') }}</label>
                                <div class="input-group">
                                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="**************" name="password" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                      </span>
                                    </div>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary submit-btn btn-block">{{ __('Login') }}</button>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                                    </label>
                                </div>
                                <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">{{ __('Forgot Your Password?') }}</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block g-login">
                                    <i class="fa fa-google"></i> {{ __('Log in with Google') }}
                                </button>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block g-login">
                                    <i class="fa fa-facebook"></i> {{ __('Log in with Facebook') }}
                                </button>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">{{ __('Not a member ?') }}</span>
                                <a href="{{ route('register') }}" class="text-black text-small">{{ __('Create new account') }}</a>
                            </div>
                        </form>
                    </div>
                    <ul class="auth-footer">
                        <li>
                            <a href="#">{{ __('Conditions') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('Help') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('Terms') }}</a>
                        </li>
                    </ul>
                    <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
