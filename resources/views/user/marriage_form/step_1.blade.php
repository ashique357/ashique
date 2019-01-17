@extends('layouts.app')

@section('content')

<!-- First Step -->
<form role="form" action="{{route('marriage.form.step1.submit')}}" method="post">
  @csrf
  <div class="row setup-content-2 text-center" id="step-1">
      <div class="col-md-12">
          <h3 class="font-weight-bold pl-0 my-4"><strong>Groom's Information</strong></h3>
          <div class="form-group row">
              <label for="groom_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                  <input id="groom_name" type="text" class="form-control{{ $errors->has('groom_name') ? ' is-invalid' : '' }}" name="groom_name" value="{{ old('groom_name') }}" required autofocus>

                  @if ($errors->has('groom_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('groom_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="groom_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                  <input id="groom_email" type="email" class="form-control{{ $errors->has('groom_email') ? ' is-invalid' : '' }}" name="groom_email" value="{{ old('groom_email') }}" required>

                  @if ($errors->has('groom_email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('groom_email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="groom_dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

              <div class="col-md-6">
                  <input id="dob" type="text" class="form-control{{ $errors->has('groom_dob') ? ' is-invalid' : '' }}" name="groom_dob" value="{{ old('groom_dob') }}" required >
                  @if ($errors->has('groom_dob'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('groom_dob') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="groom_nid" class="col-md-4 col-form-label text-md-right">{{ __('NID') }}</label>

              <div class="col-md-6">
                  <input id="groom_nid" type="number" class="form-control{{ $errors->has('groom_nid') ? ' is-invalid' : '' }}" name="groom_nid" value="{{ old('groom_nid') }}" required>

                  @if ($errors->has('groom_nid'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('groom_nid') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="groom_father_name" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

              <div class="col-md-6">
                  <input id="groom_father_name" type="text" class="form-control{{ $errors->has('groom_father_name') ? ' is-invalid' : '' }}" name="groom_father_name" value="{{ old('groom_father_name') }}" required>

                  @if ($errors->has('groom_father_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('groom_father_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="groom_father_nid" class="col-md-4 col-form-label text-md-right">{{ __('Father NID') }}</label>

              <div class="col-md-6">
                  <input id="groom_father_nid" type="number" class="form-control{{ $errors->has('groom_father_nid') ? ' is-invalid' : '' }}" name="groom_father_nid" value="{{ old('groom_father_nid') }}" required>

                  @if ($errors->has('groom_father_nid'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('groom_father_nid') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Already Married?') }}</label>

              <div class="col-md-1">
                  <input type="radio" value="true" checked id="married" name="groom_status" oninput='on_change(event)'>Yes
                  <input type="radio" value="false" checked id="married" name="groom_status" oninput='on_change(event)'>No
              </div>
          </div>

          <div id="bride_details" style="display:none;">
            <div class="form-group row">
                <label for="married_bride_name" class="col-md-4 col-form-label text-md-right">{{ __('Bride Name') }}</label>

                <div class="col-md-6">
                    <input id="married_bride_name" type="text" class="form-control{{ $errors->has('married_bride_name') ? ' is-invalid' : '' }}" name="married_bride_name" value="{{ old('married_bride_name') }}">

                    @if ($errors->has('married_bride_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('married_bride_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="married_bride_nid" class="col-md-4 col-form-label text-md-right">{{ __('NID For Bride') }}</label>

                <div class="col-md-6">
                    <input id="married_bride_nid" type="text" class="form-control{{ $errors->has('married_bride_nid') ? ' is-invalid' : '' }}" name="married_bride_nid" value="{{ old('married_bride_nid') }}">

                    @if ($errors->has('married_bride_nid'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('married_bride_nid') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>


          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="next" class="btn btn-mdb-color btn-rounded nextBtn-2 float-right">
                      {{ __('Next') }}
                  </button>
              </div>
            </div>
      </div>
  </div>

</form>

<script type="text/javascript">
function on_change(el){
    var selectedOption = el.target.value;
    if (selectedOption === 'true') {
      document.getElementById('bride_details').style.display = 'block';
    } else {
      document.getElementById('bride_details').style.display = 'none'; // Hide el
    }
  }


</script>

@endsection
