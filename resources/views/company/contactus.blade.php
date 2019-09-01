@extends('layout.master')

@section('content')
<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
        <div class="white-card">
        <h2> Contact Details</h2>
            <div class="col-md-4">
            <form method="post" action="{{route('dashboard2')}}">
            @csrf
            <div class="form-wrapper">
                        <label for="">Company Email</label>
                        <input type="email" class="form-control" name="companyemail" data-parsley-trigger="keyup" data-parsley-required>
                    </div>

                    <div class="form-wrapper">
                        <label for="">Company address</label>
                        <div class="form-wrapper">
                        <label for="">Block</label>
                        <input type="text" class="form-control" name="block" validateString data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Sector</label>
                        <input type="text" class="form-control" name="sector" validateString data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Area</label>
                        <input type="text" class="form-control" name="area" validateString data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">State</label>
                        <input type="text" class="form-control" name="state" validateString data-parsley-trigger="keyup" data-parsley-required >
                    </div>
                 </div>
                    <div class="form-wrapper">
                        <label for="">Phone number</label>
                        <input type="text" class="form-control" name="phoneno" data-parsley-pattern="\+?\d[\d -]{8,12}\d" data-parsley-required>
                    </div>
                  <!-- Modal -->
               

@push('bottomscript')
@endpush
@endsection
