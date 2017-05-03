<div class="form-group">
    <div class="col-md-12">
        <h5 class="semibold text-primary nm">{{ trans('agency.form.f_tax_title') }}</h5>
        <p class="text-muted nm">{{ trans('agency.form.f_tax_description') }}</p>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">{{ trans('agency.form.vatin') }} <span class="text-danger">*</span></label>
    <div class="col-sm-5">
        <input
            name="vatin"
            type="number"
            class="form-control"
            data-parsley-group="tax"
            data-parsley-required
            data-parsley-pattern="[0-9\-]{10,13}"
            placeholder="{{ trans('agency.form.ph_vatin') }}"
            value="{{$agency->vatin or ''}}"
        />
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">{{ trans('agency.form.regon') }} <span class="text-danger">*</span></label>
    <div class="col-sm-5">
        <input
            type="text"
            name="regon"
            class="form-control"
            data-parsley-group="tax"
            data-parsley-required
            data-parsley-pattern="[0-9\-]+"
            placeholder="{{ trans('agency.form.ph_regon') }}"
            value="{{$agency->regon or ''}}"
        />
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">{{ trans('agency.form.krs') }} <span class="text-danger">*</span></label>
    <div class="col-sm-5">
        <input
            type="text"
            name="krs"
            class="form-control"
            data-parsley-group="tax"
            data-parsley-required
            data-parsley-type="number"
            placeholder="{{ trans('agency.form.ph_krs') }}"
            value="{{$agency->krs or ''}}"
        />
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">{{ trans('agency.form.bank_account_number') }} <span class="text-danger">*</span></label>
    <div class="col-sm-5">
        <input
            type="text"
            name="bank_account_number"
            class="form-control"
            data-parsley-group="tax"
            data-parsley-required
            data-parsley-pattern="[0-9\-]+"
            placeholder="{{ trans('agency.form.ph_bank_account_number') }}"
            value="{{$agency->bank_account_number or ''}}"
        />
    </div>
</div>