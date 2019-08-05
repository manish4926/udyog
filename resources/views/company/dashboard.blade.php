@extends('layout.master')

@section('content')

{{-- <style>
section {
    padding: 40px 0;
}

</style> --}}
<section class="main-section">
<div class="row">
    @include('company.sidemenu')  

    <div class="col-md-8">
        <!-- <div class="white-card"> -->
                @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
                 @endif
          </div>
    <!-- </div>     -->
</div>
</section>
@push('bottomscript')
@endpush
@endsection

