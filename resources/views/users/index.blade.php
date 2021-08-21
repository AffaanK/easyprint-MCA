@extends('layouts.app')
@section('content')
  <h3>Your Users </h3>
  <table class="table table-bordered table-hover table-sm">
        <tr>
            <th>
                Name
            </th>
            <th>
              Email
            </th>
            <th>
                Phone
            </th>
            <th>
                Policy
            </th>
            <th>
                Edit
            </th>      
        </tr>
    
        @foreach($users as $user)    
        <tr>
            <td>
                {{$user->name}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
                {{$user->phone}}
            </td>
            <td>
                {{$user->policy}}
            </td>
            <td>
              <a href="/users/{{$user->id}}/edit" class="btn btn-primary"> Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection