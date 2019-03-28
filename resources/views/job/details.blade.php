<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','UDYOGTV')}}</title>

        <style>
                    table 
                    {
                          display: table;
                          border-collapse: separate;

                    }
                    table, th, td 
                    {
                        border: 1px solid black;
                        padding:6px;
                        width: 50px;
                        color: blue;
                    }  

                    button{
                float:left;
                width:150px;
            }               
            </style>  

        
    </head>
    <body>
         <h1 align="center">DESCRIPTION</h1>
         <h2>Click Here to Apply....</h2>
        <button type="button">Apply Now</button>
         <table align="center" border-spacing= "2px" bgcolor="" order-color= "gray">
            <tr>
                <div>
                <th>JOBs ID</th>
                <th>JOB TITLE</th>
                <th>COMPANY NAME</th>
                <th>HR NAME</th>
                <th>EXPERIENCE</th>
                <th>SKILLS</th>
                <th>POST DATE</th>
                <th>END DATE</th>
                <th>LOCATION</th>
                <th>PACKAGE</th> 
                </div>  
            </tr>

            <br/>
            <br/>



		           @foreach($desc as $job_opening)
                           <tr>
        				    <td>{{$job_opening->job_id}}</td>
        				    <td>{{$job_opening->job_desc}}</td>
                            <td>{{$job_opening->company_name}}</td>
                            <td>{{$job_opening->hr_name}}</td>
                            <td>{{$job_opening->experience}}</td>
                            <td>{{$job_opening->skills}}</td>
                            <td>{{$job_opening->postdate}}</td>
                            <td>{{$job_opening->expdate}}</td>
                            <td>{{$job_opening->location}}</td>
                            <td>{{$job_opening->package}}</td>
                            </tr>
                            
                    @endforeach
		</table>
       

       <!-- <table align="center" border-spacing= "2px" bgcolor="" order-color= "gray" width="500">
            <tr><th width="500">Description</th>
            </tr>

        -->


           
        @foreach($desc as $job_opening)
                           
                            <br/>
                            <br/>
                            <tr height="300"><td>{{$job_opening->job_desc}}</td></tr>
                            @endforeach
        </table>
        
        
    </body>
</html>
