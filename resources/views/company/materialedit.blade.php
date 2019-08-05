@extends('layout.master')

@section('content')
<!-- <style type="text/css">
	.hidden-form {
		display: none;
	}
</style>		 -->

<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
        <div class="white-card">
        <h2> Enter Your Products </h2>
            <!-- <div class="col-md-4"> -->
            <form method="post" action="{{route('materialpanelsubmit')}}" enctype="multipart/form-data" id="material_form">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="material" id="material" placeholder="Enter Edited Name">
            </div>
            <div class="form-group">
              <input type="file" name="image" id="image" class="form-control">
            </div>

            <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Upload" />
            {{-- <input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave"/> --}}
            </form>
            
            <!-- </div> -->
        </div>
        <hr>

        <div class="white-card">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <h2> Product List </h2>
            <table class="table table-bordered table-striped table-hover" id="table1">
              <thead>
                <th>S.No</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Delete</th>
              </thead>
              <tbody>
              @php $i = 0 @endphp
              @foreach($companyproucts as $companyprouct)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $companyprouct->product_name }}</td>
                <td><img src="{{ asset('products/'.$companyprouct->image) }}" style="width: 100px;"></td>
                <td><a href="{{route('delete', ['id'=> $companyprouct->id ])}}" class="remCF">Remove</a></td>
              </tr>
              @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>

@push('bottomscript')

{{-- <script>
$(document).ready(function() {
    var id = 1;  
    /* Assigning id and class for tr and td tags for separation. */

    $("#insert").click(function() {
        var newid = id++; 
        $("#table1").append('<tr valign="top" id="'+newid+'">\n\
            <td width="100px" >' + newid + '</td>\n\
            <td width="100px" class="name'+newid+'">' + $("#material").val() + '</td>\n\
            <td width="100px" class="age'+newid+'">' + $("#image").val() + '</td>\n\
            <td width="100px"><a href="{{route('delete', ['id'=> $companyprouct->id ])}}" class="remCF">Remove</a></td>\n\
        </tr>');

    });

    var serializedData = $('#material_form').serialize();

    $.ajax({
        url: "MicrowebController.php",
        type: "post",
        data: serializedData
    });

    // $("#table1").on('click', '.remCF', function() {
    //     $(this).parent().parent().remove();
    // });

   /* crating new click event for save button*/

    $("#butsave").click(function() {
        var lastRowId = $('#table1 tr:last').attr("id"); /* finds id of the last row inside table */


        var material = new Array();  
        var image = new Array();   
        for ( var i = 1; i <= lastRowId; i++) {
            material.push($("#"+i+" .material"+i).html());  /* pushing all the names listed in the table */
            image.push($("#"+i+" .image"+i).html());   /* pushing all the ages listed in the table */
        }
        var sendMaterial = JSON.stringify(material);  
        var sendImage = JSON.stringify(image);
        $.ajax({
            url: "MicrowebController.php",
            type: "post",
            data: {material : sendMaterial , image : sendImage},
            success : function(data){
                alert(data);    /* alerts the response from php. */
                }
        });
        });
});
</script>
 --}}
@endpush
@endsection

