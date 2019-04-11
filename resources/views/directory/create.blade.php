@extends('layout.master')

@section('content')
        
        
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="Registerpage/css/style.css">


        <div class="wrapper" style="background-image: url('Registerpage/images/bg-registration-form-2.jpg');">
            <div class="inner">
                <!--<form action="">-->
                <form method="POST" action="{{ route('store') }}">
                        @csrf

                <h3>Company Registration</h3>
                    <div class="form-group">
                        <div class="form-wrapper">
                            <label for="">Company name</label>
                            <input type="text" class="form-control" name="companyname">
                            @if ($errors->has('companyname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('companyname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-wrapper">
                            <label for="">Director Name</label>
                            <input type="text" class="form-control" name="directorname">
                            @if ($errors->has('directorname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('directorname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Company Email</labecompanyl>
                        <input type="text" class="form-control" name="companyemail">
                        @if ($errors->has('companyemail'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('companyemail') }}<company/strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-wrapper">
                        <label for="">Company address</labecompanyl>
                        <input type="text" class="form-control" name="companyaddress">
                        @if ($errors->has('companyaddress'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('companyaddress') }}<company/strong>
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
                
                </form>
            </div>
        </div>
        

@endsection

