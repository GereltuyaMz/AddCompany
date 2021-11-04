@extends('layouts.app')

@section('content')
  <h1 class="display-6">Company Details</h1>   
  <hr/>
  
  <dl>
    <dt>Company Name</dt>
    <dd>{{$company->company_name}}</dd>
    <dt>Email</dt>
    <dd>{{$company->email}}</dd>
    <dt>Phone Number</dt>
    <dd>{{$company->phone_number}}</dd>
  </dl>

  <div class="d-flex">
    {{-- <a href="{{route('companies.edit', $company->id)}}" class="btn btn-primary m-1">Edit</a> --}}
    <form action="{{route('companies.destroy', $company->id)}}" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      {{-- <button class="btn btn-danger m-1">Delete company</button> --}}
    </form>
  </div>

@endsection