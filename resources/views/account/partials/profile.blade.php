<!-- form profile -->
<form method="post" action="{{url('/account')}}" class="panel panel-default form-bordered" name="form-profile">
    {{ csrf_field() }}
    <div class="panel-heading">
        <h4 class="semibold text-primary mt10 mb5">{{trans('form.user.profile')}}</h4>
    </div>
    <div class="panel-body pt0 pb0">
        <div class="form-group mt10 bb">
            <div class="row">
                <div class="col-sm-4">
                    <label class="control-label">{{ trans('form.label.field.agency') }}</label>
                    @if( isset( $agencies) )
                    <select name="agency_id" class="form-control">
                        @foreach( $agencies as $agency_data )
                            <option value="{{ $agency_data->id }}" @if( $agency_data->id == Auth::user()->agency_id) selected @endif >{{ $agency_data->name }}</option>
                        @endforeach
                    </select>
                    @else
                        <input name="name" type="text" class="form-control" value="{{Auth::user()->agency->name }}" disabled>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group mt10 bb">
            <div class="row">
                <div class="col-sm-4">
                    <label class="control-label">{{ trans('form.label.field.name') }}</label>
                    <input name="name" type="text" class="form-control" value="{{Auth::user()->name }}">
                </div>
                <div class="col-sm-4">
                    <label class="control-label">{{ trans('form.label.field.second_name') }}</label>
                    <input name="second_name" type="text" class="form-control" value="{{Auth::user()->second_name }}">
                </div>
                <div class="col-sm-4">
                    <label class="control-label">{{ trans('form.label.field.sur_name') }}</label>
                    <input name="sur_name" type="text" class="form-control" value="{{Auth::user()->sur_name }}">
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group mt10 bb">
            <div class="row">
                <div class="col-sm-4">
                    <label class="control-label">{{ trans('form.label.field.login') }}</label>
                    <input name="login" type="text" class="form-control" value="{{Auth::user()->login }}">
                </div>
                <div class="col-sm-6">
                    <label class="control-label">{{ trans('form.label.field.email') }}</label>
                    <input name="email" type="text" class="form-control" value="{{ Auth::user()->email }}">
                </div>
            </div>
        </div>
        <hr/>
    </div>
    <div class="panel-footer">
        @include('common.form_buttons')
    </div>
</form>
<!--/ form profile -->