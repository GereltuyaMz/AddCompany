@extends('layouts.app')

@section('content')

  <h1 class="display-6">Companies</h1>
  <a href="{{route('companies.create')}}">Create New</a>
  <hr/>

  <table class="table">
    <thead>
      <th>Company Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th colspan="3">Actions</th>
    </thead>
    
    @foreach ($companies as $company)
      <tr>
        <td>{{$company->company_name}}</td>
        <td>{{$company->email}}</td>
        <td>{{$company->phone_number}}</td>
        <td>
          <div class="d-flex">
            <a href="{{route('companies.show', $company->id)}}" class="btn btn-info m-1">Details</a>
            {{-- <a href="{{route('companies.edit', $company->id)}}" class="btn btn-primary m-1">Edit</a> --}}
            <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button class="btn btn-danger m-1">Delete Company</button>
            </form>
          </div>
        </td>
      </tr>
    @endforeach
  </table>
    
@endsection