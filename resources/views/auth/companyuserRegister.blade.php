@extends('layout.master')

@section('content')
<style type="text/css">
	.hidden-form {
		display: none;
	}
</style>		
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="Registerpage/css/style.css">
		<div class="wrapper" style="background-image: url('Registerpage/images/bg-registration-form-2.jpg');">
			<div class="inner">
			
                <form method="POST" action="{{ route('register') }}">
  
                        @csrf

                <h3>Registration Form</h3>
					<div class="form-group">

					<div class="form-wrapper">
						<label for="">Company name</label>
						<input type="text" class="form-control" name="company_name" id="company_name">
                        @if ($errors->has('cname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('cname') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="form-wrapper">
						<label for="">Company code</label>
						<input type="text" class="form-control" name="company_code" id="company_code">
                        @if ($errors->has('code'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
					</div>
					</div>
					<button id="verifyCompany" type="button" >Verify</button>
					<div class="hidden-form">
						<div class="form-group">						
							<div class="form-wrapper">
							 <label for="">First Name</label>
							 <input type="text" class="form-control" name="firstname">
                             @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                             @endif
						    </div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" class="form-control" name="lastname">
                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
					 <div class="form-wrapper">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>
				
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input type="password" class="form-control" name="password_confirmation">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> I accept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>

                    <button type="submit" class="btn btn-primary">
                                    {{ __('Register Now') }}
                                </button>
					</div>
				</form>

			</div>
		</div>
		
@push('bottomscript')
<script type="text/javascript">
$(document).ready(function() {

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$("#verifyCompany").click(function(){
        var company_name = $('#company_name').val();
		var company_code = $('#company_code').val();
		$.ajax({
			type:'POST',
			url:'{{ route('checkcompany') }}',
			dataType: 'json',
			data:{company_name: company_name ,company_code : company_code},
			success:function(data) {
				//$("#msg").html(data.msg);
				console.log(data);
				if(data == 'true') {
				$('.hidden-form').show();
				$("#verifyCompany").hide();

				$('#company_name').prop("readonly",true);
				$('#company_code').prop("readonly",true);
				}
			}
		});
         
    }); 

	function verifyCompany() {
		var company_name = $('#company_name').val();
		var company_code = $('#company_code').val();
            $.ajax({
               type:'POST',
               url:'{{ route('checkcompany') }}',
               data:{company_name: company_name ,company_code : company_code},
               success:function(data) {
                  //$("#msg").html(data.msg);
                  console.log(data);
               }
            });
         }

});
</script>




@endpush
@endsection

