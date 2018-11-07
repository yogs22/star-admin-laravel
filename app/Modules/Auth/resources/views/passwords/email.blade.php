@extends('dashboard::layouts.auth')

@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">

                    <div class="auto-form-wrapper">
                        <h2 class="text-center mb-4">{{ __('Reset Password') }}</h2>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" name="email" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                      </span>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert"> {{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-primary submit-btn btn-block">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
