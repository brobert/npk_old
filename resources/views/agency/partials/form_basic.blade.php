<div class="form-group">
    <div class="col-md-12">
        <h5 class="semibold text-primary nm">{{ trans('agency.form.f_basic_title') }}</h5>
        <p class="text-muted nm">{{ trans('agency.form.f_basic_description') }}</p>
    </div>
</div>
<!-- name  -->
<div class="form-group">
    <label class="col-sm-2 control-label">{{ trans('agency.form.name') }}<span class="text-danger">*</span></label>
    <div class="col-sm-5">
        <input
            type="text"
            name="name"
            class="form-control"
            data-parsley-group="basic"
            data-parsley-required
            data-parsley-required-message="Please insert your name"
            placeholder="{{ trans('agency.form.ph_name') }}"
            value="{{$agency->name or ''}}"
        />
    </div>
</div>

<!-- description -->
<div class="form-group">
    <label class="col-sm-2 control-label">{{ trans('agency.form.description') }}</label>
    <div class="col-md-10">
        <textarea
            name="description"
            class="form-control"
            rows="5"
            data-parsley-group="basic"
            placeholder="{{ trans('agency.form.ph_description') }}"
            data-parsley-group="basic"
        >{{$agency->description or ''}}</textarea>
    </div>
</div>
