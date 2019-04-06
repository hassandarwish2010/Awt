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
@section('js')

    <script src="https://cdn.ckeditor.com/4.4.3/full/ckeditor.js"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2');
        });
    </script>
@endsection
<div class="row">
  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="en_name">{{ __('lang.en_name') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" id="en_name" placeholder="{{ __('lang.en_name') }}" name="en_name" value="@if(old('en_name') != null){{ old('en_name') }}@elseif(isset($category)){{$category->en_name}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('en_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('en_name') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
  <div class="col col-md-6" style="display: none">
      <div class="white-box">
        <div class="form-group">
            <label for="name">{{ __('lang.ar_name') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                {{--@if(old('ar_name') != null){{ old('ar_name') }}@elseif(isset($category)){{$category->ar_name}}@endif--}}
                <input type="hidden" class="form-control" id="ar_name" placeholder="{{ __('lang.ar_name') }}" name="ar_name" value="cat" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('ar_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('ar_name') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
</div>

<div class="row" >
    <div class="col-md-12">
        <div class="white-box">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <label for="en_details">{{ __('lang.en_details') }} *</label>
                    {{----}}
                    <textarea id="editor1" name="en_details" rows="8" class="form-control" style="resize:vertical;width:100%;" placeholder="{{ __('lang.en_details') }}">@if(old('en_details') != null){{ old('en_details') }}@elseif(isset($category->en_details)){{$category->en_details}}@endif</textarea>
                    @if ($errors->has('en_details'))
                        <span class="help-block">
                        <strong>{{ $errors->first('en_details') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="white-space">
            <div class="form-group">
                <label for="image">{{ __('lang.image') }} Size(255*260)@isset($category) @else * @endisset</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="ti-gallery"></i></div>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                @isset($category)
                    <img src="{{ $category->image }}" alt="{{ $category->name }}" class="thumb-image">
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
</div>

<div class="row">
  <div class="col col-md-12">
    <div class="white-box">
      <div class="form-group">
          <label style="height:16px;"></label>
          <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">{{ __('lang.save') }}</button>
      </div>
    </div>
  </div>
</div>
