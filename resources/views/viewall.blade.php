@extends('layout')
@section('content')
<div class="container">
  <div class="row">
    <div class="col ">
      <table id="studentTable" class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td id="sid" value="{{$item->id}}">{{$item->id}}</td>
            <td>{{$item->FirstName}}</td>
            <td>{{$item->LastName}}</td>
            <td>{{$item->Email}}</td>
            {{-- <td>{{$item->userId}}</td>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->body}}}</td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col col-lg-2">
      <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <span id="ajaxData"></span>
      </div>
    </div>
  </div>
</div>
@endsection