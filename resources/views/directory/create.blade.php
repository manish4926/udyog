@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

<style>
@font-face {
  font-family: SourceSansPro-Regular;
  src: url('../fonts/source-sans-pro/SourceSansPro-Regular.ttf'); 
}

@font-face {
  font-family: SourceSansPro-Bold;
  src: url('../fonts/source-sans-pro/SourceSansPro-Bold.ttf'); 
}

@font-face {
  font-family: JosefinSans-Bold;
  src: url('../fonts/JosefinSans/JosefinSans-Bold.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: SourceSansPro-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
	font-family: SourceSansPro-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: SourceSansPro-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}


input::-webkit-input-placeholder { color: #999999;}
input:-moz-placeholder { color: #999999;}
input::-moz-placeholder { color: #999999;}
input:-ms-input-placeholder { color: #999999;}

textarea::-webkit-input-placeholder { color: #999999;}
textarea:-moz-placeholder { color: #999999;}
textarea::-moz-placeholder { color: #999999;}
textarea:-ms-input-placeholder { color: #999999;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}



 {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

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