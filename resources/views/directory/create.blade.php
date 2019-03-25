
@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

@section('content')   
            <h1>
                    @if($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach    
                        </ul>
                    </div>
                    @endif
            
                </h1>
         
<div class="container">
    <form action="store" method="post">
            <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
      <label for="name"> Company Name </label>
      <input type="text" id="name" name="name">
    <br>
    <br>
    <label for="name"> Employee Name </label>
      <input type="text" id="ename" name="ename">
      <br>
    <br>
      <label for="cno"><b> Contact Details - </b></label>
      <br>
      <label for="cno"> Phone Number</label>
      <input type="text" id="cno" name="cno">
      <br>
      <br>
      <label for="cemail"> Email - Id </label>
      <input type="text" id="cemail" name="cemail">
      <br>
      <br>
      <label for="caddress"> Address </label>
      <textarea id="caddress" name="caddress" style="height:50px"></textarea>
      <br>
      <br>
     <!-- <label for="cuan"> Udyog Aadhar Number</label>
      <input type="text" id="cuan" name="cuan">
      <br>
      <br>
      <label for="crn"> Company Registration Number </label>
      <input type="text" id="crn" name="crn">
      <br>
      <br>
      <label for="cgin"> GST Identification Number </label>
      <input type="text" id="cgin" name="cgin">
      <br>
      <br> -->
      <label for=""></label>
      <input type="submit" name="submit" value="submit">
  
    </form>


  </div> 
            </div>
        </div>
        @endsection