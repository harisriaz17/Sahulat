@extends('layouts.master')
@section('bodytitle')
User Profile
@endsection
@section('content')
@if($message)
{{$message}}
@endif
<div class="table-responsive">
  {{Form::open(['route' => 'postUserProfile'])}}
  {{Form::token()}}
  <center>
  <table class="table" width="50%" align="center">
    <thead>
      <tr>
        <th>Fields</th>
        <th>Input</th>
      </tr>
    </thead>


    <tbody>
      <tr>
        <td class="success">{{Form::label('email', 'E-Mail Address', ['class' => 'awesome'])}}
        </td>
        <td>
          {{Form::text('email', $user->email, ['readonly'])}}
        </td>
        <td class="success">{{Form::label('name', 'Name', ['class' => 'awesome'])}}
        </td>
        <td>
        {{Form::text('name', $user->name)}}
        </td>
      </tr>
      <tr>
        <td class="success">{{Form::label('address', 'Address', ['class' => 'awesome'])}}
        </td>
        <td>
          {{Form::text($person !== null ? $person->address : null)}}
        </td>
        <td class="success">{{Form::label('city', 'City', ['class' => 'awesome'])}}
        </td>
        <td>
          {{Form::text($person !== null ? $person->city : null)}}
        </td>
      </tr>
      <tr>
        <td class="success">{{Form::label('country', 'Country', ['class' => 'awesome'])}}
        </td>
        <td>
          {{Form::text($person !== null ? $person->country : null)}}
        </td>
        <td class="success">{{Form::label('newpassword', 'New Password', ['class' => 'awesome'])}}
        </td>
        <td>
          {{Form::password('newpassword', '')}}
        </td>
      </tr>
      <tr>
        <td class="success">{{Form::label('cnic', 'CNIC', ['class' => 'awesome'])}}
        </td>
        <td>
          {{Form::text('cnic', $user->cnic, ['readonly'])}}
        </td>
        <td class="success">{{Form::label('password', 'Current Password', ['class' => 'awesome'])}}</td>
        <td>{{Form::password('password', ['class' => 'awesome'])}}</td>
      </tr>
      <tr>

        <td align="center" class="info" colspan="4">{{Form::submit('Save Profile')}}</td>
      </tr>
    </tbody>
  </table>
</div>
</center>

@endsection
