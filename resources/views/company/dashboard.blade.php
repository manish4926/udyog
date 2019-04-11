@extends('layout.master')

@section('content')
<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
        <div class="white-card">
            {{ $companydetail->getDirectory()->cname }}
        </div>
    </div>
</div>

@push('bottomscript')
@endpush
@endsection

