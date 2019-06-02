@extends('layout.master')
    
@section('content')

@section('center-content')

<div class="white-card">
    <form action="{{route('uploadadsubmit')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

     <div class="form-group">
            <label>Upload Ad in the middle of the page:</label>
                <input type="file" name="fileupload1" />
     </div>
      <div class="form-group">
            <label>Upload Ad in the right panel of the page:</label>
                <input type="file" name="fileupload2" />
     </div>
      <div class="form-group">
            <label>Upload Ad at the bottom of the page:</label>
                <input type="file" name="fileupload3" />
     </div>

                <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Upload" name="uploadad"/>
                </div>

</div>
</form>
@endsection
@section('right-content')
  @include('partials.sidebar-search-job')
@endsection
@endsection