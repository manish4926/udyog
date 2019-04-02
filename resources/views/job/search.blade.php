<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','UDYOGTV')}}</title>

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>

        
    </head>
    
    <body>
        <div class="topnav">
		  <a class="active" href="#home">Home</a>
		  <a href="#about">About</a>
		  <a href="#contact">Contact</a>
		  <div class="search-container">
        <form method="post" action="{{ route('searchcontent') }}"> 
           {{ csrf_field() }}
		 
		  	<input type="text" placeholder="Enter job title to search.." name="search">
       

        <select name="place" placeholder="Location">
            <option value="">Select Location</option>
            <option>DELHI</option> 
            <option>MUMBAI</option> 
            <option>LUCKNOW</option>
            <option>PUNJAB</option>
            </select>
        <select name="exp1">
            <option value="">Select Experience</option>
            <option>0 year</option> 
            <option>1 year</option> 
            <option>2 years</option> 
            <option>3 years</option>
            <option>4 years</option>
             <option>5 years</option>
              <option>6 years</option>
            </select>
            <select name="sal">
            <option value="">Select Salary</option>
            <option>30000</option> 
            <option>40000</option> 
            <option>500000</option> 
            <option>57788</option>
            <option>100000</option>
             <option>200000</option>
              <option>300000</option>
            </select>
		  <button type="submit"><i class="fa fa-search"></i></button>
    	</form>
  		</div>
		</div>
        
        
    </body>
</html>
