@extends('layouts.app')

@section('content')

<form role="form" action="{{route('marriage.form.step2.submit')}}" method="post">
  @csrf
  <div class="row setup-content-2 text-center" id="step-2">
      <div class="col-md-12">
          <h3 class="font-weight-bold pl-0 my-4"><strong>Bride's Information</strong></h3>
          <div class="form-group row">
              <label for="bride_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                  <input id="bride_name" type="text" class="form-control{{ $errors->has('bride_name') ? ' is-invalid' : '' }}" name="bride_name" value="{{ old('bride_name') }}" required autofocus>

                  @if ($errors->has('bride_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('bride_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="bride_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                  <input id="bride_email" type="email" class="form-control{{ $errors->has('bride_email') ? ' is-invalid' : '' }}" name="bride_email" value="{{ old('bride_email') }}" required>

                  @if ($errors->has('bride_email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('bride_email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="bride_dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

              <div class="col-md-6">
                  <input id="dob" type="text" class="form-control{{ $errors->has('bride_dob') ? ' is-invalid' : '' }}" name="bride_dob" value="{{ old('bride_dob') }}" required>

                  @if ($errors->has('bride_dob'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('bride_dob') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="bride_nid" class="col-md-4 col-form-label text-md-right">{{ __('NID') }}</label>

              <div class="col-md-6">
                  <input id="bride_nid" type="number" class="form-control{{ $errors->has('bride_nid') ? ' is-invalid' : '' }}" name="bride_nid" value="{{ old('bride_nid') }}" required>

                  @if ($errors->has('bride_nid'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('bride_nid') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="bride_father_name" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

              <div class="col-md-6">
                  <input id="bride_father_name" type="text" class="form-control{{ $errors->has('bride_father_name') ? ' is-invalid' : '' }}" name="bride_father_name" value="{{ old('bride_father_name') }}" required>

                  @if ($errors->has('bride_father_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('bride_father_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="bride_father_nid" class="col-md-4 col-form-label text-md-right">{{ __('Father NID') }}</label>

              <div class="col-md-6">
                  <input id="bride_father_nid" type="number" class="form-control{{ $errors->has('bride_father_nid') ? ' is-invalid' : '' }}" name="bride_father_nid" value="{{ old('bride_father_nid') }}" required>

                  @if ($errors->has('bride_father_nid'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('bride_father_nid') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Already Married?') }}</label>

              <div class="col-md-1">
                  <input type="radio" value="true" checked id="married" name="bride_status" oninput='on_change(event)'>Yes
                  <input type="radio" value="false" checked id="married" name="bride_status" oninput='on_change(event)'>No
              </div>
          </div>

          <div id="groom_details" style="display:none;">
            <div class="form-group row">
                <label for="married_groom_name" class="col-md-4 col-form-label text-md-right">{{ __('Groom Name') }}</label>

                <div class="col-md-6">
                    <input id="married_groom_name" type="text" class="form-control{{ $errors->has('married_groom_name') ? ' is-invalid' : '' }}" name="married_groom_name" value="{{ old('married_groom_name') }}">

                    @if ($errors->has('married_groom_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('married_groom_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="married_groom_nid" class="col-md-4 col-form-label text-md-right">{{ __('NID For Groom') }}</label>

                <div class="col-md-6">
                    <input id="married_groom_nid" type="text" class="form-control{{ $errors->has('married_groom_nid') ? ' is-invalid' : '' }}" name="married_groom_nid" value="{{ old('married_groom_nid') }}">

                    @if ($errors->has('married_groom_nid'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('married_groom_nid') }}</strong>
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
                  <button type="previous" class="btn btn-mdb-color btn-rounded nextBtn-2 float-left">
                      {{ __('Previous') }}
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
      document.getElementById('groom_details').style.display = 'block';
    } else {
      document.getElementById('groom_details').style.display = 'none'; // Hide el
    }
  }


</script>
@endsection
