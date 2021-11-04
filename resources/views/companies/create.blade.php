@extends('layouts.app')

@section('content')
  <h1 class="display-6">Create new company</h1>
  <hr/>

  {{-- validation --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{ Form::open(['action' => 'CompanyController@store']) }}

  {{Form::token()}}

  <div class="form-group">
    {{Form::label('company_name', 'Company Name')}}
    {{Form::text('company_name', '', ['class' => 'form-control'])}}
  </div>
  <div class="form-group">
    {{Form::label('email', 'email')}}
    {{Form::text('email', '', ['class' => 'form-control'])}}
  </div>
  <div class="form-group">
    {{Form::label('phone_number', 'Phone Number')}}
    {{Form::number('phone_number', '', ['class' => 'form-control'])}}
  </div>
    
  {{-- submission button --}}
  {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
  {{ Form::close() }}

@endsection