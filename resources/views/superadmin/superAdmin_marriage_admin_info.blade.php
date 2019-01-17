@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Admin List</div>
          <div class="card-body">
            <form action="/admin/list/{id}/marriage-list" method="get">
              @csrf
              @foreach($admins as $admin)

              <td><div class="col-md-8">
                <div class="col-md-4">
                  <p>{{$admin->id}}</p>
                </div>
                <div class="form-group row mb-0">
                <div class="col-md-8">
                  <a href="list/{{$admin->id}}/marriage-list"><button class="btn btn-primary" type="button" name="button">View</button></a>
                </div>
                </div>
              </div>
              </td>
              <br>
              @endforeach
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
