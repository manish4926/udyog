@extends('layout.master')

@section('content')
@push('topscript')
<link rel="stylesheet" type="text/css" href="{{ asset('loginpage/css/main.css') }}">
@endpush

<div class="container">
    <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('loginpage/img/logo.png') }}" alt="IMG">
                </div>

                <form  method="POST" action="{{ route('login') }}">
                        @csrf



                    <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>


                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    <div class="container-login100-form-btn">

                                   <button  class="login100-form-btn" type="submit" class="btn btn-primary">
                                    Login
                                </button>
                    </div>
                    <input type="hidden" name="redirecturl" value="{{!empty($_REQUEST['redirecturl']) ? $_REQUEST['redirecturl']:'' }}">
                    <input type="hidden" name="passingid" value="{{!empty($_REQUEST['id']) ? $_REQUEST['redirecturl']:'' }}">
                    @if (Route::has('password.request'))

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="{{ route('password.request') }}">
                            Username / Password?
                        </a>
                    </div>
                    @endif


                </form>
            </div>
</div>

</form>












@push('bottomscript')
<script src="{{ asset('loginpage/js/tilt/tilt.jquery.min.js') }}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
@endpush
@endsection
