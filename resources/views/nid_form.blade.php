@extends('layouts.app')

@section('content')

<!-- First Step -->
<form role="form" action="{{route('nid.post')}}" method="post">
  @csrf
  <div class="row setup-content-2 text-center" id="step-1">
      <div class="col-md-12">
          <h3 class="font-weight-bold pl-0 my-4"><strong>NID Information</strong></h3>
          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

              <div class="col-md-6">
                  <input id="dob" type="text" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" value="{{ old('birth_date') }}" required >
                  @if ($errors->has('birth_date'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('birth_date') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="nid_number" class="col-md-4 col-form-label text-md-right">{{ __('NID') }}</label>

              <div class="col-md-6">
                  <input id="nid_number" type="number" class="form-control{{ $errors->has('nid_number') ? ' is-invalid' : '' }}" name="nid_number" value="{{ old('nid_number') }}" required>

                  @if ($errors->has('nid_number'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('nid_number') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="father_name" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

              <div class="col-md-6">
                  <input id="father_name" type="text" class="form-control{{ $errors->has('father_name') ? ' is-invalid' : '' }}" name="father_name" value="{{ old('father_name') }}" required>

                  @if ($errors->has('father_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('father_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="mother_name" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

              <div class="col-md-6">
                  <input id="mother_name" type="text" class="form-control{{ $errors->has('mother_name') ? ' is-invalid' : '' }}" name="mother_name" value="{{ old('mother_name') }}" required>

                  @if ($errors->has('mother_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('mother_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="next" class="btn btn-mdb-color btn-rounded nextBtn-2 float-right">
                      {{ __('Save') }}
                  </button>
              </div>
            </div>
      </div>
  </div>

</form>

@endsection
