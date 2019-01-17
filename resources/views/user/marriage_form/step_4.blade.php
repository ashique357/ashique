@extends('layouts.app')
@section('content')

<form role="form" action="{{route('marriage.form.step4.submit')}}" method="post">
  @csrf
  <div class="row setup-content-2 text-center" id="step-4">
      <div class="col-md-12">
        <div class="form-group row">
          <label for="pin" class="col-md-4 col-form-label text-md-right">{{ __('PIN') }}</label>

            <div class="col-md-6">
                <input id="pin" type="text" class="form-control{{ $errors->has('pin') ? ' is-invalid' : '' }}" name="pin" value="{{ old('pin') }}" required autofocus>

                @if ($errors->has('pin'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pin') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Select Religion') }}</label>

            <div class="col-md-2">
                <input type="radio" value="muslim" checked id="muslim" name="religion" oninput='on_change(event)'>Muslim
                <input type="radio" value="hindu" checked id="hindu" name="religion" oninput='on_change(event)'>Hindu
                <input type="radio" value="christian" checked id="christian" name="religion" oninput='on_change(event)'>Christian
                <input type="radio" value="n/a" checked id="n/a" name="religion" oninput='on_change(event)'>N/A
            </div>
        </div>

        <div id="money_details" style="display:none;">
          <div class="form-group row">
              <label for="mortgage_money" class="col-md-4 col-form-label text-md-right">{{ __('Amount of Money (In words)') }}</label>

              <div class="col-md-6">
                  <input id="mortgage_money" type="text" class="form-control{{ $errors->has('mortgage_money') ? ' is-invalid' : '' }}" name="mortgage_money" value="{{ old('mortgage_money') }}">

                  @if ($errors->has('mortgage_money'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('mortgage_money') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="paid_mortgage_money" class="col-md-4 col-form-label text-md-right">{{ __('Paid Amount of Money (In words)') }}</label>

              <div class="col-md-6">
                  <input id="paid_mortgage_money" type="text" class="form-control{{ $errors->has('paid_mortgage_money') ? ' is-invalid' : '' }}" name="paid_mortgage_money" value="{{ old('paid_mortgage_money') }}">

                  @if ($errors->has('paid_mortgage_money'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('paid_mortgage_money') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
      </div>

        <div class="form-group">
              <label for="" class="col-md-4 form-control-label text-md-right">{{ __('Select Kazi') }}</label>
              <div class="col-md-6">
                <select name="admin_id" id="inputlevel_id" class="form-control" required="required">
                    @foreach ($admins as $admin)
                      <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                    @endforeach
                </select>
              </div>
          </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-mdb-color btn-rounded nextBtn-2 float-right">
                    {{ __('Submit') }}
                </button>
            </div>
          </div>
      </div>
  </div>
</form>

<script type="text/javascript">
function on_change(el){
    var selectedOption = el.target.value;
    if (selectedOption === 'muslim') {
      document.getElementById('money_details').style.display = 'block';
    } else {
      document.getElementById('money_details').style.display = 'none'; // Hide el
    }
  }


</script>

@endsection
