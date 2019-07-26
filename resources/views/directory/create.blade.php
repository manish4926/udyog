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
                            <input type="text" class="form-control" name="cname">
                            @if ($errors->has('companyname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('companyname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-wrapper">
                            <label for="">Director Name</label>
                            <input type="text" class="form-control" name="cemp">
                            @if ($errors->has('directorname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('directorname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-wrapper">
                            <label for="">Industry type</label>
                            <input type="text" class="form-control" name="industrytype">
                            @if ($errors->has('industrytype'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('industrytype') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-wrapper">
                            <label for="">Business type</label>
                            <input type="text" class="form-control" name="businesstype">
                            @if ($errors->has('businesstype'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('businesstype') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-wrapper">
                            <label for="">Material</label>
                            <input type="text" class="form-control" name="material">
                            @if ($errors->has('material'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('material') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Company Email</label>
                        <input type="text" class="form-control" name="companyemail">
                        @if ($errors->has('companyemail'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('companyemail') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-wrapper">
                        <label for="">Company address</label>
                        <div class="form-wrapper">
                        <label for="">Block</label>
                        <input type="text" class="form-control" name="block">
                        @if ($errors->has('block'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('block') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-wrapper">
                        <label for="">Sector</label>
                        <input type="text" class="form-control" name="sector">
                        @if ($errors->has('sector'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('sector') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-wrapper">
                        <label for="">Area</label>
                        <input type="text" class="form-control" name="area">
                        @if ($errors->has('area'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('area') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-wrapper">
                        <label for="">State</label>
                        <input type="text" class="form-control" name="state">
                        @if ($errors->has('state'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('state') }}</strong>
                            </span>
                        @endif
                    </div>
                 </div>
                    <div class="form-wrapper">
                        <label for="">Phone number</label>
                        <input type="text" class="form-control" name="phoneno">
                        @if ($errors->has('phoneno'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phoneno') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- <div class="form-wrapper">
                        <label for="">Upload Image</label>
                        <input name="image" type="file" class="form-control" id="imageid" placeholder="choose file...." class="custom-file-input">
                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div> -->
                    
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