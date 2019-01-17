@extends('layouts.app')
@section('content')

<form role="form" action="{{route('marriage.form.step3.submit')}}" method="post">
  @csrf
<div class="row setup-content-2 text-center" id="step-3">
    <div class="col-md-12">
        <h3 class="font-weight-bold pl-0 my-4"><strong>Witness Information</strong></h3>
        <div class="form-group row">
            <label for="fw_name" class="col-md-4 col-form-label text-md-right">{{ __('First Witness') }}</label>

            <div class="col-md-6">
                <input id="fw_name" type="text" class="form-control{{ $errors->has('fw_name') ? ' is-invalid' : '' }}" name="fw_name" value="{{ old('fw_name') }}" required autofocus>

                @if ($errors->has('fw_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fw_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="fw_dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

            <div class="col-md-6">
                <input id="dob" type="text" class="form-control{{ $errors->has('fw_dob') ? ' is-invalid' : '' }}" name="fw_dob" value="{{ old('fw_dob') }}" required>

                @if ($errors->has('fw_dob'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fw_dob') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="fw_nid" class="col-md-4 col-form-label text-md-right">{{ __('First Witness NID') }}</label>

            <div class="col-md-6">
                <input id="fw_nid" type="number" class="form-control{{ $errors->has('fw_nid') ? ' is-invalid' : '' }}" name="fw_nid" value="{{ old('fw_nid') }}" required>

                @if ($errors->has('fw_nid'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fw_nid') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="fw_father_name" class="col-md-4 col-form-label text-md-right">{{ __('First Witness Father Name') }}</label>

            <div class="col-md-6">
                <input id="fw_father_name" type="text" class="form-control{{ $errors->has('fw_father_name') ? ' is-invalid' : '' }}" name="fw_father_name" value="{{ old('fw_father_name') }}" required>

                @if ($errors->has('fw_father_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fw_father_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="fw_father_nid" class="col-md-4 col-form-label text-md-right">{{ __('First Witness Father NID') }}</label>

            <div class="col-md-6">
                <input id="fw_father_nid" type="number" class="form-control{{ $errors->has('fw_father_nid') ? ' is-invalid' : '' }}" name="fw_father_nid" value="{{ old('fw_father_nid') }}" required>

                @if ($errors->has('fw_father_nid'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fw_father_nid') }}</strong>
                    </span>
                @endif
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

<link href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript">

$("#dob").datepicker().datepicker("setDate", "today");
</script>
@endsection
