@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Marriage List</div>
          <div class="card-body">
            <form action="" method="get">
              @csrf

              @foreach($marriage_admin_id as $data)
              <td><div class="col-md-8">
                <div class="col-md-4">
                  <p>{{$data->groom_nid}}  </p>
                </div>
                <div class="form-group row mb-0">
                <div class="col-md-8">
                  <a href="marriage-list/{{$data->id}}"><button class="btn btn-primary" type="button" name="button">View</button></a>
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
