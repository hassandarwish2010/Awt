@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

<div class="row">
  <div class="col col-md-6">
    <div class="white-box">
      <div class="form-group">
          <label for="image">{{ __('lang.image') }} @isset($agent) @else * @endisset</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="ti-gallery"></i></div>
              <input type="file" class="form-control" id="image" name="image">
          </div>
          @isset($agent)
            <img src="{{ $agent->image }}" alt="Agent photo" class="thumb-image">
          @endisset
          <div class="input-group">
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
          </div>
      </div>
    </div>
  </div>
    <div class="col col-md-6">
        <div class="white-box">
            <div class="form-group">
                <label for="url">{{ __('lang.url') }} *</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-tag"></i></div>
                    <input type="text" class="form-control" id="url" placeholder="{{ __('lang.url') }}" name="url" value="@if(old('url') != null){{ old('url') }}@elseif(isset($agent)){{$agent->url}}@endif" required="required">
                </div>
                <div class="input-group">
                    @if ($errors->has('url'))
                        <span class="help-block">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
  
</div>
<div class="row">
    <div class="col col-md-12">
        <div class="white-box">
            <div class="form-group">
                <label style="height:14px;"></label>
                <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">{{ __('lang.save') }}</button>
            </div>
        </div>
    </div>
</div>
