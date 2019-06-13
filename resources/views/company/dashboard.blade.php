@extends('layout.master')

@section('content')
<style>
section {
    padding: 20px 0;
}
</style>
<section>
<div class="row">
    @include('company.sidemenu')      
</div>
</section>
@push('bottomscript')
@endpush
@endsection

