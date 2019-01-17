@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Marriage Information</div>
              <div class="card-body">
                <form action="" method="">
                  @csrf
                  <div class="col-md-8">
                    <h3>Groom's Info</h3>
                    <br>
                  <p><strong>Name:</strong>{{$information->groom_name}}</p>
                  <p><strong>Email:</strong>{{$information->groom_email}}</p>
                  <p><strong>Birthdate:</strong>{{$information->groom_dob}}</p>
                  <p><strong>NID:</strong>{{$information->groom_nid}}</p>
                  <p><strong>Father's Name:</strong>{{$information->groom_father_name}}</p>
                  <p><strong>Father's NID:</strong>{{$information->groom_father_nid}}</p>
                  <br>
                  </div>

                  <div class="col-md-8">
                    <h3>Bride's Info</h3>
                    <br>
                  <p><strong>Name:</strong>{{$information->bride_name}}</p>
                  <p><strong>Email:</strong>{{$information->bride_email}}</p>
                  <p><strong>Birthdate:</strong>{{$information->bride_dob}}</p>
                  <p><strong>NID:</strong>{{$information->bride_nid}}</p>
                  <p><strong>Father's Name:</strong>{{$information->bride_father_name}}</p>
                  <p><strong>Father's NID:</strong>{{$information->bride_father_nid}}</p>
                  <br>
                  </div>

                  <div class="col-md-8">
                    <h3>Witness's Info</h3>
                    <br>
                    <p><strong>Name:</strong>{{$information->fw_name}}</p>
                    <p><strong>Birthdate:</strong>{{$information->fw_dob}}</p>
                    <p><strong>NID:</strong>{{$information->fw_nid}}</p>
                    <p><strong>Father's Name:</strong>{{$information->fw_father_name}}</p>
                    <p><strong>Father's NID:</strong>{{$information->fw_father_nid}}</p>
                    <br>
                  </div>

                </form>
              </div>
        </div>
    </div>
</div>

@endsection
