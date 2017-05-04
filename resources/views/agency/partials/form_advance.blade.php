<div class="form-group">
    <div class="col-md-12">
        <h5 class="semibold text-primary nm">{{ trans('agency.form.f_advance_title') }}</h5>
        <p class="text-muted nm">{{ trans('agency.form.f_advance_description') }}</p>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">{{ trans('agency.form.owner') }} <span class="text-danger">*</span></label>
    <div class="col-sm-10">
        <input
            type="text"
            name="owner"
            class="form-control"
            data-parsley-group="advance"
            data-parsley-required
            placeholder="{{ trans('agency.form.ph_owner') }}"
            value="{{$agency->owner or ''}}"
        />
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">{{ trans('agency.form.contact') }} <span class="text-danger">*</span></label>
    <div class="col-sm-5">
        <input
            name="e_mail"
            type="text"
            class="form-control"
            data-parsley-group="advance"
            data-parsley-required
            data-parsley-type="email"
            placeholder="{{ trans('agency.form.ph_e_mail') }}"
            value="{{$agency->e_mail or ''}}"
        />
    </div>
    <div class="col-sm-5">
        <input
            type="text"
            name="phone"
            class="form-control"
            data-parsley-group="advance"
            data-parsley-required
            data-parsley-type="number"
            placeholder="{{ trans('agency.form.ph_phone') }}"
            value="{{$agency->phone or ''}}"
        />
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">{{ trans('agency.form.adress') }} <span class="text-danger">*</span></label>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-6">
                <input
                    type="text"
                    name="street"
                    class="form-control mb5"
                    data-parsley-group="advance"
                    data-parsley-required
                    placeholder="{{ trans('agency.form.ph_street') }}"
                    value="{{$agency->street or ''}}"
                />
            </div>
            <div class="col-sm-3">
                <input
                    type="text"
                    name="house_number"
                    class="form-control mb5"
                    data-parsley-group="advance"
                    data-parsley-required
                    placeholder="{{ trans('agency.form.ph_house_number') }}"
                    value="{{$agency->house_number or ''}}"
                />
            </div>
            <div class="col-sm-3">
                <input
                    type="text"
                    name="app_number"
                    class="form-control mb5"
                    data-parsley-group="advance"
                    placeholder="{{ trans('agency.form.ph_app_number') }}"
                    value="{{$agency->app_number or ''}}"
                    />
            </div>
            <div class="col-sm-2">
                <input
                    type="text"
                    name="postal_code"
                    class="form-control mb5"
                    data-parsley-group="advance"
                    data-parsley-required
                    placeholder="{{ trans('agency.form.ph_postal_code') }}"
                    value="{{$agency->postal_code or ''}}"
                />
            </div>
            <div class="col-sm-5">
                <input
                    type="text"
                    name="city"
                    class="form-control mb5"
                    data-parsley-group="advance"
                    data-parsley-required
                    placeholder="{{ trans('agency.ph_form.city') }}"
                    value="{{$agency->city or ''}}"
                />
            </div>
            <div class="col-sm-5">
                <input
                    type="text"
                    name="state"
                    class="form-control mb5"
                    data-parsley-group="advance"
                    data-parsley-required
                    placeholder="{{ trans('agency.form.ph_state') }}"
                    value="{{$agency->state or ''}}"
                />
            </div>
        </div>
    </div>
</div>