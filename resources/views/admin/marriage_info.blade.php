@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Marriage Information</div>
              <div class="card-body">
                <form action="/action" method="post">
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
                  <p><strong>Marride Before:</strong>{{$information->groom_status}}</p>
                  <p><strong>Marride Before Wife Name:</strong>{{$information->married_bride_name}}</p>
                  <p><strong>Marride Before Wife Nid:</strong>{{$information->married_bride_nid}}</p>
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
                  <p><strong>Married Before:</strong>{{$information->bride_status}}</p>
                  <p><strong>Marride Before Husband Name:</strong>{{$information->married_groom_name}}</p>
                  <p><strong>Marride Before Husband Nid:</strong>{{$information->married_groom_nid}}</p>
                  <p><strong>Marriage Under Religion:</strong>{{$information->religion}}</p>
                  <p><strong>Mortgage Money:</strong>{{$information->mortgage_money}}</p>
                  <p><strong>Mortgage Paid Money:</strong>{{$information->paid_mortgage_money}}</p>
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
                  <div class="hidden">
                    <!--
                    groom information
                    -->
                    <input type="hidden" name="groom_name" id="groom_name" value="{{$information->groom_name}}">
                    <input type="hidden" name="groom_email" id="groom_email" value="{{$information->groom_email}}">
                    <input type="hidden" name="groom_dob" id="groom_dob" value="{{$information->groom_dob}}">
                    <input type="hidden" name="groom_nid" id="groom_nid" value="{{$information->groom_nid}}">
                    <input type="hidden" name="groom_father_name" id="groom_father_name" value="{{$information->groom_father_name}}">
                    <input type="hidden" name="groom_father_nid" id="groom_father_nid" value="{{$information->groom_father_nid}}">
                    <input type="hidden" name="groom_status" id="groom_status" value="{{$information->groom_status}}">
                    <input type="hidden" name="married_bride_name" id="married_bride_name" value="{{$information->married_bride_name}}">
                    <input type="hidden" name="married_bride_nid" id="married_bride_nid" value="{{$information->married_bride_nid}}">
                    <!--
                    bride information
                    -->
                    <input type="hidden" name="bride_name" id="bride_name" value="{{$information->bride_name}}">
                    <input type="hidden" name="bride_email" id="bride_email" value="{{$information->bride_email}}">
                    <input type="hidden" name="bride_dob" id="bride_dob" value="{{$information->bride_dob}}">
                    <input type="hidden" name="bride_nid" id="bride_nid" value="{{$information->bride_nid}}">
                    <input type="hidden" name="bride_father_name" id="bride_father_name" value="{{$information->bride_father_name}}">
                    <input type="hidden" name="bride_father_nid" id="bride_father_nid" value="{{$information->bride_father_nid}}">
                    <input type="hidden" name="bride_status" id="bride_status" value="{{$information->bride_status}}">
                    <input type="hidden" name="married_groom_name" id="married_groom_name" value="{{$information->married_groom_name}}">
                    <input type="hidden" name="married_groom_nid" id="married_groom_nid" value="{{$information->married_groom_nid}}">

                    <!--
                    witness information
                    -->
                    <input type="hidden" name="religion" id="religion" value="{{$information->religion}}">
                    <input type="hidden" name="mortgage_money" id="mortgage_money" value="{{$information->mortgage_money}}">
                    <input type="hidden" name="paid_mortgage_money" id="paid_mortgage_money" value="{{$information->paid_mortgage_money}}">
                    <input type="hidden" name="fw_name" id="fw_name" value="{{$information->fw_name}}">
                    <input type="hidden" name="fw_dob" id="fw_dob" value="{{$information->fw_dob}}">
                    <input type="hidden" name="fw_nid" id="fw_nid" value="{{$information->fw_nid}}">
                    <input type="hidden" name="fw_father_name" id="fw_father_name" value="{{$information->fw_father_name}}">
                    <input type="hidden" name="fw_father_nid" id="fw_father_nid" value="{{$information->fw_father_nid}}">
                    <input type="hidden" name="admin_id" id="admin_id" value="{{$information->admin_id}}">
                  
                  </div>

                  <div class="form-group">
                      <div class="col-md-8 offset-md-4">
                          <button type="submit" name="accept" id="submit" class="btn btn-primary">
                              {{ __('Accept') }}
                          </button>
                          <button type="submit" name="decline" class="btn btn-primary">
                              {{ __('Decline') }}
                          </button>

                      </div>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">

$('#submit').one('submit', function() {
    $(this).find('input[type="submit"]').attr('disabled','disabled');
});

    var groom_name=$("#groom_name").val();
    var groom_email=$("#groom_email").val();
    var groom_dob=$("#groom_dob").val();
    var groom_nid=$("#groom_nid").val();
    var groom_father_name=$("#groom_father_name").val();
    var groom_father_nid=$("#groom_father_nid").val();
    var groom_status=$("#groom_status").val();
    var married_bride_name=$("#married_bride_name").val();
    var married_bride_nid=$("#married_bride_nid").val();

    var bride_name=$("#bride_name").val();
    var bride_email=$("#bride_email").val();
    var bride_dob=$("#bride_dob").val();
    var bride_nid=$("#bride_nid").val();
    var bride_father_name=$("#bride_father_name").val();
    var bride_father_nid=$("#bride_father_nid").val();
    var bride_status=$("#bride_status").val();
    var married_groom_name=$("#married_groom_name").val();
    var married_groom_nid=$("#married_groom_nid").val();

    var religion=$("#religion").val();
    var mortgage_money=$("#mortgage_money").val();
    var paid_mortgage_money=$("#paid_mortgage_money").val();
    var fw_name=$("#fw_name").val();
    var fw_dob=$("#fw_dob").val();
    var fw_nid=$("#fw_nid").val();
    var fw_father_name=$("#fw_father_name").val();
    var fw_father_nid=$("#fw_father_nid").val();
    var admin_id=$("#admin_id").val();
    //var key=$("#key").val();

    //sending api request through axios
    axios({
    method:'post',
    url: '/action',
    groom_name:groom_name,
    groom_email:groom_email,
    groom_dob:groom_dob,
    groom_nid:groom_nid,
    groom_father_name:groom_father_name,
    groom_father_nid:groom_father_nid,
    groom_status:groom_status,
    married_bride_name:married_bride_name,
    married_bride_nid:married_bride_nid,

    bride_name:bride_name,
    bride_email:bride_email,
    bride_dob:bride_dob,
    bride_nid:bride_nid,
    bride_father_name:bride_father_name,
    bride_father_nid:bride_father_nid,
    bride_status:bride_status,
    married_groom_name:married_groom_name,
    married_groom_nid:married_groom_nid,

    religion:religion,
    mortgage_money:mortgage_money,
    paid_mortgage_money:paid_mortgage_money,

    fw_name:fw_name,
    fw_dob:fw_dob,
    fw_nid:fw_nid,
    fw_father_name:fw_father_name,
    fw_father_nid:fw_father_nid,
    admin_id:admin_id
  //  key:key
    })
</script>
@endsection
