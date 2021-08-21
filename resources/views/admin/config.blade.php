@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Database Config') }}
          <button type="button" class="close" aria-label="Close">
           <a href="/admin"> <span aria-hidden="true">&times;</span></a>
          </button>
        </div>

        <div class="card-body">
          <form method="POST" action="{{ route('config') }}">
            @csrf
            <div class="form-group row">
              <label for="db_connection" class="col-md-4 col-form-label text-md-right">{{ __('Database Source') }}</label>
              <div class="col-md-6">
                <input id="db_connection" type="text" class="form-control @error('db_connection') is-invalid @enderror" name="db_connection" value="mysql" required readonly>
                @error('db_connection')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="db_host" class="col-md-4 col-form-label text-md-right">{{ __('Database Host') }}</label>

              <div class="col-md-6">
                <input id="db_host" type="text" class="form-control @error('db_host') is-invalid @enderror" name="db_host" required value="{{$databaseConfig->db_host}}">
                @error('db_host')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="db_name" class="col-md-4 col-form-label text-md-right">{{ __('Database name') }}</label>

              <div class="col-md-6">
                <input id="db_name" type="text" class="form-control @error('db_name') is-invalid @enderror" name="db_name" value="{{$databaseConfig->db_name}}" required>

                @error('db_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="db_user_name" class="col-md-4 col-form-label text-md-right">{{ __('Database UserName') }}</label>

              <div class="col-md-6">
                <input id="db_user_name" type="text" class="form-control @error('db_user_name') is-invalid @enderror" name="db_user_name" value="{{$databaseConfig->db_user_name}}" required>

                @error('db_user_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="db_password" class="col-md-4 col-form-label text-md-right">{{ __('Database Password') }}</label>

              <div class="col-md-6">
                <input id="db_password" type="password" class="form-control @error('db_password') is-invalid @enderror" name="db_password" required>

                @error('db_password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Save') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection