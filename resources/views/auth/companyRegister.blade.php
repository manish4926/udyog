@extends('layout.master')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='select2/dist/js/select2.min.js' type='text/javascript'></script>

@section('content')
@push('topscript')
<link rel="stylesheet" type="text/css" href="{{ asset('loginpage/css/main.css') }}">
@endpush

<div class="container">
    <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('loginpage/img/logo.png') }}" alt="IMG">
                </div>

                <form  method="POST" action={{Route('cregister')}}>
                        @csrf


                
                    <span class="login100-form-title">
                        Company Registeration
                    </span>

                    <div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="cname" placeholder="Company name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>   
                           
                    
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100 {{ $errors->has('cid') ? ' is-invalid' : '' }}" type="text" name="code" placeholder="company code">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>

                    </div>
      
                                <div class="container-login100-form-btn">
                       
                                   <button  class="login100-form-btn" type="submit" class="btn btn-primary">
                                    Register
                                </button>
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
