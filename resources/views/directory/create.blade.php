@extends('layout.master')

@section('content')
        
        
        <!-- STYLE CSS -->
        <script src="http://parsleyjs.org/dist/parsley.js"></script>
        <link rel="stylesheet" href="Registerpage/css/style.css">


        <div class="wrapper" style="background-image: url('Registerpage/images/bg-registration-form-2.jpg');">
            <div class="inner">
                <!--<form action="">-->
                <form method="POST" action="{{ route('store') }}" id="validate_form" enctype="multipart/form-data">
                        @csrf
                        

                <h3>Company Registration</h3>
                    <div class="form-group">
                        <div class="form-wrapper">
                            <label for="">Company name</label>
                            <input type="text"  data-parsley-trigger="keyup" class="form-control" name="cname" required >
                        </div>
                        <div class="form-wrapper">
                            <label for="">Director Name</label>
                            <input type="text" class="form-control" name="cemp" data-parsley-trigger="keyup" data-parsley-required>
                        </div>
                        <div class="form-wrapper">
                            <label for="">Industry type</label>
                            <input type="text" class="form-control" name="industrytype" data-parsley-trigger="keyup" data-parsley-required>
                        </div>
                        <div class="form-wrapper">
                            <label for="">Business type</label>
                            <input type="text" class="form-control" name="businesstype" data-parsley-trigger="keyup" data-parsley-required>
                        </div>
                        <div class="form-wrapper">
                            <label for="">Material</label>
                            <input type="text" class="form-control" name="material" data-parsley-trigger="keyup" data-parsley-required>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Company Email</label>
                        <input type="email" class="form-control" name="companyemail" data-parsley-trigger="keyup" data-parsley-required>
                    </div>

                    <div class="form-wrapper">
                        <label for="">Company address</label>
                        <div class="form-wrapper">
                        <label for="">Block</label>
                        <input type="text" class="form-control" name="block" validateString data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Sector</label>
                        <input type="text" class="form-control" name="sector" validateString data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Area</label>
                        <input type="text" class="form-control" name="area" validateString data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">State</label>
                        <input type="text" class="form-control" name="state" validateString data-parsley-trigger="keyup" data-parsley-required >
                    </div>
                 </div>
                    <div class="form-wrapper">
                        <label for="">Phone number</label>
                        <input type="text" class="form-control" name="phoneno" data-parsley-pattern="\+?\d[\d -]{8,12}\d" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Upload Image</label>
                        <input name="image" type="file" class="form-control" id="imageid" placeholder="choose file...." class="custom-file-input" data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> I accept the Terms of Use & Privacy Policy.
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">
                    Submit
                                </button>
                
                </form>
            </div>
        </div>
    

    <script>
            $(document).ready(function(){  
    $('#validate_form').parsley();
 
  });
    </script>
@endsection