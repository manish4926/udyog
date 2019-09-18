@extends('layout.master')

@section('content')
		
		
		<!-- STYLE CSS -->
<!--
		<link rel="stylesheet" href="Registerpage/css/style.css">
		<div class="wrapper" style="background-image: url('Registerpage/images/bg-registration-form-2.jpg');">
=======
-->		
@push('topscript')
 <script src="http://parsleyjs.org/dist/parsley.js"></script>
@endpush
		<link rel="stylesheet" href="registerpage/css/style.css">


		<div class="wrapper" >{{-- background-image: url('registerpage/images/bg-registration-form-2.jpg'); --}}
			<div class="inner" style="height:'790%'">
				<!--<form action="">-->
					
					
					
                <form method="POST" action="{{ route('register') }}" id="validate_form">
  
                        @csrf

                <h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text" class="form-control" name="firstname" validateString data-parsley-trigger="keyup" data-parsley-required>
                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" class="form-control" name="lastname" validateString data-parsley-trigger="keyup" data-parsley-required>
                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email" validateString data-parsley-trigger="keyup" data-parsley-required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password" validateString data-parsley-trigger="keyup" data-parsley-required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>
				
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input type="password" class="form-control" name="password_confirmation" validateString data-parsley-trigger="keyup" data-parsley-required>
					</div>
					<input type="checkbox" data-parsley-trigger="keyup" data-parsley-required> I accept the Terms of Use & Privacy Policy.
					{{-- <div class="checkbox">

						<label>
							
							<span class="checkmark"></span>
						</label>
					</div> --}}

                    <button type="submit" class="btn btn-primary">
                                    {{ __('Register Now') }}
                                </button>
				
				</form>

			</div>
		</div>

@push('bottomscript')
 <script>
            $(document).ready(function(){  
    $('#validate_form').parsley();
 
  });
    </script>
   @endpush
@endsection

