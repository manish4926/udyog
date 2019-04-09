<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','UDYOGTV')}}</title>

        
    </head>
    <body>

        <form method="get" action="{{ route('searchcontent') }}">  
       {{ csrf_field() }}
       
        <div>
          <div>
        <table align="center" border-spacing= "2px" bgcolor="" order-color= "gray">
          <tr>
            <th>JOB TITLE</th>
            <th>company name</th>
            <th>hr name</th>
            <th>experience</th>
            <th>Skills</th>
            <th>postdate</th>
            <th>expirydate</th>
            <th>location</th>
            <th>package</th>
          </tr>

          @if(count($searching)>0)
          @foreach($searching as $job_opening)
            
           
            <tr>
              <td>{{$job_opening->job_title}}</td>
              <td>{{$job_opening->company_name}}</td>
              <td>{{$job_opening->hr_name}}</td>
              <td>{{$job_opening->experience}}</td>
              <td>{{$job_opening->skills}}</td>
              <td>{{$job_opening->postdate}}</td>
              <td>{{$job_opening->expdate}}</td>
              <td>{{$job_opening->location}}</td>
              <td>{{$job_opening->package}}</td>
              {{-- <td><a href="{{url('/post/alljobs/details'.$job_opening->job_id)}}" >View details</a></td>   --}}
              <td><a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}">View details</a></td>  
            </tr>
        @endforeach
        @endif
      </table>
      </div>
    </form>
  </div>
  </div>
        
        
    </body>
</html>
