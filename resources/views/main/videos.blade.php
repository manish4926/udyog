@extends('layout.master')

@section('title','All Videos')

@section('content')


  <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Video Name</th>
          <th scope="col">Upload Date</th>
          <th scope="col">Video</th>
        </tr>
      </thead>

      @foreach($files as $file)
      <tbody>
        <tr>
          <th scope="row">{{$file->id}}</th>
          <td>{{$file->name}}</td>
          <td>{{$file->created_at->toDayDateTimeString()}}</td>
          <td><video width="100%" height="50%" autoplay="on" controls>
              <source src="{{ asset('storage\\upload\\'.$file->name)}}" type="video/mp4">
              </video>
          </td>
        </tr>
      </tbody>
      @endforeach

   </table>


@endsection
