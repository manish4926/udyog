@extends('layout.admin')

@section('title','All Applicants')

@section('content')

@push('topscript')

    <link href="{{ asset('css/tagify.css') }}" rel="stylesheet">

@endpush
    <div class="container">
    <div class="row">
            <br>
            <!-- <div class="box box-primary">
            <div class="box-header with-border"> -->
              <h3 class="box-title">All Applicants</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container"></div>

            <form method="get" action="{{ route('activejobs') }}">  
                    {{ csrf_field() }}
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="thead-dark" align="center">
                            <tr>
                                <th>S. No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>View Profile</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applicants as $applicant)
                                <tr>
                                    <td>{{ $applicant->id }}</td>
                                    <td>{{ $applicant->getUser()->firstname }}</td>
                                    <td>{{ $applicant->getUser()->lastname }}</td>
                                    <td>{{ $applicant->getUser()->email }}</td>
                                    <td><a href="{{ route('userprofile',['userid'=> $applicant->id]) }}" class="btn btn-success">User Profile</a></td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            
        </div>
          </div>
          </div>

@push('bottomscript')
    <script src="{{ asset('js/jQuery.tagify.min.js') }}"></script>

    <script type="text/javascript">
                    // jQuery
            $('[name=tags]').tagify();

            // Vanilla JavaScript
            var input = document.querySelector('input[name=tags]'),
            tagify = new Tagify( input );
            $('[name=tags]').tagify({duplicates : false});

            var myInput = $('[name=tags]').tagify();

            // adds new tag
            // String (word, single or multiple with a delimiter) or an Array of Objects
            myInput.addTags();

            // removes a specific tag
            myInput.removeTag(DOM);

            // removes all tags
            myInput.removeAllTags();

            // destroy the plugin
            myInput.destroy();

            var myInput = $('[name=tags]').tagify();

        </script>

@endpush

@endsection
