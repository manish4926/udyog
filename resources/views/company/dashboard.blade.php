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
</div>
</section>
@push('bottomscript')
@endpush
@endsection

