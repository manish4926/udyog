
@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@section('content')


  <div class="container box">


   <h3 align="center">Industry List</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading"></div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Industry.." />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Company Name</th>
         <th>Employee</th>
         <th>Material</th>
         <th>Address</th>
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>    
   </div>
  </div>
  <div  class="container box">
         <button type="button" class="btn btn-info"><a href="/details">New Entry</a></button>
         <button type="button" class="btn btn-success"><a href="/search">Filtered data</a></button>   
  </div> 
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('livesearch.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>


@endsection