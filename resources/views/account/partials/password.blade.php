<form method="post" action="{{url('/account/password')}}" class="panel form-horizontal form-bordered" name="form-password">
{{ csrf_field() }}
    <div class="panel-body pt0 pb0">
        <div class="form-group header bgcolor-default">
            <div class="col-md-12">
                <h4 class="semibold text-primary mt0 mb5">{{trans('form.user.password')}}</h4>
                <p class="text-default nm">{{trans('form.user.password_desc')}}</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">{{trans('form.user.label.password')}}</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password" placeholder="{{trans('form.user.placeholder.password')}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">{{trans('form.user.label.new_password')}}</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="new_password" placeholder="{{trans('form.user.placeholder.new_password')}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">{{trans('form.user.label.new_password_confirmed')}}</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="new_password_confirmed" placeholder="{{trans('form.user.placeholder.new_password_confirmed')}}">
            </div>
        </div>
    </div>
    <div class="panel-footer">
        @include('common.form_buttons')
    </div>
</form>